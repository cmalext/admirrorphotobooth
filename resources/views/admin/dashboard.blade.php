<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#8a4813ff',
              secondary: '#944403ff',
              accent: '#8b4d05ff',
            },
          }
        }
      }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .parallax { background-image: linear-gradient(to bottom right, #fff7ed, #fffbeb); }
        .parallax::before {
            content: "";
            position: fixed;
            inset: 0;
            background: radial-gradient(600px 200px at 10% 10%, rgba(138, 72, 19, 0.08), transparent),
                        radial-gradient(700px 250px at 90% 20%, rgba(148, 68, 3, 0.07), transparent),
                        radial-gradient(800px 300px at 40% 80%, rgba(139, 77, 5, 0.06), transparent);
            z-index: -1;
        }
        .parallax-layer { position: fixed; inset: 0; z-index: -1; pointer-events: none; overflow: hidden; }
        .hover-lift { transition: transform .25s ease, box-shadow .25s ease; }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 35px rgba(0,0,0,.08); }
        .animate-on-scroll { opacity: 0; transform: translateY(16px); transition: all .6s cubic-bezier(.2,.8,.2,1); }
        .animate-on-scroll.animate-in { opacity: 1; transform: translateY(0); }
        .mouse-parallax { will-change: transform; }
        .gradient-animate { background-size: 400% 400%; animation: gradientShift 14s ease infinite; }
        @keyframes gradientShift {
          0% { background-position: 0% 50%; }
          50% { background-position: 100% 50%; }
          100% { background-position: 0% 50%; }
        }
        @keyframes floatSlow { 0%,100% { transform: translateY(0) } 50% { transform: translateY(-8px) } }
        @keyframes rotate3d { from { transform: rotate(0deg) } to { transform: rotate(360deg) } }
    </style>
</head>
<body class="parallax min-h-screen">
    <div class="parallax-layer">
        <div class="parallax-element absolute top-20 left-10 w-40 h-40 rounded-full bg-gradient-to-br from-primary to-secondary opacity-20 blur-2xl" data-speed="0.2"></div>
        <div class="parallax-element absolute top-1/3 right-20 w-32 h-32 rounded-full bg-gradient-to-br from-accent to-primary opacity-15 blur-2xl" data-speed="0.35"></div>
        <div class="parallax-element absolute bottom-24 left-1/3 w-56 h-56 rounded-full bg-gradient-to-br from-secondary to-accent opacity-10 blur-3xl" data-speed="0.15"></div>
        <div class="mouse-parallax absolute top-28 right-10 w-24 h-24 rounded-xl bg-gradient-to-br from-primary/30 to-accent/30 blur-xl" data-mouse-speed="18" style="animation: floatSlow 8s ease-in-out infinite"></div>
        <div class="mouse-parallax absolute bottom-10 left-10 w-20 h-20 rounded-full bg-gradient-to-br from-secondary/25 to-primary/25 blur-xl" data-mouse-speed="24" style="animation: floatSlow 10s ease-in-out infinite"></div>
        <svg class="parallax-element absolute top-10 right-1/3 w-24 h-24 opacity-10" viewBox="0 0 64 64" fill="none" data-speed="0.25" style="animation: rotate3d 24s linear infinite">
            <circle cx="32" cy="32" r="20" stroke="currentColor" class="text-primary" stroke-width="3" />
            <circle cx="32" cy="32" r="28" stroke="currentColor" class="text-secondary" stroke-width="2" />
        </svg>
    </div>
    <header class="bg-gradient-to-r from-primary via-secondary to-accent gradient-animate text-white">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center font-bold">AD</div>
                <h1 class="font-semibold">Admin Dashboard</h1>
            </div>
            <div class="flex items-center gap-4 text-sm">
                <span>Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="bg-white/20 hover:bg-white/30 px-3 py-1.5 rounded">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/80 backdrop-blur ring-1 ring-primary/10 rounded-xl shadow-xl p-6 flex items-center gap-4 hover-lift animate-on-scroll">
                <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v9a2 2 0 01-2 2H7l-4 3v-3H4a2 2 0 01-2-2V5z"/></svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Total Messages</div>
                    <div class="text-2xl font-bold">{{ $totalMessages }}</div>
                </div>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-secondary/10 rounded-xl shadow-xl p-6 flex items-center gap-4 hover-lift animate-on-scroll">
                <div class="w-12 h-12 rounded-lg bg-secondary/10 text-secondary flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zM9 9V5h2v4H9zm0 2h2v2H9v-2z"/></svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">Today's Messages</div>
                    <div class="text-2xl font-bold">{{ $todaysMessages }}</div>
                </div>
            </div>
            <div class="bg-white/80 backdrop-blur ring-1 ring-accent/10 rounded-xl shadow-xl p-6 flex items-center gap-4 hover-lift animate-on-scroll">
                <div class="w-12 h-12 rounded-lg bg-accent/10 text-accent flex items-center justify-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M6 2a1 1 0 000 2h8a1 1 0 100-2H6zM3 6a1 1 0 000 2h14a1 1 0 100-2H3zm3 4a1 1 0 000 2h8a1 1 0 100-2H6zm-3 4a1 1 0 000 2h14a1 1 0 100-2H3z"/></svg>
                </div>
                <div>
                    <div class="text-sm text-gray-500">This Week</div>
                    <div class="text-2xl font-bold">{{ $weeksMessages }}</div>
                </div>
            </div>
        </div>

        <section class="bg-white/80 backdrop-blur-xl ring-1 ring-primary/5 rounded-2xl shadow-xl p-8 animate-on-scroll">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold">Pinned Notes & Reminders</h2>
                <form method="POST" action="{{ route('pins.store') }}" class="flex gap-2">
                    @csrf
                    <input name="title" placeholder="Title" class="px-3 py-2 rounded-lg border border-gray-300 focus:ring-primary focus:outline-none" required>
                    <input name="content" placeholder="Optional content" class="px-3 py-2 rounded-lg border border-gray-300 focus:ring-primary focus:outline-none w-64">
                    <button class="bg-gradient-to-r from-primary via-secondary to-accent text-white px-4 py-2 rounded-lg">Add Pin</button>
                </form>
            </div>
            @if($pins->isEmpty())
                <div class="text-center text-gray-500 py-12">
                    <div class="mx-auto w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 012 0v5h4a1 1 0 010 2h-4v5a1 1 0 11-2 0V9H5a1 1 0 010-2h4V2z"/></svg>
                    </div>
                    <div class="font-medium">No pinned notes yet</div>
                    <p class="text-sm">Create your first note or reminder to get started.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($pins as $pin)
                        <div class="border rounded-xl p-4 bg-gradient-to-br from-white to-primary/5 hover-lift">
                            <div class="flex items-start justify-between">
                                <div>
                                    <div class="font-semibold">{{ $pin->title }}</div>
                                    @if($pin->content)
                                        <div class="text-sm text-gray-600 mt-1">{{ $pin->content }}</div>
                                    @endif
                                </div>
                                <form method="POST" action="{{ route('pins.destroy', $pin) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-gray-500 hover:text-red-600" title="Remove">✕</button>
                                </form>
                            </div>
                            <div class="text-xs text-gray-400 mt-2">{{ $pin->created_at->diffForHumans() }}</div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <section class="bg-white/80 backdrop-blur-xl ring-1 ring-primary/5 rounded-2xl shadow-xl p-8 animate-on-scroll">
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-lg font-semibold">Messages Received</h2>
                <a href="{{ url('/messages') }}" class="text-sm text-primary hover:text-secondary">View all</a>
            </div>
            @if($recentMessages->isEmpty())
                <div class="text-center text-gray-500 py-12">
                    <div class="mx-auto w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2.94 6.34A2 2 0 014.6 5h10.8a2 2 0 011.66.94L10 11.5 2.94 6.34zM2 7.92V14a2 2 0 002 2h12a2 2 0 002-2V7.92l-7.4 4.93a2 2 0 01-2.2 0L2 7.92z"/></svg>
                    </div>
                    <div class="font-medium">No messages yet</div>
                    <p class="text-sm">Messages from the contact form will appear here.</p>
                    <a href="/#contact" class="mt-4 inline-block bg-gradient-to-r from-primary via-secondary to-accent text-white px-4 py-2 rounded-lg">Test Contact Form</a>
                </div>
            @else
                <div class="overflow-x-auto -mx-4 sm:mx-0">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Email</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Event</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Message</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">When</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach($recentMessages as $msg)
                                <tr class="hover:bg-primary/5 animate-on-scroll">
                                    <td class="px-4 py-2">
                                        <button type="button"
                                                class="open-message text-primary hover:underline font-medium"
                                                data-name="{{ $msg->first_name }} {{ $msg->last_name }}"
                                                data-email="{{ $msg->email }}"
                                                data-phone="{{ $msg->phone }}"
                                                data-event="{{ $msg->event_type }}"
                                                data-message="{{ $msg->message }}"
                                                data-created="{{ $msg->created_at->format('Y-m-d H:i') }}">
                                            {{ $msg->first_name }} {{ $msg->last_name }}
                                        </button>
                                    </td>
                                    <td class="px-4 py-2"><a class="text-primary hover:underline" href="mailto:{{ $msg->email }}">{{ $msg->email }}</a></td>
                                    <td class="px-4 py-2">{{ $msg->event_type }}</td>
                                    <td class="px-4 py-2">{{ Str::limit($msg->message, 80) }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-500">{{ $msg->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </section>

        <!-- Message Modal -->
        <div id="messageModal" class="fixed inset-0 z-50 hidden">
            <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" data-close-modal></div>
            <div class="relative max-w-2xl mx-auto mt-20 bg-white/90 backdrop-blur-xl rounded-2xl shadow-2xl ring-1 ring-primary/10 overflow-hidden animate-on-scroll">
                <div class="absolute inset-0 pointer-events-none">
                    <div class="parallax-element absolute -top-10 -left-10 w-40 h-40 rounded-full bg-gradient-to-br from-primary/20 to-secondary/20 blur-3xl" data-speed="0.25"></div>
                    <div class="parallax-element absolute -bottom-10 -right-10 w-56 h-56 rounded-full bg-gradient-to-br from-accent/20 to-primary/20 blur-3xl" data-speed="0.15"></div>
                    <div class="mouse-parallax absolute top-6 right-8 w-20 h-20 rounded-xl bg-gradient-to-br from-primary/15 to-accent/15 blur-xl" data-mouse-speed="18"></div>
                </div>
                <div class="relative p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="text-xs uppercase tracking-wider text-gray-500">Message from</div>
                            <h3 class="text-2xl font-bold text-gray-800" id="modalName">Name</h3>
                        </div>
                        <button class="text-gray-500 hover:text-gray-700" data-close-modal aria-label="Close">✕</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div class="bg-white/70 rounded-lg p-4 ring-1 ring-gray-200">
                            <div class="text-xs text-gray-500">Email</div>
                            <div class="font-medium"><a id="modalEmail" class="text-primary hover:underline" href="#"></a></div>
                        </div>
                        <div class="bg-white/70 rounded-lg p-4 ring-1 ring-gray-200">
                            <div class="text-xs text-gray-500">Phone</div>
                            <div class="font-medium" id="modalPhone">—</div>
                        </div>
                        <div class="bg-white/70 rounded-lg p-4 ring-1 ring-gray-200">
                            <div class="text-xs text-gray-500">Event</div>
                            <div class="font-medium" id="modalEvent">—</div>
                        </div>
                        <div class="bg-white/70 rounded-lg p-4 ring-1 ring-gray-200">
                            <div class="text-xs text-gray-500">Received</div>
                            <div class="font-medium" id="modalCreated">—</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg p-5 ring-1 ring-gray-200">
                        <div class="text-xs text-gray-500 mb-2">Message</div>
                        <p class="leading-relaxed text-gray-800 whitespace-pre-wrap" id="modalMessage"></p>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-3">
                        <a id="modalReply" href="#" class="px-4 py-2 rounded-lg bg-gradient-to-r from-primary via-secondary to-accent text-white">Reply</a>
                        <button class="px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-50" data-close-modal>Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const elements = Array.from(document.querySelectorAll('.parallax-element'));
        const mouseEls = Array.from(document.querySelectorAll('.mouse-parallax'));
        let mouseX = 0, mouseY = 0;
        const update = () => {
          const y = window.scrollY || window.pageYOffset;
          elements.forEach(el => {
            const speed = parseFloat(el.dataset.speed || 0.2);
            el.style.transform = `translateY(${-(y * speed)}px)`;
          });
          mouseEls.forEach(el => {
            const s = parseFloat(el.dataset.mouseSpeed || 20);
            el.style.transform = `translate(${mouseX / s}px, ${mouseY / s}px)`;
          });
          requestAnimationFrame(update);
        };
        update();

        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animate-in');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        window.addEventListener('mousemove', (e) => {
          const cx = window.innerWidth / 2; const cy = window.innerHeight / 2;
          mouseX = (e.clientX - cx); mouseY = (e.clientY - cy);
        });

        // Modal wiring
        const modal = document.getElementById('messageModal');
        const openButtons = document.querySelectorAll('.open-message');
        const closeEls = modal.querySelectorAll('[data-close-modal]');
        const nameEl = document.getElementById('modalName');
        const emailEl = document.getElementById('modalEmail');
        const phoneEl = document.getElementById('modalPhone');
        const eventEl = document.getElementById('modalEvent');
        const createdEl = document.getElementById('modalCreated');
        const messageEl = document.getElementById('modalMessage');
        const replyEl = document.getElementById('modalReply');

        const openModal = (data) => {
          nameEl.textContent = data.name || 'Unknown';
          emailEl.textContent = data.email || '—';
          emailEl.href = data.email ? `mailto:${data.email}` : '#';
          phoneEl.textContent = data.phone || '—';
          eventEl.textContent = data.event || '—';
          createdEl.textContent = data.created || '—';
          messageEl.textContent = data.message || '';
          if (data.email) replyEl.href = `mailto:${data.email}`; else replyEl.removeAttribute('href');
          modal.classList.remove('hidden');
          document.body.classList.add('overflow-hidden');
        };

        openButtons.forEach(btn => btn.addEventListener('click', () => {
          openModal({
            name: btn.dataset.name,
            email: btn.dataset.email,
            phone: btn.dataset.phone,
            event: btn.dataset.event,
            message: btn.dataset.message,
            created: btn.dataset.created,
          });
        }));

        const closeModal = () => { modal.classList.add('hidden'); document.body.classList.remove('overflow-hidden'); };
        closeEls.forEach(el => el.addEventListener('click', closeModal));
        window.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal(); });
      });
    </script>
</body>
</html>


