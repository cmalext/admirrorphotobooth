<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AD - Mirror Photo Booth Cebu City</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
            'inter': ['Inter', 'sans-serif'],
          },
          animation: {
            'float-slow': 'float-slow 8s ease-in-out infinite',
            'float-medium': 'float-medium 6s ease-in-out infinite',
            'float-fast': 'float-fast 4s ease-in-out infinite',
            'pulse-glow': 'pulse-glow 3s ease-in-out infinite',
            'slide-in-left': 'slide-in-left 0.8s ease-out forwards',
            'slide-in-right': 'slide-in-right 0.8s ease-out forwards',
            'slide-in-up': 'slide-in-up 0.8s ease-out forwards',
            'fade-in-scale': 'fade-in-scale 0.8s ease-out forwards',
            'rotate-3d': 'rotate-3d 20s linear infinite',
            'morph-shape': 'morph-shape 8s ease-in-out infinite',
          }
        }
      }
    }
  </script>
  <style>
    body { font-family: 'Inter', sans-serif; }
    .parallax-container { perspective: 1000px; transform-style: preserve-3d; }
    .parallax-element { will-change: transform; }
    .animate-on-scroll { opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
    .animate-on-scroll.animate-in { opacity: 1; transform: translateY(0); }
    .navbar-hidden { transform: translateY(-100%); }
    .navbar-scrolled { background: rgba(255, 255, 255, 0.98) !important; backdrop-filter: blur(20px); }
    .glass-morphism { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2); }
    .hover-lift { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-lift:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); }
    .navbar-click-animate {
      animation: navbarClickScale 0.3s cubic-bezier(0.4,0,0.2,1);
    }
    @keyframes navbarClickScale {
      0% { transform: scale(1); background: transparent; }
      30% { transform: scale(1.15); background: rgba(255,255,255,0.15); }
      60% { transform: scale(0.95); background: rgba(255,255,255,0.10); }
      100% { transform: scale(1); background: transparent; }
    }
  </style>
</head>
<body class="relative min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 overflow-x-hidden font-inter">

<!-- Advanced Parallax & Animated Shapes -->
<div class="pointer-events-none select-none parallax-container">
  <!-- Parallax Layer 1: Floating Orbs -->
  <div class="parallax-element absolute top-10 left-0 w-40 h-40 bg-gradient-to-br from-primary to-secondary opacity-30 rounded-full blur-2xl animate-float-slow z-0" data-speed="0.3"></div>
  <div class="parallax-element absolute top-1/2 right-0 w-32 h-32 bg-gradient-to-br from-accent to-primary opacity-20 rounded-full blur-2xl animate-float-fast z-0" data-speed="0.5"></div>
  <div class="parallax-element absolute bottom-0 left-1/3 w-56 h-56 bg-gradient-to-br from-secondary to-accent opacity-20 rounded-full blur-3xl animate-float-medium z-0" data-speed="0.2"></div>
  
  <!-- Morphing Shapes -->
  <div class="parallax-element absolute top-1/4 right-1/4 w-24 h-24 bg-gradient-to-br from-primary to-accent opacity-20 animate-morph-shape z-0" data-speed="0.4"></div>
  <div class="parallax-element absolute bottom-1/4 right-1/3 w-20 h-20 bg-gradient-to-br from-secondary to-primary opacity-15 animate-rotate-3d z-0" data-speed="0.6"></div>
  
  <!-- Mouse Parallax Elements -->
  <div class="mouse-parallax absolute top-1/3 left-1/4 w-16 h-16 bg-gradient-to-br from-accent to-secondary opacity-25 rounded-full animate-pulse-glow z-0" data-mouse-speed="15"></div>
  <div class="mouse-parallax absolute bottom-1/3 right-1/4 w-12 h-12 bg-gradient-to-br from-primary to-accent opacity-20 rounded-full animate-float-slow z-0" data-mouse-speed="20"></div>
  
  <!-- SVG Decorative Elements -->
  <svg class="parallax-element absolute top-20 left-1/3 w-20 h-20 opacity-20 animate-float-medium z-0" viewBox="0 0 64 64" fill="none" data-speed="0.3">
    <path d="M32 58s26-15.9 26-34A14 14 0 0 0 32 10a14 14 0 0 0-26 14c0 18.1 26 34 26 34z" fill="#8a4813"/>
  </svg>
  
  <svg class="parallax-element absolute bottom-20 right-1/4 w-16 h-16 opacity-15 animate-rotate-3d z-0" viewBox="0 0 64 64" fill="none" data-speed="0.4">
    <circle cx="32" cy="32" r="28" stroke="#e97313" stroke-width="4" fill="none"/>
    <circle cx="32" cy="32" r="20" stroke="#f39c12" stroke-width="2" fill="none"/>
  </svg>
