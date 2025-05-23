
  <!-- Top Bar -->
 <!-- Responsive Top Bar -->
<div class="bg-amber-500 text-sm">
    <div class="container mx-auto px-4 py-2 flex flex-col md:flex-row justify-between items-center gap-2 text-center md:text-left">

      <!-- Contact Info -->
      <div class="flex flex-col sm:flex-row items-center gap-2 text-gray-50">
        <a href="tel:+918707656944"></a><span><i class="fas fa-phone-alt mr-1 text-gray-50"></i> +918707656944</span>
                <a href="tel:++919389859821"></a><span><i class="fas fa-phone-alt mr-1 text-gray-50"></i> +919389859821</span>
        <span><i class="fas fa-envelope mr-1 text-gray-50"></i> aajayballia86@gmail.com</span>
      </div>

      <!-- Social Icons -->
      <div class="flex justify-center md:justify-end items-center gap-3 text-gray-50">
        <a href="https://www.facebook.com/people/Rvjewellers/100065329246578/" class="hover:text-yellow-600"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/aajayballia90/?g=5" class="hover:text-yellow-600"><i class="fab fa-instagram"></i></a>

      </div>

    </div>
</div>


  <!-- Main Header -->
  <header class="shadow-sm sticky top-0 z-50 bg-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="/" class="text-2xl font-bold text-yellow-600 tracking-wide">
        RV<span class="text-gray-800">Jewellers</span>
      </a>

      <!-- Navigation -->
      {{-- <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
        <a href="/" class="hover:text-yellow-600 transition nav-link ">Home</a>
        <a href="{{route('gallery')}}" class="hover:text-yellow-600 transition nav-link">Gallery</a>
        <a href="{{route('product')}}" class="hover:text-yellow-600 transition nav-link">Products</a>
        <a href="{{route('about')}}" class="hover:text-yellow-600 transition nav-link">About Us</a>
        <a href="{{route('contact')}}" class="hover:text-yellow-600 transition nav-link">Contact</a>
      </nav> --}}
      <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
        <a href="/" class="hover:text-yellow-600 transition {{ request()->is('/') ? 'text-yellow-600' : 'text-gray-800' }}">Home</a>
        <a href="{{route('gallery')}}" class="hover:text-yellow-600 transition {{ request()->routeIs('gallery') ? 'text-yellow-600' : 'text-gray-800' }}">Gallery</a>
        <a href="{{route('product')}}" class="hover:text-yellow-600 transition {{ request()->routeIs('product') ? 'text-yellow-600' : 'text-gray-800' }}">Products</a>
        <a href="{{route('about')}}" class="hover:text-yellow-600 transition {{ request()->routeIs('about') ? 'text-yellow-600' : 'text-gray-800' }}">About Us</a>
        <a href="{{route('contact')}}" class="hover:text-yellow-600 transition {{ request()->routeIs('contact') ? 'text-yellow-600' : 'text-gray-800' }}">Contact</a>
      </nav>

      <!-- Icons -->
      <div class="flex items-center gap-4">


        <a href="{{route('login')}}" class="text-gray-600 hover:text-yellow-600">
          <i class="fas fa-user text-lg"></i>
        </a>

        <!-- Mobile Menu Button -->
        <button id="menuToggle" class="md:hidden text-gray-700 focus:outline-none">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    {{-- <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-white shadow-md">
      <a href="/" class="block py-2 text-gray-700 hover:text-yellow-600">Home</a>
      <a href="{{route('gallery')}}" class="block py-2 text-gray-700 hover:text-yellow-600">Gallery</a>
      <a href="{{route('product')}}" class="block py-2 text-gray-700 hover:text-yellow-600">Products</a>
      <a href="{{route('about')}}" class="block py-2 text-gray-700 hover:text-yellow-600">About Us</a>
      <a href="{{route('contact')}}" class="block py-2 text-gray-700 hover:text-yellow-600">Contact</a>
    </div> --}}
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-white shadow-md">
        <a href="/" class="block py-2 {{ request()->is('/') ? 'text-yellow-600' : 'text-gray-700' }} hover:text-yellow-600">Home</a>
        <a href="{{route('gallery')}}" class="block py-2 {{ request()->routeIs('gallery') ? 'text-yellow-600' : 'text-gray-700' }} hover:text-yellow-600">Gallery</a>
        <a href="{{route('product')}}" class="block py-2 {{ request()->routeIs('product') ? 'text-yellow-600' : 'text-gray-700' }} hover:text-yellow-600">Products</a>
        <a href="{{route('about')}}" class="block py-2 {{ request()->routeIs('about') ? 'text-yellow-600' : 'text-gray-700' }} hover:text-yellow-600">About Us</a>
        <a href="{{route('contact')}}" class="block py-2 {{ request()->routeIs('contact') ? 'text-yellow-600' : 'text-gray-700' }} hover:text-yellow-600">Contact</a>
      </div>
  </header>

  <script>
    document.getElementById('menuToggle').addEventListener('click', function () {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    });


  </script>
