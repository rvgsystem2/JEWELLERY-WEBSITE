@extends('component.main')

@section('content')
<!-- Swiper Styles -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<!-- Slider Section -->
<div class="w-full relative ">
  <div class="swiper default-carousel overflow-hidden">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="bg-indigo-100 h-96 flex justify-center items-center">
            <img src="https://cdn.pixabay.com/photo/2017/02/23/19/46/jewelry-box-2093019_1280.jpg" alt="" class="w-full h-full">
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="bg-indigo-100 h-96 flex justify-center items-center">
            <img src="https://cdn.pixabay.com/photo/2017/06/08/16/54/emotions-2384139_1280.jpg" alt="" class="w-full h-full">
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="bg-indigo-100 h-96 flex justify-center items-center">
          <img src="https://cdn.pixabay.com/photo/2018/10/10/06/16/ring-3736503_1280.jpg" alt="" class="w-full h-full">
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="absolute top-1/2 left-4 -translate-y-1/2 z-10">
      <button class="button-prev group border border-amber-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-amber-600 transition">
        <svg class="w-5 h-5 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>
    </div>
    <div class="absolute top-1/2 right-4 -translate-y-1/2 z-10">
      <button class="button-next group border border-amber-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-amber-600 transition">
        <svg class="w-5 h-5 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>

    <!-- Pagination Dots -->
    <div class="swiper-pagination bottom-4"></div>
  </div>
</div>

{{-- category section --}}
<!-- Jewellery Categories Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <!-- Section Title -->
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Explore Our Categories</h2>
        <p class="text-gray-500 mt-2">Discover the perfect jewellery for every occasion</p>
      </div>

      <!-- Category Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <!-- Category 1 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Necklaces" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Necklaces</h3>
          <p class="text-sm text-gray-500 mt-1">Elegant designs to shine</p>
        </div>

        <!-- Category 2 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Earrings" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Earrings</h3>
          <p class="text-sm text-gray-500 mt-1">Sparkle with every step</p>
        </div>

        <!-- Category 3 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Bracelets" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Bracelets</h3>
          <p class="text-sm text-gray-500 mt-1">Graceful wrist adornments</p>
        </div>

        <!-- Category 4 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Rings" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Rings</h3>
          <p class="text-sm text-gray-500 mt-1">Symbol of elegance</p>
        </div>

        <!-- Category 5 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Anklets" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Anklets</h3>
          <p class="text-sm text-gray-500 mt-1">Delicate steps of beauty</p>
        </div>

        <!-- Category 6 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Maang Tikka" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Maang Tikka</h3>
          <p class="text-sm text-gray-500 mt-1">Traditional charm</p>
        </div>

        <!-- Category 7 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Bangles" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Bangles</h3>
          <p class="text-sm text-gray-500 mt-1">Celebrate tradition</p>
        </div>

        <!-- Category 8 -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
          <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Brooches" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Brooches</h3>
          <p class="text-sm text-gray-500 mt-1">Add a touch of grace</p>
        </div>

      </div>
    </div>
  </section>


  <!-- Alpine.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Product Carousel -->
<div
  x-data="productCarousel()"
  x-init="startAutoplay()"
  @mouseenter="stopAutoplay()"
  @mouseleave="startAutoplay()"
  class="w-full max-w-6xl mx-auto relative px-4 py-8"
>
  <!-- Slide Container -->
  <div class="overflow-hidden">
    <div
      class="flex transition-transform duration-500 ease-in-out"
      :style="`transform: translateX(-${activeIndex * (100 / slidesPerView)}%);`"
    >
      <template x-for="(product, index) in products" :key="index">
        <div class="w-full sm:w-1/2 md:w-1/3 px-2 flex-shrink-0">
          <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
            <img :src="product.image" alt="" class="w-full h-48 object-cover rounded-t-xl">
            <div class="p-4 space-y-2">
              <h3 class="text-lg font-semibold text-gray-800 truncate" x-text="product.name"></h3>
              <p class="text-sm text-gray-500 line-clamp-2" x-text="product.description"></p>
              <div class="text-indigo-600 font-bold text-lg" x-text="`₹${product.price.toLocaleString()}`"></div>
              <button class="mt-2 w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>

  <!-- Pagination Dots -->
  <div class="flex justify-center mt-6 space-x-2">
    <template x-for="(dot, index) in totalDots" :key="index">
      <button
        @click="goToSlide(index)"
        class="w-3 h-3 rounded-full transition"
        :class="activeIndex === index ? 'bg-indigo-600' : 'bg-indigo-300'"
      ></button>
    </template>
  </div>

  <!-- Navigation Arrows -->
  <button
    @click="prev"
    class="absolute top-1/2 left-1 md:left-2 transform -translate-y-1/2 bg-white shadow p-2 rounded-full hover:bg-indigo-100 z-10"
  >
    &#8592;
  </button>
  <button
    @click="next"
    class="absolute top-1/2 right-1 md:right-2 transform -translate-y-1/2 bg-white shadow p-2 rounded-full hover:bg-indigo-100 z-10"
  >
    &#8594;
  </button>
</div>

<!-- Alpine.js Carousel Logic -->
<script>
  function productCarousel() {
    return {
      activeIndex: 0,
      slidesPerView: 3,
      autoplayInterval: null,
      products: [
        { name: 'Gold Necklace', description: '22K gold with intricate design.', price: 32000, image: 'https://via.placeholder.com/400x300?text=Necklace' },
        { name: 'Diamond Ring', description: 'Elegant diamond ring in platinum.', price: 45000, image: 'https://via.placeholder.com/400x300?text=Ring' },
        { name: 'Pearl Earrings', description: 'Classic pearls for any occasion.', price: 15000, image: 'https://via.placeholder.com/400x300?text=Earrings' },
        { name: 'Gold Bracelet', description: 'Stylish and durable bracelet.', price: 18000, image: 'https://via.placeholder.com/400x300?text=Bracelet' },
        { name: 'Silver Anklet', description: 'Trendy and affordable.', price: 8000, image: 'https://via.placeholder.com/400x300?text=Anklet' },
        { name: 'Luxury Watch', description: 'Limited edition luxury watch.', price: 95000, image: 'https://via.placeholder.com/400x300?text=Watch' },
      ],

      get totalDots() {
        return Math.ceil(this.products.length / this.slidesPerView);
      },

      next() {
        this.activeIndex = (this.activeIndex + 1) % this.totalDots;
      },

      prev() {
        this.activeIndex = (this.activeIndex - 1 + this.totalDots) % this.totalDots;
      },

      goToSlide(index) {
        this.activeIndex = index;
      },

      startAutoplay() {
        this.autoplayInterval = setInterval(() => {
          this.next();
        }, 3000); // 3 seconds
      },

      stopAutoplay() {
        clearInterval(this.autoplayInterval);
      }
    };
  }
</script>


<!-- Swiper Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".default-carousel", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });
</script>
@endsection