</div>

<!-- Video Background -->
<video autoplay muted loop playsinline 
 class="fixed top-0 left-0 w-full h-full object-cover -z-10 opacity-20">
  <source src="image/chaither3.mp4" type="video/mp4">
  
</video>

<!-- Enhanced Navbar with Glass Morphism -->
<nav class="glass-morphism bg-white/90 backdrop-blur-xl shadow-2xl sticky top-0 z-50 transition-all duration-500 ease-out">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      
      <!-- Enhanced Logo with Animation -->
      <div class="flex items-center group">
        <div class="relative">
          <i class="fas fa-camera-retro text-4xl text-primary mr-3 group-hover:scale-110 transition-transform duration-300 animate-pulse-glow"></i>
          <div class="absolute -top-1 -right-1 w-3 h-3 bg-accent rounded-full animate-pulse"></div>
        </div>
        <a href="#" class="text-3xl font-bold bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent hover:scale-105 transition-transform duration-300">
          AD
        </a>
      </div>

      <!-- Enhanced Menu (Desktop) -->
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Home
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#features" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Features
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#pricing" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Pricing
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#gallery" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Gallery
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#contact" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Contact
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
      </div>

      <!-- Enhanced CTA Button -->
      <div class="hidden md:block">
        <a href="#contact" class="bg-gradient-to-r from-primary via-secondary to-accent text-white px-8 py-3 rounded-full font-semibold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
          <span class="relative z-10">Book Now</span>
          <div class="absolute inset-0 bg-gradient-to-r from-accent via-primary to-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </a>
      </div>

      <!-- Enhanced Mobile Burger Button -->
      <button class="md:hidden flex flex-col space-y-1.5 focus:outline-none group" id="menu-btn">
        <span class="block w-6 h-0.5 bg-primary group-hover:bg-secondary transition-all duration-300"></span>
        <span class="block w-6 h-0.5 bg-primary group-hover:bg-secondary transition-all duration-300"></span>
        <span class="block w-6 h-0.5 bg-primary group-hover:bg-secondary transition-all duration-300"></span>
      </button>

    </div>

    <!-- Enhanced Mobile Menu -->
    <div class="hidden md:hidden pb-6" id="mobile-menu">
      <div class="flex flex-col space-y-4 pt-4 border-t border-gray-200/20">
        <a href="#home" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium py-2 px-4 rounded-lg hover:bg-white/20">Home</a>
        <a href="#features" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium py-2 px-4 rounded-lg hover:bg-white/20">Features</a>
        <a href="#pricing" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium py-2 px-4 rounded-lg hover:bg-white/20">Pricing</a>
        <a href="#gallery" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium py-2 px-4 rounded-lg hover:bg-white/20">Gallery</a>
        <a href="#contact" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium py-2 px-4 rounded-lg hover:bg-white/20">Contact</a>
        <a href="#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-3 rounded-full font-semibold text-center hover:shadow-lg transform hover:scale-105 transition-all duration-300">
          Book Now
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Enhanced Hero Section with Parallax -->
<section id="home" class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
  <div class="flex flex-col items-center text-center max-w-4xl mx-auto relative z-10">
    
    <!-- Enhanced Logo/Brand Section with 3D Effects -->
    <div class="relative mb-8 group animate-on-scroll" data-aos="fade-up" data-aos-duration="1000">
      <div class="relative inline-block transform-gpu hover:rotate-y-12 transition-transform duration-700">
        <img src="image/nalbu.png" alt="AD Logo" class="w-48 h-48 md:w-56 md:h-56 inline-block drop-shadow-2xl hover:scale-110 transition-all duration-500">
        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-gradient-to-br from-accent to-secondary rounded-full flex items-center justify-center animate-pulse-glow shadow-lg">
          <i class="fas fa-camera text-white text-sm"></i>
        </div>
        <!-- Glowing Ring Effect -->
        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-primary/20 to-secondary/20 blur-xl scale-110 group-hover:scale-125 transition-transform duration-700"></div>
      </div>
    </div>

    <!-- Enhanced Typography with Staggered Animation -->
    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent leading-tight animate-on-scroll" data-aos="fade-up" data-aos-delay="200">
    
      <span class="block text-4xl md:text-5xl lg:text-6xl mt-4 font-bold">Mirror Photo Booth</span>
    </h1>
    
    <p class="text-xl md:text-2xl lg:text-3xl text-gray-700 mb-12 leading-relaxed max-w-3xl animate-on-scroll" data-aos="fade-up" data-aos-delay="400">
      Experience the magic of our state-of-the-art mirror photo booth. 
      Perfect for weddings, corporate events, and special celebrations in Cebu City.
    </p>

    <!-- Enhanced CTA Buttons with Hover Effects -->
    <div class="flex flex-col sm:flex-row gap-6 animate-on-scroll" data-aos="fade-up" data-aos-delay="600">
      <a href="#contact" class="group relative overflow-hidden bg-gradient-to-r from-primary via-secondary to-accent text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 text-center">
        <span class="relative z-10 flex items-center justify-center">
          <i class="fas fa-calendar-check mr-3 text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
          Book Your Event
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-accent via-primary to-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-white/20 rounded-full blur-xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
      </a>
      
      <a href="#gallery" class="group relative overflow-hidden bg-gradient-to-r from-secondary via-accent to-primary text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 text-center">
        <span class="relative z-10 flex items-center justify-center">
          <i class="fas fa-images mr-3 text-2xl group-hover:scale-110 transition-transform duration-300"></i>
          View Gallery
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-secondary to-accent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-white/20 rounded-full blur-xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
      </a>
    </div>

    <!-- Enhanced Stats Section -->
    <div class="grid grid-cols-3 gap-8 mt-16 animate-on-scroll" data-aos="fade-up" data-aos-delay="800">
      <div class="text-center group">
        <div class="text-4xl md:text-5xl font-black text-primary mb-2 group-hover:scale-110 transition-transform duration-300">500+</div>
        <div class="text-sm md:text-base text-gray-600 font-medium">Happy Events</div>
        <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-3 rounded-full group-hover:w-20 transition-all duration-300"></div>
      </div>
      <div class="text-center group">
        <div class="text-4xl md:text-5xl font-black text-secondary mb-2 group-hover:scale-110 transition-transform duration-300">10K+</div>
        <div class="text-sm md:text-base text-gray-600 font-medium">Photos Taken</div>
        <div class="text-sm md:text-base text-gray-600 font-medium">Photos Taken</div>
        <div class="w-16 h-1 bg-gradient-to-r from-secondary to-accent mx-auto mt-3 rounded-full group-hover:w-20 transition-all duration-300"></div>
      </div>
      <div class="text-center group">
        <div class="text-4xl md:text-5xl font-black text-accent mb-2 group-hover:scale-110 transition-transform duration-300">5★</div>
        <div class="text-sm md:text-base text-gray-600 font-medium">Rating</div>
        <div class="w-16 h-1 bg-gradient-to-r from-accent to-primary mx-auto mt-3 rounded-full group-hover:w-20 transition-all duration-300"></div>
      </div>
    </div>
  </div>

  <!-- Floating Elements Around Hero -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="parallax-element absolute top-1/4 left-10 w-20 h-20 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-full blur-xl animate-float-slow" data-speed="0.1"></div>
    <div class="parallax-element absolute top-3/4 right-10 w-16 h-16 bg-gradient-to-br from-accent/20 to-primary/20 rounded-full blur-xl animate-float-medium" data-speed="0.15"></div>
    <div class="parallax-element absolute bottom-1/4 left-1/4 w-24 h-24 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-xl animate-float-fast" data-speed="0.2"></div>
  </div>
