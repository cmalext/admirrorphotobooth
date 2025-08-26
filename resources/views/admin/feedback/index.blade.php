<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Feedback</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: { colors: { primary: '#8a4813ff', secondary: '#944403ff', accent: '#8b4d05ff' } } } }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
  </head>
<body class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50/30 to-yellow-50/30">
  <header class="sticky top-0 z-40 bg-white/70 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
      <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center font-bold text-primary">AD</div>
      <div class="ml-auto flex items-center gap-4 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="px-3 py-1.5 rounded-lg ring-1 ring-gray-300 hover:bg-gray-50">Dashboard</a>
      </div>
    </div>
  </header>
  <main class="max-w-7xl mx-auto px-4 py-6 space-y-6">
    @if(session('success'))
      <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">{{ session('success') }}</div>
    @endif
    <div class="flex items-center justify-between">
      <div>
        <h1 class="text-2xl font-bold text-gray-900">Manage Feedback</h1>
        <p class="text-gray-600 mt-1">Review and manage user feedback submissions.</p>
      </div>
    </div>

    <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($feedback as $item)
          <div class="rounded-xl ring-1 ring-gray-200 p-5 bg-white flex flex-col">
            <div class="flex items-center justify-between mb-2">
              <div class="font-semibold text-gray-900">{{ $item->name }}</div>
              <div class="text-xs px-2 py-1 rounded-full {{ $item->is_approved ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                {{ $item->is_approved ? 'Approved' : 'Pending' }}
              </div>
            </div>
            <div class="text-xs text-gray-500 mb-3">{{ $item->email }}</div>
            <div class="flex items-center gap-1 mb-3">
              @for($i=1; $i<=5; $i++)
                <i class="fa{{ $i <= $item->rating ? 's' : 'r' }} fa-star text-amber-400"></i>
              @endfor
            </div>
            <p class="text-gray-700 text-sm flex-1">{{ $item->comment }}</p>
            <div class="flex gap-2 mt-4">
              
              <form action="{{ route('feedback.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete this feedback?')">
                @csrf
                @method('DELETE')
                <button class="px-3 py-2 rounded-lg bg-red-50 text-red-600 text-sm hover:bg-red-100">Delete</button>
              </form>
            </div>
          </div>
        @empty
          <div class="col-span-full text-center text-gray-600">No feedback yet.</div>
        @endforelse
      </div>
      <div class="mt-6">{{ $feedback->links() }}</div>
    </div>
  </main>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</body>
</html>


