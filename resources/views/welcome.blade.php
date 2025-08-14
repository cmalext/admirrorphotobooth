<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AD - Mirror Photo Booth Cebu City</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#482803ff',
            secondary: '#fd7d14ff',
            accent: '#4b2e04ff',
           
          }
        }
      }
    }
  </script>
</head>
<body class="relative min-h-screen bg-gradient-to-br from-amber-50 to-orange-50">

<!-- Video Background -->
<video autoplay muted loop playsinline 
 class="fixed top-0 left-0 w-full h-full object-cover -z-10 opacity-20">
  <source src="image/chaither2.mp4" type="video/mp4">
  
</video>

<!-- Navbar -->
<nav class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo -->
      <div class="flex items-center">
        <i class="fas fa-camera-retro text-3xl text-primary mr-3"></i>
        <a href="#" class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
          AD
        </a>
      </div>

      <!-- Menu (Desktop) -->
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Home</a>
        <a href="#features" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Features</a>
        <a href="#pricing" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Pricing</a>
        <a href="#gallery" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Gallery</a>
        <a href="#contact" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Contact</a>
      </div>

      <!-- CTA Button -->
      <div class="hidden md:block">
        <a href="#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
          Book Now
        </a>
      </div>

      <!-- Mobile Burger Button -->
      <button class="md:hidden flex flex-col space-y-1.5 focus:outline-none" id="menu-btn">
        <span class="block w-6 h-0.5 bg-primary"></span>
        <span class="block w-6 h-0.5 bg-primary"></span>
        <span class="block w-6 h-0.5 bg-primary"></span>
      </button>

    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden pb-4" id="mobile-menu">
      <div class="flex flex-col space-y-3">
        <a href="#home" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Home</a>
        <a href="#features" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Features</a>
        <a href="#pricing" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Pricing</a>
        <a href="#gallery" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Gallery</a>
        <a href="#contact" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Contact</a>
        <a href="#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full font-semibold text-center">
          Book Now
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center px-4">
  <div class="flex flex-col items-center text-center max-w-3xl mx-auto">
    <!-- Logo/Brand Section -->
    <div class="relative mb-6">
  <img src="image/nalbu.png" alt="Camera Icon" class="w-50 h-50 mr-3 inline-block">
  <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-accent rounded-full flex items-center justify-center jump">
    <i class="fas fa-camera text-white text-xs"></i>
  </div>
</div>

        <style>
        @keyframes jump {
          0%, 100% {
            transform: translateY(0);
          }
          50% {
            transform: translateY(-5px);
          }
        }

        .jump {
          animation: jump 0.6s infinite ease-in-out;
        }
        </style>


    <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent leading-tight">
      
    </h1>
    <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed">
      Experience the magic of our state-of-the-art mirror photo booth. 
      Perfect for weddings, corporate events, and special celebrations in Cebu City.
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
      <a href="#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-center">
        <i class="fas fa-calendar-check mr-2"></i>
        Book Your Event
      </a>
      <a href="#gallery" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-center">
        <i class="fas fa-images mr-2"></i>
        View Gallery
      </a>
    </div>
  </div>
