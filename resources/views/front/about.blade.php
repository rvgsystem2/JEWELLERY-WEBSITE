@extends('component.main')
@section('content')


  <!-- Hero Section -->
  <section class="bg-yellow-50 py-20 px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-yellow-700 mb-4">About Jewellers</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">Discover the story, mission, and people behind the sparkle.</p>
  </section>

  <!-- Our Story -->

    {{-- about -us --}}

    <div class="container mx-auto px-8 py-12 max-w-full rounded-lg">
        @forelse ($abouts as $about)
            <div class="flex flex-col md:flex-row items-center bg-white  overflow-hidden">
                <div class="md:w-1/2 p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $about->title }}</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ $about->sub_title }}
                    </p>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ $about->description }}
                    </p>
                    <a href="{{ route('about') }}"
                        class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 transform hover:-translate-y-1">Learn
                        More</a>
                </div>
                <div class="md:w-1/2 rounded-lg">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="Chain links representing connection"
                        class="w-full h-full object-cover rounded-xl">
                </div>
            </div>
        @empty
            <p class="text-gray-600 mb-6 text-lg">No about us information available.</p>
        @endforelse
    </div>


  <!-- Vision & Mission -->
  <section class="bg-yellow-50 py-16 px-4">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-yellow-700 mb-6">Our Vision & Mission</h2>
      <div class="grid md:grid-cols-2 gap-10 text-left">
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Vision</h3>
          <p class="text-gray-700">Our vision is to become a globally recognized jewelry brand known for authenticity, innovation, and trust. We aspire to inspire elegance and empower self-expression through ethically sourced, masterfully crafted pieces that last generations.</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-md">
          <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Mission</h3>
          <p class="text-gray-700">Our mission is to craft timeless jewelry that celebrates life's special moments. We are committed to providing exquisite designs, exceptional quality, and personalized service—making every customer feel valued, confident, and connected to the beauty they wear.

            .</p>
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

@endsection