</section>



<!-- Enhanced Features Section with Parallax -->
<section id="features" class="py-24 bg-gradient-to-br from-white via-amber-50/30 to-orange-50/30 relative overflow-hidden">
  <!-- Background Parallax Elements -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="parallax-element absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-3xl animate-float-slow" data-speed="0.1"></div>
    <div class="parallax-element absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-br from-accent/10 to-primary/10 rounded-full blur-3xl animate-float-medium" data-speed="0.15"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-20 animate-on-scroll" data-aos="fade-up">
      <h2 class="text-5xl md:text-6xl font-black text-gray-800 mb-6 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
        Why Choose AD Mirror Photo Booth?
      </h2>
      <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
        Experience the future of photo booths with our cutting-edge mirror technology and exceptional service in Cebu City.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Enhanced Feature Card 1 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="100">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
         <i class="fas fa-fingerprint text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-primary transition-colors duration-300">Touch Screen Mirror</h3>
        <p class="text-gray-600 leading-relaxed">Interactive mirror interface that doubles as a photo booth with intuitive touch controls and stunning visual effects.</p>
      </div>
      
      <!-- Enhanced Feature Card 2 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="200">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
            <i class="fas fa-print text-3xl text-white group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/20 to-accent/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-secondary transition-colors duration-300">Instant Prints</h3>
        <p class="text-gray-600 leading-relaxed">Get your photos printed instantly with custom AD branding and high-quality premium paper for lasting memories.</p>
      </div>
      
      <!-- Enhanced Feature Card 3 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="300">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
            <i class="fas fa-share-alt text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-accent/20 to-primary/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-accent transition-colors duration-300">Social Sharing</h3>
        <p class="text-gray-600 leading-relaxed">Share your photos instantly on social media with our integrated sharing platform and viral-worthy filters.</p>
      </div>
      
      <!-- Enhanced Feature Card 4 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="400">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
            <i class="fas fa-palette text-3xl text-white group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-primary transition-colors duration-300">Custom Props</h3>
        <p class="text-gray-600 leading-relaxed">Fun and creative props to make your photos even more entertaining and memorable for all ages.</p>
      </div>
      
      <!-- Enhanced Feature Card 5 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="500">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
            <i class="fas fa-clock text-3xl text-white group-hover:rotate-12 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-secondary/20 to-accent/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-secondary transition-colors duration-300">24/7 Support</h3>
        <p class="text-gray-600 leading-relaxed">Round-the-clock customer support to ensure your event runs smoothly and exceeds expectations.</p>
      </div>
      
      <!-- Enhanced Feature Card 6 -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="600">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg">
            <i class="fas fa-truck text-3xl text-white group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div class="absolute inset-0 bg-gradient-to-r from-accent/20 to-primary/20 rounded-2xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-accent transition-colors duration-300">Setup & Delivery</h3>
        <p class="text-gray-600 leading-relaxed">Professional setup and teardown service included with every booking for hassle-free events.</p>
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
  <a href="{{ url('gallery/wedding') }}" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
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
  
  <a href="{{ url('gallery/corporate') }}" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
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
  
  <a href="{{ url('gallery/birthday') }}" class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 block">
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
  // Enhanced Mobile Menu Controller
  class MobileMenuController {
    constructor() {
      this.menuBtn = document.getElementById('menu-btn');
      this.mobileMenu = document.getElementById('mobile-menu');
      this.init();
    }

    init() {
      this.bindEvents();
    }

    bindEvents() {
      this.menuBtn.addEventListener('click', this.toggleMenu.bind(this));
      
      // Close menu when clicking outside
      document.addEventListener('click', (e) => {
        if (!this.menuBtn.contains(e.target) && !this.mobileMenu.contains(e.target)) {
          this.closeMenu();
        }
      });
    }

    toggleMenu() {
      this.mobileMenu.classList.toggle('hidden');
      this.menuBtn.classList.toggle('active');
    }

    closeMenu() {
      this.mobileMenu.classList.add('hidden');
      this.menuBtn.classList.remove('active');
    }
  }


  // Improved Smooth Scroll for Navbar Links
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href.length > 1 && document.querySelector(href)) {
          // Add click animation
          this.classList.remove('navbar-click-animate');
          void this.offsetWidth;
          this.classList.add('navbar-click-animate');
          this.addEventListener('animationend', function handler() {
            this.classList.remove('navbar-click-animate');
            this.removeEventListener('animationend', handler);
          });
          e.preventDefault();
          const target = document.querySelector(href);
          const nav = document.querySelector('nav');
          const navHeight = nav ? nav.offsetHeight : 0;
          const rect = target.getBoundingClientRect();
          const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
          const top = rect.top + scrollTop - navHeight - 10; // 10px extra spacing
          window.scrollTo({ top, behavior: 'smooth' });
        }
      });
    });
  });

  // Enhanced Parallax Controller
  class ParallaxController {
    constructor() {
      this.parallaxElements = document.querySelectorAll('.parallax-element');
      this.mouseX = 0;
      this.mouseY = 0;
      this.scrollY = 0;
      this.init();
    }

    init() {
      this.bindEvents();
      this.animate();
    }

    bindEvents() {
      window.addEventListener('scroll', this.handleScroll.bind(this));
      window.addEventListener('mousemove', this.handleMouseMove.bind(this));
      window.addEventListener('resize', this.handleResize.bind(this));
    }

    handleScroll() {
      this.scrollY = window.pageYOffset;
      this.updateParallax();
    }

    handleMouseMove(e) {
      this.mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
      this.mouseY = (e.clientY / window.innerHeight - 0.5) * 2;
      this.updateMouseParallax();
    }

    handleResize() {
      this.updateParallax();
    }

    updateParallax() {
      this.parallaxElements.forEach((element) => {
        const speed = element.dataset.speed || 0.5;
        const yPos = -(this.scrollY * speed);
        const scale = 1 + (this.scrollY * 0.0001);
        
        element.style.transform = `translateY(${yPos}px) scale(${scale})`;
      });
    }

    updateMouseParallax() {
      document.querySelectorAll('.mouse-parallax').forEach((element) => {
        const speed = element.dataset.mouseSpeed || 20;
        const x = this.mouseX * speed;
        const y = this.mouseY * speed;
        
        element.style.transform = `translate(${x}px, ${y}px)`;
      });
    }

    animate() {
      requestAnimationFrame(this.animate.bind(this));
    }
  }

  // Enhanced Navbar Controller
  class NavbarController {
    constructor() {
      this.navbar = document.querySelector('nav');
      this.lastScrollY = 0;
      this.init();
    }

    init() {
      this.bindEvents();
    }

    bindEvents() {
      window.addEventListener('scroll', this.handleScroll.bind(this));
    }

    handleScroll() {
      const currentScrollY = window.pageYOffset;
      
      if (currentScrollY > this.lastScrollY && currentScrollY > 100) {
        this.navbar.classList.add('navbar-hidden');
      } else {
        this.navbar.classList.remove('navbar-hidden');
      }
      
      if (currentScrollY > 50) {
        this.navbar.classList.add('navbar-scrolled');
      } else {
        this.navbar.classList.remove('navbar-scrolled');
      }
      
      this.lastScrollY = currentScrollY;
    }
  }

  // Intersection Observer for Animations
  class AnimationController {
    constructor() {
      this.animatedElements = document.querySelectorAll('.animate-on-scroll');
      this.init();
    }

    init() {
      this.createObserver();
    }

    createObserver() {
      const options = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
            observer.unobserve(entry.target);
          }
        });
      }, options);

      this.animatedElements.forEach(element => {
        observer.observe(element);
      });
    }
  }

  // Typing Effect
  class TypingEffect {
    constructor(element, text, speed = 100) {
      this.element = element;
      this.text = text;
      this.speed = speed;
      this.currentIndex = 0;
      this.init();
    }

    init() {
      this.type();
    }

    type() {
      if (this.currentIndex < this.text.length) {
        this.element.textContent += this.text.charAt(this.currentIndex);
        this.currentIndex++;
        setTimeout(() => this.type(), this.speed);
      }
    }
  }

  // Initialize all controllers when DOM is loaded
  document.addEventListener('DOMContentLoaded', () => {
    new MobileMenuController();
    new ParallaxController();
    new NavbarController();
    new AnimationController();
    // Initialize typing effect
    const typingElement = document.querySelector('.typing-effect');
    if (typingElement) {
      new TypingEffect(typingElement, 'AD', 150);
    }
    // Add loading animation
    document.body.classList.add('loaded');
  });

  // Utility functions
  window.utils = {
    debounce: (func, wait) => {
      let timeout;
      return function executedFunction(...args) {
        const later = () => {
          clearTimeout(timeout);
          func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
      };
    },
    
    throttle: (func, limit) => {
      let inThrottle;
      return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
          func.apply(context, args);
          inThrottle = true;
          setTimeout(() => inThrottle = false, limit);
        }
      };
    }
  };
</script>

</body>
</html>