</section>

      
      <!-- Stats -->
      <div class="grid grid-cols-3 gap-6">
        <div class="text-center">
          <div class="text-3xl font-bold text-primary mb-1">500+</div>
          <div class="text-sm text-gray-600">Happy Events</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-secondary mb-1">10K+</div>
          <div class="text-sm text-gray-600">Photos Taken</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-accent mb-1">5★</div>
          <div class="text-sm text-gray-600">Rating</div>
        </div>
      </div>
    </div>
    

      
   
    </div>
  </div>  
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose AD Mirror Photo Booth?</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Experience the future of photo booths with our cutting-edge mirror technology and exceptional service in Cebu City.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-amber-50 to-orange-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-mirror text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Touch Screen Mirror</h3>
        <p class="text-gray-600">Interactive mirror interface that doubles as a photo booth with intuitive touch controls.</p>
      </div>
      
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-orange-50 to-red-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-print text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Instant Prints</h3>
        <p class="text-gray-600">Get your photos printed instantly with custom AD branding and high-quality paper.</p>
      </div>
      
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-yellow-50 to-amber-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-share-alt text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Social Sharing</h3>
        <p class="text-gray-600">Share your photos instantly on social media with our integrated sharing platform.</p>
      </div>
      
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-yellow-50 to-orange-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-palette text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Custom Props</h3>
        <p class="text-gray-600">Fun and creative props to make your photos even more entertaining and memorable.</p>
      </div>
      
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-red-50 to-pink-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-clock text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">24/7 Support</h3>
        <p class="text-gray-600">Round-the-clock customer support to ensure your event runs smoothly.</p>
      </div>
      
      <div class="text-center p-6 rounded-xl bg-gradient-to-br from-indigo-50 to-purple-50 hover:shadow-lg transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-truck text-2xl text-white"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Setup & Delivery</h3>
        <p class="text-gray-600">Professional setup and teardown service included with every booking.</p>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gradient-to-br from-amber-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Choose Your Package</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Flexible pricing options to suit every event and budget.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Basic Package -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl hover:scale-105 transition-transform duration-300">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Basic</h3>
          <div class="text-4xl font-bold text-primary mb-2">$299</div>
          <div class="text-gray-600">per event</div>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>2 hours of photo booth time</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Unlimited photos</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Basic props included</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Digital copies</span></li>
        </ul>
        <a href="#contact" class="w-full bg-gray-200 text-gray-800 py-3 rounded-full font-semibold text-center block hover:bg-gray-300 transition-colors duration-300">Book Basic</a>
      </div>
      
      <!-- Premium Package -->
      <div class="bg-gradient-to-br from-primary to-secondary rounded-2xl shadow-lg p-8 hover:shadow-xl hover:scale-110 transition-transform duration-300">
        <div class="text-center mb-8">
          <div class="bg-white text-primary px-4 py-1 rounded-full text-sm font-semibold inline-block mb-4">Most Popular</div>
          <h3 class="text-2xl font-bold text-white mb-4">Premium</h3>
          <div class="text-4xl font-bold text-white mb-2">$499</div>
          <div class="text-white/80">per event</div>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><i class="fas fa-check text-white mr-3"></i> <span class="text-white">4 hours of photo booth time</span></li>
          <li class="flex items-center"><i class="fas fa-check text-white mr-3"></i> <span class="text-white">Unlimited photos & prints</span></li>
          <li class="flex items-center"><i class="fas fa-check text-white mr-3"></i> <span class="text-white">Premium props & backdrops</span></li>
          <li class="flex items-center"><i class="fas fa-check text-white mr-3"></i> <span class="text-white">Custom photo design</span></li>
          <li class="flex items-center"><i class="fas fa-check text-white mr-3"></i> <span class="text-white">Social media sharing</span></li>
        </ul>
        <a href="#contact" class="w-full bg-white text-primary py-3 rounded-full font-semibold text-center block hover:bg-gray-100 transition-colors duration-300">Book Premium</a>
      </div>
      
      <!-- Luxury Package -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl hover:scale-105 transition-transform duration-300">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Luxury</h3>
          <div class="text-4xl font-bold text-primary mb-2">$799</div>
          <div class="text-gray-600">per event</div>
        </div>
        <ul class="space-y-4 mb-8">
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>6 hours of photo booth time</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Everything in Premium</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Professional attendant</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Custom backdrop design</span></li>
          <li class="flex items-center"><i class="fas fa-check text-green-500 mr-3"></i> <span>Photo album included</span></li>
        </ul>
        <a href="#contact" class="w-full bg-gray-200 text-gray-800 py-3 rounded-full font-semibold text-center block hover:bg-gray-300 transition-colors duration-300">Book Luxury</a>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Gallery</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        See the magic we've created at previous events. 
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
     <a href="/wedding-gallery" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
     <video src="image/3.mp4" autoplay muted loop playsinline class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300"></video>
     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
       <div class="p-6 text-white">
         <h3 class="text-lg font-semibold">Wedding Celebration</h3>
         <p class="text-sm">Beautiful moments captured</p>
         <div class="flex items-center mt-2">
           <span class="text-xs bg-primary/80 px-2 py-1 rounded-full">Click to view gallery</span>
         </div>
       </div>
     </div>
   </a>
  
     <a href="/corporate-gallery" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
     <video src="image/2.mp4" autoplay muted loop playsinline class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300"></video>
     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
       <div class="p-6 text-white">
         <h3 class="text-lg font-semibold">Corporate Event</h3>
         <p class="text-sm">Professional team building</p>
         <div class="flex items-center mt-2">
           <span class="text-xs bg-primary/80 px-2 py-1 rounded-full">Click to view gallery</span>
         </div>
       </div>
     </div>
   </a>
  
     <a href="/birthday-gallery" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
     <video src="image/1.mp4" autoplay muted loop playsinline class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300"></video>
     <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
       <div class="p-6 text-white">
         <h3 class="text-lg font-semibold">Birthday Party</h3>
         <p class="text-sm">Fun and laughter guaranteed</p>
         <div class="flex items-center mt-2">
           <span class="text-xs bg-primary/80 px-2 py-1 rounded-full">Click to view gallery</span>
         </div>
       </div>
     </div>
   </a>
