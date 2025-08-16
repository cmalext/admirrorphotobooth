<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Parallax & Animation Demo - AD Mirror Photo Booth</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#8a4813ff',
            secondary: '#e97313ff',
            accent: '#f39c12ff',
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
    .glass-morphism { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2); }
    .hover-lift { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-lift:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1); }
    
    /* Advanced Parallax Effects */
    @keyframes float-slow {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-30px) rotate(5deg); }
    }
    @keyframes float-medium {
      0%, 100% { transform: translateY(0) scale(1) rotate(0deg); }
      50% { transform: translateY(-50px) scale(1.1) rotate(-5deg); }
    }
    @keyframes float-fast {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-20px) scale(0.98); }
    }
    @keyframes pulse-glow {
      0%, 100% { 
        box-shadow: 0 0 20px rgba(138, 72, 19, 0.3);
        transform: scale(1);
      }
      50% { 
        box-shadow: 0 0 40px rgba(138, 72, 19, 0.6);
        transform: scale(1.05);
      }
    }
    @keyframes slide-in-left {
      from { transform: translateX(-100px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slide-in-right {
      from { transform: translateX(100px); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slide-in-up {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes fade-in-scale {
      from { transform: scale(0.8); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
    @keyframes rotate-3d {
      from { transform: rotateY(0deg) rotateX(0deg); }
      to { transform: rotateY(360deg) rotateX(360deg); }
    }
    @keyframes morph-shape {
      0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
      50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
    }
    
    /* Animation Classes */
    .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }
    .animate-float-medium { animation: float-medium 6s ease-in-out infinite; }
    .animate-float-fast { animation: float-fast 4s ease-in-out infinite; }
    .animate-pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
    .animate-slide-in-left { animation: slide-in-left 0.8s ease-out forwards; }
    .animate-slide-in-right { animation: slide-in-right 0.8s ease-out forwards; }
    .animate-slide-in-up { animation: slide-in-up 0.8s ease-out forwards; }
    .animate-fade-in-scale { animation: fade-in-scale 0.8s ease-out forwards; }
    .animate-rotate-3d { animation: rotate-3d 20s linear infinite; }
    .animate-morph-shape { animation: morph-shape 8s ease-in-out infinite; }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: rgba(138, 72, 19, 0.1);
    }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(45deg, #8a4813, #e97313);
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(45deg, #e97313, #8a4813);
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
        <a href="/" class="text-3xl font-bold bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent hover:scale-105 transition-transform duration-300">
          AD Demo
        </a>
      </div>

      <!-- Enhanced Menu -->
      <div class="hidden md:flex space-x-8">
        <a href="#demo" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Demo
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="/" class="text-gray-700 hover:text-primary transition-all duration-300 font-medium relative group">
          Home
          <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary to-secondary group-hover:w-full transition-all duration-300"></span>
        </a>
      </div>

      <!-- Enhanced CTA Button -->
      <div class="hidden md:block">
        <a href="/" class="bg-gradient-to-r from-primary via-secondary to-accent text-white px-8 py-3 rounded-full font-semibold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
          <span class="relative z-10">Back to Site</span>
          <div class="absolute inset-0 bg-gradient-to-r from-accent via-primary to-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Demo Hero Section -->
<section id="demo" class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
  <div class="flex flex-col items-center text-center max-w-4xl mx-auto relative z-10">
    
    <!-- Enhanced Logo/Brand Section with 3D Effects -->
    <div class="relative mb-8 group animate-on-scroll" data-aos="fade-up" data-aos-duration="1000">
      <div class="relative inline-block transform-gpu hover:rotate-y-12 transition-transform duration-700">
        <div class="w-48 h-48 md:w-56 md:h-56 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center drop-shadow-2xl hover:scale-110 transition-all duration-500 animate-pulse-glow">
          <i class="fas fa-magic text-6xl text-white"></i>
        </div>
        <!-- Glowing Ring Effect -->
        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-primary/20 to-secondary/20 blur-xl scale-110 group-hover:scale-125 transition-transform duration-700"></div>
      </div>
    </div>

    <!-- Enhanced Typography with Staggered Animation -->
    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black mb-8 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent leading-tight animate-on-scroll" data-aos="fade-up" data-aos-delay="200">
      <span class="block typing-effect">Parallax</span>
      <span class="block text-4xl md:text-5xl lg:text-6xl mt-4 font-bold">Animation Demo</span>
    </h1>
    
    <p class="text-xl md:text-2xl lg:text-3xl text-gray-700 mb-12 leading-relaxed max-w-3xl animate-on-scroll" data-aos="fade-up" data-aos-delay="400">
      Experience the power of modern web animations with our enhanced parallax effects, smooth transitions, and interactive elements.
    </p>

    <!-- Enhanced CTA Buttons with Hover Effects -->
    <div class="flex flex-col sm:flex-row gap-6 animate-on-scroll" data-aos="fade-up" data-aos-delay="600">
      <a href="#features" class="group relative overflow-hidden bg-gradient-to-r from-primary via-secondary to-accent text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 text-center">
        <span class="relative z-10 flex items-center justify-center">
          <i class="fas fa-rocket mr-3 text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
          Explore Features
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-accent via-primary to-secondary opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-white/20 rounded-full blur-xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
      </a>
      
      <a href="#interactive" class="group relative overflow-hidden bg-gradient-to-r from-secondary via-accent to-primary text-white px-10 py-5 rounded-full text-xl font-bold hover:shadow-2xl transform hover:scale-105 hover:-translate-y-2 transition-all duration-500 text-center">
        <span class="relative z-10 flex items-center justify-center">
          <i class="fas fa-mouse-pointer mr-3 text-2xl group-hover:scale-110 transition-transform duration-300"></i>
          Interactive Demo
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-secondary to-accent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-white/20 rounded-full blur-xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
      </a>
    </div>
  </div>

  <!-- Floating Elements Around Hero -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="parallax-element absolute top-1/4 left-10 w-20 h-20 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-full blur-xl animate-float-slow" data-speed="0.1"></div>
    <div class="parallax-element absolute top-3/4 right-10 w-16 h-16 bg-gradient-to-br from-accent/20 to-primary/20 rounded-full blur-xl animate-float-medium" data-speed="0.15"></div>
    <div class="parallax-element absolute bottom-1/4 left-1/4 w-24 h-24 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-xl animate-float-fast" data-speed="0.2"></div>
  </div>
</section>

<!-- Features Demo Section -->
<section id="features" class="py-24 bg-gradient-to-br from-white via-amber-50/30 to-orange-50/30 relative overflow-hidden">
  <!-- Background Parallax Elements -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="parallax-element absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-3xl animate-float-slow" data-speed="0.1"></div>
    <div class="parallax-element absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-br from-accent/10 to-primary/10 rounded-full blur-3xl animate-float-medium" data-speed="0.15"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-20 animate-on-scroll" data-aos="fade-up">
      <h2 class="text-5xl md:text-6xl font-black text-gray-800 mb-6 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
        Animation Features
      </h2>
      <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
        Discover the various animation types and effects available in our enhanced design system.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Floating Animation Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="100">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-float-slow">
            <i class="fas fa-feather text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Floating Elements</h3>
        <p class="text-gray-600">Smooth floating animations with different speeds and rotation effects.</p>
      </div>
      
      <!-- Morphing Shape Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="200">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-morph-shape">
            <i class="fas fa-shapes text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Morphing Shapes</h3>
        <p class="text-gray-600">Continuously transforming shapes with organic border-radius animations.</p>
      </div>
      
      <!-- 3D Rotation Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="300">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-rotate-3d">
            <i class="fas fa-cube text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">3D Rotation</h3>
        <p class="text-gray-600">Multi-axis 3D rotation effects for dynamic visual interest.</p>
      </div>
      
      <!-- Pulse Glow Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="400">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-pulse-glow">
            <i class="fas fa-star text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Pulse Glow</h3>
        <p class="text-gray-600">Pulsing glow effects with dynamic shadow and scale animations.</p>
      </div>
      
      <!-- Slide In Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="500">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-secondary to-accent rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-slide-in-up">
            <i class="fas fa-arrow-up text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Slide In</h3>
        <p class="text-gray-600">Directional slide-in animations from various directions.</p>
      </div>
      
      <!-- Fade Scale Demo -->
      <div class="group text-center p-8 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl hover:shadow-2xl hover-lift border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="600">
        <div class="relative mb-6">
          <div class="w-20 h-20 bg-gradient-to-r from-accent to-primary rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-lg animate-fade-in-scale">
            <i class="fas fa-expand-arrows-alt text-3xl text-white"></i>
          </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Fade Scale</h3>
        <p class="text-gray-600">Fade in with scale effects for smooth entrance animations.</p>
      </div>
    </div>
  </div>
</section>

<!-- Interactive Demo Section -->
<section id="interactive" class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
  <!-- Background Parallax Elements -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="parallax-element absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-full blur-3xl animate-float-slow" data-speed="0.1"></div>
    <div class="parallax-element absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-br from-accent/20 to-primary/20 rounded-full blur-3xl animate-float-medium" data-speed="0.15"></div>
  </div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-20 animate-on-scroll" data-aos="fade-up">
      <h2 class="text-5xl md:text-6xl font-black mb-6 bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
        Interactive Elements
      </h2>
      <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
        Move your mouse around and scroll to experience the interactive parallax effects.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Mouse Parallax Demo -->
      <div class="text-center p-8 rounded-2xl glass-morphism border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-3xl font-bold mb-6 text-white">Mouse Parallax</h3>
        <p class="text-gray-300 mb-8">Move your mouse around this area to see elements follow your cursor with different speeds.</p>
        
        <div class="space-y-6">
          <div class="mouse-parallax w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full mx-auto animate-pulse-glow" data-mouse-speed="30"></div>
          <div class="mouse-parallax w-12 h-12 bg-gradient-to-br from-secondary to-accent rounded-full mx-auto animate-float-medium" data-mouse-speed="20"></div>
          <div class="mouse-parallax w-8 h-8 bg-gradient-to-br from-accent to-primary rounded-full mx-auto animate-float-fast" data-mouse-speed="15"></div>
        </div>
      </div>
      
      <!-- Scroll Parallax Demo -->
      <div class="text-center p-8 rounded-2xl glass-morphism border border-white/20 animate-on-scroll" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-3xl font-bold mb-6 text-white">Scroll Parallax</h3>
        <p class="text-gray-300 mb-8">Scroll up and down to see elements move at different speeds creating depth.</p>
        
        <div class="space-y-6">
          <div class="parallax-element w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full mx-auto animate-float-slow" data-speed="0.5"></div>
          <div class="parallax-element w-12 h-12 bg-gradient-to-br from-secondary to-accent rounded-full mx-auto animate-float-medium" data-speed="0.3"></div>
          <div class="parallax-element w-8 h-8 bg-gradient-to-br from-accent to-primary rounded-full mx-auto animate-float-fast" data-speed="0.1"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Enhanced JavaScript -->
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
      if (this.menuBtn) {
        this.menuBtn.addEventListener('click', this.toggleMenu.bind(this));
      }
    }

    toggleMenu() {
      if (this.mobileMenu) {
        this.mobileMenu.classList.toggle('hidden');
        this.menuBtn.classList.toggle('active');
      }
    }
  }

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
      new TypingEffect(typingElement, 'Parallax', 150);
    }

    // Add loading animation
    document.body.classList.add('loaded');
  });
</script>

</body>
</html>


