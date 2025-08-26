<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#8a4813ff',
              secondary: '#944403ff',
              accent: '#8b4d05ff',
            },
            fontFamily: {
              'inter': ['Inter','sans-serif']
            }
          }
        }
      }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .parallax-element { will-change: transform; }
        .glass { background: rgba(255,255,255,0.85); backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,0.3); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="relative min-h-screen overflow-hidden bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 flex items-center justify-center p-4">
    <!-- Decorative background video (muted, subtle) -->
    <video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover -z-10 opacity-10">
        <source src="/image/AD.mp4" type="video/mp4">
    </video>

    <!-- Parallax decorative blobs -->
    <div aria-hidden="true">
        <div class="parallax-element absolute -top-10 -left-10 w-40 h-40 rounded-full blur-2xl bg-gradient-to-br from-primary to-secondary opacity-30" data-speed="0.2"></div>
        <div class="parallax-element absolute top-1/3 -right-10 w-56 h-56 rounded-full blur-3xl bg-gradient-to-br from-accent to-primary opacity-20" data-speed="0.35"></div>
        <div class="parallax-element absolute bottom-0 left-1/3 w-64 h-64 rounded-full blur-3xl bg-gradient-to-br from-secondary to-accent opacity-20" data-speed="0.15"></div>
    </div>

    <div class="w-full max-w-md relative z-10">
       

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-700 px-4 py-3 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="glass rounded-2xl shadow-2xl p-6 md:p-8 space-y-5 relative overflow-hidden">
            @csrf
            <!-- Form header with logo and subtle parallax accents -->
            <div class="relative pb-4">
                <!-- inner decorative parallax blobs -->
                <span class="form-parallax pointer-events-none absolute -top-6 -left-6 w-20 h-20 rounded-full blur-xl bg-gradient-to-br from-primary/30 to-secondary/30"></span>
                <span class="form-parallax pointer-events-none absolute -bottom-4 -right-6 w-24 h-24 rounded-full blur-2xl bg-gradient-to-br from-accent/25 to-primary/25"></span>
                <div class="flex flex-col items-center text-center relative z-10">
                    <img src="/image/nalbu.png" alt="AD Logo" class="w-20 h-20 object-contain drop-shadow-xl select-none">
                    <h2 class="mt-3 text-xl font-extrabold bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">Admin Access</h2>
                    <p class="text-xs text-gray-600">Sign in to access the admin dashboard</p>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary" placeholder="you@example.com">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary" placeholder="••••••••">
            </div>
            <div class="flex items-center justify-between text-sm">
                <label class="inline-flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-primary focus:ring-primary">
                    <span class="text-gray-700">Remember me</span>
                </label>
                <a href="#" class="text-primary hover:text-secondary">Forgot your password?</a>
            </div>
            <button type="submit" class="w-full relative overflow-hidden bg-gradient-to-r from-primary via-secondary to-accent text-white font-semibold py-3 rounded-lg hover:shadow-2xl transform hover:scale-[1.01] transition-all">
                <span class="relative z-10">Sign in to Admin Panel</span>
                <span class="absolute inset-0 opacity-0 hover:opacity-100 transition-opacity bg-gradient-to-r from-accent via-primary to-secondary"></span>
            </button>
        </form>
        <div class="mt-6 text-center text-xs text-gray-500">&copy; {{ date('Y') }} AD Mirror Photo Booth</div>
    </div>

    <script>
      // Lightweight parallax for background blobs
      (function(){
        const nodes = Array.from(document.querySelectorAll('.parallax-element'));
        let scrollY = window.pageYOffset || 0;
        function onScroll(){
          scrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
          update();
        }
        function onMouseMove(e){
          const cx = (e.clientX / window.innerWidth - 0.5) * 10;
          const cy = (e.clientY / window.innerHeight - 0.5) * 10;
          nodes.forEach(el => {
            const s = parseFloat(el.getAttribute('data-speed') || '0.2');
            const y = -(scrollY * s);
            el.style.transform = `translate(${cx}px, ${y + cy}px)`;
          });
        }
        function update(){
          nodes.forEach(el => {
            const s = parseFloat(el.getAttribute('data-speed') || '0.2');
            const y = -(scrollY * s);
            el.style.transform = `translateY(${y}px)`;
          });
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('mousemove', onMouseMove, { passive: true });
        update();
      })();
      // Subtle parallax inside the form card
      (function(){
        const form = document.querySelector('form.glass');
        if(!form) return;
        const parts = Array.from(form.querySelectorAll('.form-parallax'));
        function onMove(e){
          const rect = form.getBoundingClientRect();
          const x = ((e.clientX - rect.left) / rect.width - 0.5) * 16; // max 16px
          const y = ((e.clientY - rect.top) / rect.height - 0.5) * 16;
          parts.forEach((el, i)=>{
            const depth = (i+1) * 0.4; // stagger
            el.style.transform = `translate(${x*depth}px, ${y*depth}px)`;
          });
        }
        function onLeave(){ parts.forEach(el=>{ el.style.transform = 'translate(0,0)'; }); }
        form.addEventListener('mousemove', onMove, { passive: true });
        form.addEventListener('mouseleave', onLeave, { passive: true });
      })();
    </script>
</body>
</html>