</div>

    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-amber-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Don't just take our word for it - hear from our satisfied customers!
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-2xl shadow-lg">
        <div class="flex items-center mb-4">
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <p class="text-gray-600 mb-6">"Amazing photo booth experience! The quality was outstanding and our guests loved the instant prints. Highly recommend!"</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center text-white font-bold mr-4">
            S
          </div>
          <div>
            <div class="font-semibold text-gray-800">Sarah Johnson</div>
            <div class="text-sm text-gray-600">Wedding Client</div>
          </div>
        </div>
      </div>
      
      <div class="bg-white p-8 rounded-2xl shadow-lg">
        <div class="flex items-center mb-4">
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <p class="text-gray-600 mb-6">"Professional service from start to finish. The setup was seamless and the photos turned out perfect for our corporate event."</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center text-white font-bold mr-4">
            M
          </div>
          <div>
            <div class="font-semibold text-gray-800">Mike Chen</div>
            <div class="text-sm text-gray-600">Corporate Client</div>
          </div>
        </div>
      </div>
      
      <div class="bg-white p-8 rounded-2xl shadow-lg">
        <div class="flex items-center mb-4">
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <p class="text-gray-600 mb-6">"The best photo booth we've ever used! The props were hilarious and the social sharing feature was a huge hit with our guests."</p>
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
            E
          </div>
          <div>
            <div class="font-semibold text-gray-800">Emma Davis</div>
            <div class="text-sm text-gray-600">Birthday Party</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-900 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold mb-4">Ready to Create Memories?</h2>
      <p class="text-xl text-gray-300 max-w-3xl mx-auto">
        Get in touch with us to book your photo booth experience or ask any questions.
      </p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Contact Form -->
       
      <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
        <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
        @if (session('status'))
          <div class="mb-4 rounded-lg bg-green-600/20 border border-green-600/30 text-green-200 px-4 py-3">
            {{ session('status') }}
          </div>
        @endif
        @if ($errors->any())
          <div class="mb-4 rounded-lg bg-red-600/20 border border-red-600/30 text-red-200 px-4 py-3">
            <ul class="list-disc list-inside">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('messages.store') }}" class="space-y-6">
          @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium mb-2">First Name</label>
              <input name="first_name" value="{{ old('first_name') }}" type="text" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-primary" required>
            </div>
            <div>
              <label class="block text-sm font-medium mb-2">Last Name</label>
              <input name="last_name" value="{{ old('last_name') }}" type="text" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-primary" required>
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Email</label>
            <input name="email" value="{{ old('email') }}" type="email" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-primary" required>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Phone</label>
            <input name="phone" value="{{ old('phone') }}" type="tel" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-primary">
          </div>
          <div>
          <label class="block text-sm font-medium mb-2">Event Type</label>
          <select id="eventType" name="event_type"
            class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-500 text-white focus:outline-none focus:border-primary" required>
                  <option value="Wedding" {{ old('event_type')==='Wedding' ? 'selected' : '' }}>Wedding</option>
                  <option value="Corporate Event" {{ old('event_type')==='Corporate Event' ? 'selected' : '' }}>Corporate Event</option>
                  <option value="Birthday Party" {{ old('event_type')==='Birthday Party' ? 'selected' : '' }}>Birthday Party</option>
                  <option value="Graduation" {{ old('event_type')==='Graduation' ? 'selected' : '' }}>Graduation</option>
                  <option value="Other" {{ old('event_type')==='Other' ? 'selected' : '' }}>Other</option>
          </select>
          </div>
          <div>
            <label class="block text-sm font-medium mb-2">Message</label>
            <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:border-primary" required>{{ old('message') }}</textarea>
          </div>
          <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 rounded-lg font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Send Message
          </button>
        </form>
      </div>
      
      <!-- Contact Info -->
      <div class="space-y-8">
        <div>
          <h3 class="text-2xl font-bold mb-6">Get in Touch</h3>
          <p class="text-gray-300 mb-8">
            We're here to help you create the perfect photo booth experience for your special event.
          </p>
        </div>
        
        <div class="space-y-6">
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-phone text-white"></i>
            </div>
            <div>
              <div class="font-semibold">Phone</div>
              <div class="text-gray-300">(555) 123-4567</div>
            </div>
          </div>
          
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-envelope text-white"></i>
            </div>
            <div>
              <div class="font-semibold">Email</div>
              <div class="text-gray-300">info@snapshotstudio.com</div>
            </div>
          </div>
          
          <div class="flex items-center">
            <div class="w-12 h-12 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center mr-4">
              <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <div>
              <div class="font-semibold">Location</div>
              <div class="text-gray-300">123 Photo Street, City, State 12345</div>
            </div>
          </div>
        </div>
        
        <div class="pt-6">
          <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
          <div class="flex space-x-4">
            <a href= " https://www.facebook.com/profile.php?id=61565882637150    " class="w-10 h-10 bg-gradient-to-r from-primary to-secondary rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
              <i class="fab fa-facebook-f text-white"></i>
            </a>
            <a href="https://www.instagram.com/" class="w-10 h-10 bg-gradient-to-r from-secondary to-accent rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
              <i class="fab fa-instagram text-white"></i>
            </a>
            <a href="https://x.com/" class="w-10 h-10 bg-gradient-to-r from-accent to-primary rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
              <i class="fab fa-twitter text-white"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <div class="flex items-center mb-4">
          <i class="fas fa-camera-retro text-2xl text-primary mr-3"></i>
          <span class="text-xl font-bold">SnapShot Studio</span>
        </div>
        <p class="text-gray-300">
          Creating unforgettable memories through the art of photography.
        </p>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold mb-4">Services</h4>
        <ul class="space-y-2 text-gray-300">
          <li><a href="#" class="hover:text-primary transition-colors">Wedding Photo Booths</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Corporate Events</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Birthday Parties</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Special Occasions</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold mb-4">Company</h4>
        <ul class="space-y-2 text-gray-300">
          <li><a href="#" class="hover:text-primary transition-colors">About Us</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Our Team</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Careers</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Privacy Policy</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
        <p class="text-gray-300 mb-4">Stay updated with our latest offers and events.</p>
        <div class="flex">
          <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 rounded-l-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary">
          <button class="px-4 py-2 bg-gradient-to-r from-primary to-secondary text-white rounded-r-lg hover:shadow-lg transition-all duration-300">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
      <p>&copy; 2024 SnapShot Studio. All rights reserved.</p>
    </div>
  </div>
</footer>

<script>
  // Mobile menu toggle
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("mobile-menu");
  
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });

  // Smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Navbar background on scroll
  window.addEventListener('scroll', () => {
    const navbar = document.querySelector('nav');
    if (window.scrollY > 50) {
      navbar.classList.add('bg-white/95');
    } else {
      navbar.classList.remove('bg-white/95');
    }
  });
</script>

</body>
</html>
