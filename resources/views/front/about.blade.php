@extends('component.main')
@section('content')


  <!-- Hero Section -->
  <section class="bg-yellow-50 py-20 px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-yellow-700 mb-4">About Jewellers</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">Discover the story, mission, and people behind the sparkle.</p>
  </section>

  <!-- Our Story -->
  <section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="https://cdn.pixabay.com/photo/2021/12/29/23/46/jewellery-6902967_1280.jpg" alt="Our Story" class="w-full rounded-lg shadow-lg">
      <div>
        <h2 class="text-3xl font-bold text-yellow-700 mb-4">Our Story</h2>
        <p class="text-gray-700 leading-relaxed">Royal Jewels began as a family-run boutique with a passion for exquisite craftsmanship and timeless design. For over two decades, we've been adorning generations with elegance, blending traditional artistry with modern trends to create heirloom-quality jewelry.</p>
      </div>
    </div>
  </section>

  <!-- Vision & Mission -->
  <section class="bg-yellow-50 py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-yellow-700 mb-6">Our Vision & Mission</h2>
      <div class="grid md:grid-cols-2 gap-10 text-left">
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Vision</h3>
          <p class="text-gray-700">To be the leading jewelry brand recognized for innovation, elegance, and exceptional customer experience worldwide.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Mission</h3>
          <p class="text-gray-700">To craft jewelry that celebrates life's special moments with beauty and grace, while maintaining integrity, quality, and trust.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team -->
  <section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl font-bold text-yellow-700 text-center mb-12">Meet Our Team</h2>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 text-center">
        <div>
          <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Founder" class="mx-auto w-28 h-28 rounded-full mb-4">
          <h4 class="text-xl font-semibold">Anita Kapoor</h4>
          <p class="text-gray-500 text-sm">Founder & Creative Director</p>
        </div>
        <div>
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Designer" class="mx-auto w-28 h-28 rounded-full mb-4">
          <h4 class="text-xl font-semibold">Rahul Sharma</h4>
          <p class="text-gray-500 text-sm">Lead Designer</p>
        </div>
        <div>
          <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Marketing" class="mx-auto w-28 h-28 rounded-full mb-4">
          <h4 class="text-xl font-semibold">Sonia Mehta</h4>
          <p class="text-gray-500 text-sm">Marketing Head</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-yellow-100 py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-yellow-800 mb-4">Join Our Journey</h2>
      <p class="text-gray-700 mb-6">Whether you're looking for a perfect gift or something for yourself, Royal Jewels has something truly special for everyone. Explore our collections today.</p>
      <a href="/products.html" class="inline-block bg-yellow-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-yellow-700 transition">Explore Collections</a>
    </div>
  </section>
@endsection
