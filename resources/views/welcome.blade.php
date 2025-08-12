<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Navbar with Video Background</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen">

<!-- Video Background -->
<video autoplay muted loop playsinline 
 class="fixed top-20 left-1/2 transform -translate-x-1/2 h-full object-cover -z-10">
  <source src="image/chaither.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<!-- Navbar -->
<nav class="bg-white/90 shadow-md p-4">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    
    <!-- Logo -->
    <a href="#" class="text-gray-800 text-2xl font-bold">MyWebsite</a>

    <!-- Menu (Desktop) -->
    <div class="hidden md:flex space-x-6">
      <a href="#" class="text-gray-700 hover:text-green-600">Home</a>
      <a href="#" class="text-gray-700 hover:text-green-600">About</a>
      <a href="#" class="text-gray-700 hover:text-green-600">Services</a>
      <a href="#" class="text-gray-700 hover:text-green-600">Contact</a>
    </div>

    <!-- Mobile Burger Button -->
    <button class="md:hidden flex flex-col space-y-1.5 focus:outline-none" id="menu-btn">
      <span class="block w-6 h-0.5 bg-[#6f4e37]"></span>
      <span class="block w-6 h-0.5 bg-[#6f4e37]"></span>
      <span class="block w-6 h-0.5 bg-[#6f4e37]"></span>
    </button>

  </div>

  <!-- Mobile Menu -->
  <div class="hidden md:hidden flex-col mt-4 space-y-2" id="mobile-menu">
    <a href="#" class="block text-gray-700 hover:text-green-600">Home</a>
    <a href="#" class="block text-gray-700 hover:text-green-600">About</a>
    <a href="#" class="block text-gray-700 hover:text-green-600">Services</a>
    <a href="#" class="block text-gray-700 hover:text-green-600">Contact</a>
  </div>
</nav>

<script>
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("mobile-menu");
  
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
</script>

</body>
</html>
