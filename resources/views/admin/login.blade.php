<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="flex flex-col items-center mb-8">
            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center text-white font-bold text-xs leading-tight">
                <div class="text-center">
                    <div>AD</div>
                    <div>MIRROR</div>
                    <div>PHOTO</div>
                    <div>BOOTH</div>
                </div>
            </div>
            <h1 class="mt-6 text-2xl font-bold text-gray-800">Admin Access</h1>
            <p class="text-sm text-gray-500 mt-1">Sign in to access the admin dashboard</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 text-red-700 px-4 py-3 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="bg-white rounded-xl shadow p-6 space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="you@example.com">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="••••••••">
            </div>
            <div class="flex items-center justify-between text-sm">
                <label class="inline-flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-amber-600 focus:ring-amber-500">
                    <span class="text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-amber-600 hover:text-amber-700">Forgot your password?</a>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-amber-600 to-orange-500 text-white font-semibold py-3 rounded-lg hover:opacity-95 transition">
                Sign in to Admin Panel
            </button>
        </form>
    </div>
</body>
</html>


