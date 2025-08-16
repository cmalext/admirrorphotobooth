<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Corporate Events Gallery - AD Mirror Photo Booth Cebu City</title>
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
 class="fixed top-0 left-0 w-full h-full object-cover -z-10 opacity-10">
  <source src="image/chaither.mp4" type="video/mp4">
</video>

<!-- Navbar -->
<nav class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo -->
      <div class="flex items-center">
        <i class="fas fa-camera-retro text-3xl text-primary mr-3"></i>
        <a href="/" class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
          AD
        </a>
      </div>

      <!-- Menu (Desktop) -->
      <div class="hidden md:flex space-x-8">
        <a href="/" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Home</a>
        <a href="/#features" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Features</a>
        <a href="/#pricing" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Pricing</a>
        <a href="/#gallery" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Gallery</a>
        <a href="/#contact" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Contact</a>
      </div>

      <!-- CTA Button -->
      <div class="hidden md:block">
        <a href="/#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300">
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
        <a href="/" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Home</a>
        <a href="/#features" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Features</a>
        <a href="/#pricing" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Pricing</a>
        <a href="/#gallery" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Gallery</a>
        <a href="/#contact" class="text-gray-700 hover:text-primary transition-colors duration-300 font-medium">Contact</a>
        <a href="/#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-4 py-2 rounded-full font-semibold text-center">
          Book Now
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Header Section -->
<section class="py-20 bg-gradient-to-br from-primary/10 to-secondary/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <div class="mb-8">
      <a href="/" class="inline-flex items-center text-primary hover:text-secondary transition-colors duration-300 mb-6">
        <i class="fas fa-arrow-left mr-2"></i>
        Back to Home
      </a>
      
      <div class="flex items-center justify-center mb-6">
        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-4">
          <i class="fas fa-briefcase text-2xl text-white"></i>
        </div>
        <div>
          <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Corporate Events</h1>
          <p class="text-lg text-gray-600">Professional team building and corporate celebrations</p>
        </div>
      </div>
      
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Elevate your corporate events with our professional mirror photo booth experience. 
        Perfect for team building, product launches, conferences, and company celebrations in Cebu City.
      </p>
    </div>
  </div>
</section>

<!-- Gallery Grid -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Corporate Photo 1 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate1.jpg" alt="Corporate Event 1" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Professional Team Building</h3>
            <p class="text-sm opacity-90">Strengthening team bonds</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Corporate Photo 2 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate2.jpg" alt="Corporate Event 2" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Company Celebrations</h3>
            <p class="text-sm opacity-90">Memorable corporate moments</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Corporate Photo 3 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate3.jpg" alt="Corporate Event 3" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Product Launch Events</h3>
            <p class="text-sm opacity-90">Launching with style</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Corporate Photo 4 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate4.jpg" alt="Corporate Event 4" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Conference Networking</h3>
            <p class="text-sm opacity-90">Building professional connections</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Corporate Photo 5 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate5.jpg" alt="Corporate Event 5" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Corporate Awards Night</h3>
            <p class="text-sm opacity-90">Celebrating achievements</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Corporate Photo 6 -->
      <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
  <img src="/image/coporate6.jpg" alt="Corporate Event 6" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
          <div class="p-6 text-white w-full">
            <h3 class="text-lg font-semibold mb-2">Business Networking</h3>
            <p class="text-sm opacity-90">Professional connections</p>
            <div class="flex items-center mt-3">
              <i class="fas fa-users text-blue-400 mr-2"></i>
              <span class="text-sm">Corporate Event</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Call to Action -->
    <div class="text-center mt-16">
      <div class="bg-gradient-to-r from-primary/10 to-secondary/10 rounded-2xl p-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Ready to Elevate Your Corporate Events?</h3>
        <p class="text-lg text-gray-600 mb-6">
          Let us enhance your corporate events with our professional mirror photo booth experience.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/#contact" class="bg-gradient-to-r from-primary to-secondary text-white px-8 py-4 rounded-full text-lg font-semibold hover:shadow-xl transform hover:scale-105 transition-all duration-300">
            <i class="fas fa-calendar-check mr-2"></i>
            Book Corporate Event
          </a>
          <a href="/" class="border-2 border-primary text-primary px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary hover:text-white transition-all duration-300">
            <i class="fas fa-home mr-2"></i>
            Back to Home
          </a>
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
          <div class="w-12 h-12 bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center mr-3">
            <span class="text-xl font-bold text-white">AD</span>
          </div>
          <span class="text-xl font-bold">AD Photo Booth</span>
        </div>
        <p class="text-gray-300">
          Creating unforgettable memories through our premium mirror photo booth experience in Cebu City.
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
      <p>&copy; 2024 AD Photo Booth Cebu City. All rights reserved.</p>
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

