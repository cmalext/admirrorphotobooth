<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Photo - Admin Dashboard</title>
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
        .hover-lift { transition: transform .25s ease, box-shadow .25s ease; }
        .hover-lift:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(0,0,0,.1); }
        .animate-on-scroll { opacity: 0; transform: translateY(16px); transition: all .6s cubic-bezier(.2,.8,.2,1); }
        .animate-on-scroll.animate-in { opacity: 1; transform: translateY(0); }
        .image-preview { max-width: 100%; max-height: 300px; object-fit: cover; }
        .drag-area { border: 2px dashed #d1d5db; transition: all 0.3s ease; }
        .drag-area.dragover { border-color: #8a4813; background-color: #fef3c7; }
    </style>
</head>
<body class="parallax min-h-screen">
    <header class="sticky top-0 z-40 bg-white/70 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-3">
            <div class="flex items-center gap-3 mr-2">
                <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center font-bold text-primary">AD</div>
            </div>
            <div class="ml-auto flex items-center gap-4 text-sm">
                <span class="text-gray-700">Hi, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-3 py-1.5 rounded-lg ring-1 ring-gray-300 hover:bg-gray-50">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 py-6 flex gap-6">
        <aside class="w-64 shrink-0">
            <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-2xl p-3 sticky top-24">
                <a href="{{ route('admin.dashboard') }}" class="w-full mb-2 px-4 py-3 rounded-xl text-white bg-gradient-to-r from-primary via-secondary to-accent block text-center">Dashboard</a>
                <nav class="text-sm">
                    <a href="{{ route('messages.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/5 text-gray-700">
                        <span class="inline-flex w-5"><svg class="w-5 h-5 text-primary" viewBox="0 0 20 20" fill="currentColor"><path d="M2.94 6.34A2 2 0 014.6 5h10.8a2 2 0 011.66.94L10 11.5 2.94 6.34zM2 7.92V14a2 2 0 002 2h12a2 2 0 002-2V7.92l-7.4 4.93a2 2 0 01-2.2 0L2 7.92z"/></svg></span>
                        Inbox
                    </a>
                    <a href="{{ route('pins.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/5 text-gray-700">
                        <span class="inline-flex w-5"><svg class="w-5 h-5 text-accent" viewBox="0 0 20 20" fill="currentColor"><path d="M9 2a1 1 0 012 0v5h4a1 1 0 010 2h-4v5a1 1 0 11-2 0V9H5a1 1 0 010-2h4V2z"/></svg></span>
                        Pins
                    </a>
                    <a href="{{ route('packages.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-primary/5 text-gray-700">
                        <span class="inline-flex w-5"><svg class="w-5 h-5 text-primary" viewBox="0 0 20 20" fill="currentColor"><path d="M4 4a2 2 0 00-2 2v7a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 3h4v2H6V7zm0 3h8v2H6v-2z"/></svg></span>
                        Packages
                    </a>
                    <a href="{{ route('photos.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-medium">
                        <span class="inline-flex w-5"><svg class="w-5 h-5 text-primary" viewBox="0 0 20 20" fill="currentColor"><path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/></svg></span>
                        Photos
                    </a>
                </nav>
            </div>
        </aside>

        <main class="flex-1 space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Edit Photo</h1>
                    <p class="text-gray-600 mt-1">Update photo information and settings</p>
                </div>
                <a href="{{ route('photos.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                    ← Back to Photos
                </a>
            </div>

            <div class="bg-white/80 backdrop-blur ring-1 ring-gray-200 rounded-xl p-6">
                <form action="{{ route('photos.update', $photo) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div class="space-y-6">
                            <!-- Title -->
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Photo Title *</label>
                                <input type="text" name="title" id="title" value="{{ old('title', $photo->title) }}" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                    placeholder="Enter photo title">
                                @error('title')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Event Type (typeable with suggestions) -->
                            <div>
                                <label for="event_type_input" class="block text-sm font-medium text-gray-700 mb-2">Event Type *</label>
                                <input list="event_type_suggestions" name="event_type_input" id="event_type_input" value="{{ old('event_type_input', $photo->event_label ?: $photo->event_type) }}" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                    placeholder="Type or choose: Wedding, Corporate Event, Birthday Party, ...">
                                <datalist id="event_type_suggestions">
                                    @foreach($eventTypes as $eventType)
                                        <option value="{{ $eventType }}">
                                    @endforeach
                                </datalist>
                                @error('event_type_input')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Custom Event Label becomes auto if typed doesn't match; keep optional for clarity -->
                            <div>
                                <label for="event_label" class="block text-sm font-medium text-gray-700 mb-2">Custom Event Label (optional)</label>
                                <input type="text" name="event_label" id="event_label" value="{{ old('event_label', $photo->event_label) }}"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                    placeholder="e.g., Silver Wedding of Mark & Jane">
                                <p class="text-xs text-gray-500 mt-1">If your typed event isn't a standard type, it will be saved as "Other" with this label.</p>
                                @error('event_label')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                <textarea name="description" id="description" rows="4"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                    placeholder="Enter photo description (optional)">{{ old('description', $photo->description) }}</textarea>
                                @error('description')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Sort Order -->
                            <div>
                                <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $photo->sort_order) }}" min="0"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                    placeholder="0">
                                <p class="text-sm text-gray-500 mt-1">Lower numbers appear first</p>
                                @error('sort_order')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Active Status -->
                            <div class="flex items-center">
                                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $photo->is_active) ? 'checked' : '' }}
                                    class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary focus:ring-2">
                                <label for="is_active" class="ml-2 text-sm text-gray-700">Make photo visible on public page</label>
                            </div>
                        </div>

                        <!-- Right Column - Image Management -->
                        <div class="space-y-6">
                            <!-- Current Image -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                                <div class="border border-gray-200 rounded-lg p-4">
                                    <img src="{{ $photo->imageUrl }}" alt="{{ $photo->title }}" class="w-full h-48 object-cover rounded-lg mb-3">
                                    <p class="text-sm text-gray-600 text-center">Current photo</p>
                                </div>
                            </div>

                            <!-- Replace Image (Optional) -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Replace Image (Optional)</label>
                                <div id="dragArea" class="drag-area rounded-lg p-6 text-center cursor-pointer transition-all duration-300">
                                    <div id="uploadContent">
                                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                        <p class="text-sm font-medium text-gray-600 mb-2">Drop new photo here</p>
                                        <p class="text-xs text-gray-500 mb-3">or click to browse</p>
                                        <button type="button" id="browseBtn" class="px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors text-sm">
                                            Browse Files
                                        </button>
                                        <input type="file" name="image" id="imageInput" accept="image/*" class="hidden">
                                    </div>
                                    <div id="previewContent" class="hidden">
                                        <img id="imagePreview" class="image-preview mx-auto mb-3 rounded-lg" alt="Preview">
                                        <button type="button" id="changeImageBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors text-sm">
                                            Change Image
                                        </button>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 mt-2">Leave empty to keep current image</p>
                                @error('image')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Photo Info -->
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                <h4 class="font-medium text-gray-900 mb-3">Photo Information</h4>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Uploaded:</span>
                                        <span>{{ $photo->created_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Last Updated:</span>
                                        <span>{{ $photo->updated_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Status:</span>
                                        <span class="{{ $photo->is_active ? 'text-green-600' : 'text-red-600' }} font-medium">
                                            {{ $photo->is_active ? 'Active' : 'Hidden' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <a href="{{ route('photos.index') }}" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-primary via-secondary to-accent text-white rounded-lg hover:shadow-lg transition-all duration-200 hover-lift">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update Photo
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Image upload functionality
        const dragArea = document.getElementById('dragArea');
        const imageInput = document.getElementById('imageInput');
        const browseBtn = document.getElementById('browseBtn');
        const uploadContent = document.getElementById('uploadContent');
        const previewContent = document.getElementById('previewContent');
        const imagePreview = document.getElementById('imagePreview');
        const changeImageBtn = document.getElementById('changeImageBtn');

        // Browse button click
        browseBtn.addEventListener('click', () => {
            imageInput.click();
        });

        // File input change
        imageInput.addEventListener('change', handleFileSelect);

        // Drag and drop events
        dragArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dragArea.classList.add('dragover');
        });

        dragArea.addEventListener('dragleave', () => {
            dragArea.classList.remove('dragover');
        });

        dragArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dragArea.classList.remove('dragover');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        // Handle file selection
        function handleFileSelect(e) {
            const file = e.target.files[0];
            if (file) {
                handleFile(file);
            }
        }

        // Process selected file
        function handleFile(file) {
            // Validate file type
            if (!file.type.startsWith('image/')) {
                alert('Please select an image file.');
                return;
            }

            // Validate file size (2MB)
            if (file.size > 2 * 1024 * 1024) {
                alert('File size must be less than 2MB.');
                return;
            }

            // Display preview
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.src = e.target.result;
                uploadContent.classList.add('hidden');
                previewContent.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }

        // Change image button
        changeImageBtn.addEventListener('click', () => {
            imageInput.value = '';
            uploadContent.classList.remove('hidden');
            previewContent.classList.add('hidden');
        });

        // Animation observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    </script>
</body>
</html>
