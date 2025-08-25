<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Feedback</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: { colors: { primary: '#8a4813ff', secondary: '#944403ff', accent: '#8b4d05ff' } } } }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50/30 to-yellow-50/30">
  <header class="sticky top-0 z-40 bg-white/70 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
      <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center font-bold text-primary">AD</div>
      <div class="ml-auto flex items-center gap-4 text-sm">
        <a href="{{ route('feedback.index') }}" class="px-3 py-1.5 rounded-lg ring-1 ring-gray-300 hover:bg-gray-50">Back</a>
      </div>
    </div>
  </header>

  <main class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl p-6">
      <h1 class="text-2xl font-bold text-gray-900 mb-6">Edit Feedback</h1>

      <form action="{{ route('feedback.update', $feedback) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
            <input type="text" name="name" value="{{ old('name', $feedback->name) }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent">
            @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email', $feedback->email) }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent">
            @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Rating (1-5)</label>
            <input type="number" name="rating" min="1" max="5" value="{{ old('rating', $feedback->rating) }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent">
            @error('rating')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
          </div>
          <div class="flex items-center">
            <input type="checkbox" name="is_approved" id="is_approved" value="1" {{ old('is_approved', $feedback->is_approved) ? 'checked' : '' }} class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary focus:ring-2">
            <label for="is_approved" class="ml-2 text-sm text-gray-700">Approved</label>
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Comment</label>
          <textarea name="comment" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent">{{ old('comment', $feedback->comment) }}</textarea>
          @error('comment')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
          <a href="{{ route('feedback.index') }}" class="px-5 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Cancel</a>
          <button type="submit" class="px-5 py-3 bg-gradient-to-r from-primary via-secondary to-accent text-white rounded-lg hover:shadow-lg">Save Changes</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>


