@extends('component.main')

@section('content')
    <!-- Swiper Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Slider Section -->
    <div class="w-full relative">
        <div class="swiper default-carousel">

            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                @forelse ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="h-full md:h-full">
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}"
                                class="w-full h-full object-cover ">
                        </div>
                    </div>

                @empty
                    <div class="swiper-slide">
                        <div class="h-full md:h-full flex items-center justify-center text-center text-gray-500">
                            No banners found.
                        </div>
                    </div>
                @endforelse


            </div>

            <!-- Navigation Buttons -->
            <div class="absolute top-1/2 left-2 sm:left-4 -translate-y-1/2 z-10">
                <button
                    class="button-prev group border border-amber-600 w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center hover:bg-amber-600 transition duration-200 bg-white">
                    <svg class="w-4 h-4 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <div class="absolute top-1/2 right-2 sm:right-4 -translate-y-1/2 z-10">
                <button
                    class="button-next group border border-amber-600 w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center hover:bg-amber-600 transition duration-200 bg-white">
                    <svg class="w-4 h-4 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination !bottom-3 sm:!bottom-4"></div>
        </div>
    </div>



    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Today's Jewellery Rates</h2>
                <p class="text-gray-500 text-base mt-2">Updated on {{ \Carbon\Carbon::parse($today)->format('d M, Y') }}</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @forelse ($rates as $rate)
                    <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition-all">
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-calendar-alt mr-2 text-red-400"></i>
                            {{ \Carbon\Carbon::parse($today)->format('d M, Y') }}
                        </div>

                        <h3 class="text-xl font-semibold text-yellow-700 capitalize mb-1">
                            {{ $rate->name }}
                        </h3>
                        <p class="text-gray-700 text-base font-medium">Price : ₹{{ number_format($rate->gold_rate) }}</p>


                    </div>
                @empty
                    <div class="col-span-4 text-center text-gray-500 py-10">
                        No rate available today.
                    </div>
                @endforelse
            </div>
        </div>
    </section>









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
                @forelse ($categories as $category)
                    <a href="{{ route('front.category.products', $category->id) }}">
                        <div
                            class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                class="mx-auto mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $category->name }}</h3>
                            <p class="text-sm text-gray-500 mt-1">{{ $category->title }}</p>
                            <div class="my-2 flex justify-center">
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md flex items-center gap-2 transition duration-300">
                                    <span class="material-symbols-outlined text-white">
                                        call
                                    </span>
                                    Inquiry Now
                                </button>
                            </div>
                        </div>
                    </a>


                @empty
                    <div class="col-span-1">
                        <p class="text-gray-500">No categories found.</p>
                    </div>
                @endforelse
                {{-- <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Necklaces"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Necklaces</h3>
                    <p class="text-sm text-gray-500 mt-1">Elegant designs to shine</p>
                </div> --}}



            </div>
        </div>
    </section>


    {{-- products --}}

    <div class="container mx-auto md:px-12 py-8 px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-6">Featured Jewelry Collection</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            @forelse ($products as $product)
                <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col shadow-xl">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Premium Gold Necklace"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        <div class="absolute top-4 right-4 badge-new text-white text-xs font-bold px-2 py-1 rounded-full">
                            {{ $product->tag }}
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                        <div class="flex items-center mb-2">

                        </div>
                        <p class="text-gray-600 text-sm mb-4 flex-grow">{{ $product->sort_description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-gray-900"> ₹ {{ $product->price }} /--</span>
                            <a href="{{ route('product.details', $product->id) }}">
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    View Details
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <p class="text-gray-500">No products found.</p>
            @endforelse

        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <a href="{{ route('product') }}"><button
                    class="px-8 py-3 border border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white rounded-full font-medium transition-all duration-300 inline-flex items-center">
                    View All Product
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button></a>
        </div>
    </div>



    <!-- Our Channel Section -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">📺 Our YouTube Channel</h2>
        <p class="text-gray-600 mb-6">Watch latest jewellery designs, behind the scenes, and special videos from RV Jewellers.</p>

        <a href="https://youtube.com/@r.vjewellers9955?si=Y14Dqty3PDzsHH2h" target="_blank" rel="noopener"
            class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-full shadow transition duration-300">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M19.615 3.184A3 3 0 0 1 22 6v12a3 3 0 0 1-2.385 2.816C17.6 21.248 12 21.25 12 21.25s-5.6 0-7.615-.434A3 3 0 0 1 2 18V6a3 3 0 0 1 2.385-2.816C6.4 2.752 12 2.75 12 2.75s5.6 0 7.615.434ZM10 15.5V8.5l6 3.5-6 3.5Z" />
            </svg>
            Visit Channel
        </a>

        <!-- Optional: Embed Latest Video -->
        
        <div class="mt-8 max-w-2xl mx-auto">
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/P1hedUzT6L8" frameborder="0" allowfullscreen class="w-full rounded-xl shadow-lg"></iframe>
            </div>
        </div>
    
    </div>
</section>



    {{-- about -us --}}

    <div class="container mx-auto px-8 py-12 max-w-full rounded-lg">
        @forelse ($abouts as $about)
            <div class="flex flex-col md:flex-row items-center bg-white  overflow-hidden">
                <div class="md:w-1/2 rounded-lg">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="Chain links representing connection"
                        class="w-full h-full object-cover rounded-xl">
                </div>
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

            </div>
        @empty
            <p class="text-gray-600 mb-6 text-lg">No about us information available.</p>
        @endforelse
    </div>

    {{-- why us --}}
    <!-- Material Symbols CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <section class="bg-white py-12 px-4 sm:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">
                Why <span class="text-amber-600">Choose Our Jewellery</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-base sm:text-lg">
                Discover the reasons why thousands trust our expertly crafted jewellery for every special moment.
            </p>
        </div>

        <div class="mt-10 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Feature 1 -->
            @forelse ($aboutfeatures as $feature)
                <div class="flex items-start space-x-4">
                    <span class="{{ $feature->icon }} text-yellow-500 text-4xl"></span>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $feature->title }}</h3>
                        <p class="text-gray-600 text-sm">
                            {{ $feature->subtitle }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No features available.</p>
            @endforelse



        </div>
    </section>


    <!--OUR COLLECTION Tabs Filter Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Jewellery Collection</h2>

            <!-- Tabs -->
          <!-- Tabs -->
<div class="flex flex-wrap justify-center gap-3 mb-10">
    <button class="tab-btn px-4 py-2 bg-amber-500 text-white rounded-full active-tab" data-category="all">All</button>
    @foreach ($groupedCollections as $category => $items)
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
            data-category="{{ strtolower($category) }}">
            {{ ucfirst($category) }}
        </button>
    @endforeach
</div>

<!-- Products Grid -->
<div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="productGrid">
    @foreach ($groupedCollections as $category => $items)
        @foreach ($items as $item)
            <div class="product-card" data-category="{{ strtolower($category) }}">
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-all duration-300">
                    <img src="{{ asset('storage/' . $item['img']) }}" alt="{{ $item['title'] }}"
                        class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 truncate">{{ $item['title'] }}</h3>
                        <p class="text-sm text-gray-500">₹ {{ $item['price'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>



        </div>
    </section>

    {{-- CONTACT US --}}
    <section class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Get in Touch</h2>
                <p class="text-gray-600 text-lg">We'd love to hear from you! Whether you have a question, feedback, or want
                    to work with us — reach out through any channel below.</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Contact Information Card -->
                <div class="w-full lg:w-1/3 bg-white shadow-xl rounded-2xl p-8 h-fit">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-amber-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Our Address</h4>
                                <p class="mt-1 text-gray-600"> Chowk Vijay Cinema Road, Ballia </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-amber-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Email Us</h4>
                                <a href="mailto:contact@example.com"
                                    class="mt-1 text-amber-600 hover:text-amber-800">aajayballia86@gmail.com</a>
                                <p class="mt-1 text-gray-500 text-sm">Typically replies within 24 hours</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-amber-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-800">Call Us</h4>
                                <a href="tel:8707656944" class="mt-1 text-amber-600 hover:text-amber-800">8707656944</a>
                                <br>
                                <a href="tel:9389859821" class="mt-1 text-amber-600 hover:text-amber-800">9389859821</a>
                                <p class="mt-1 text-gray-500 text-sm">Mon-Sat, 10:30am-8:30pm <br> Sunday, 12:00am-7:00pm
                                </p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="pt-4">
                            <h4 class="sr-only text-lg font-medium text-gray-800 mb-3">Follow Us</h4>
                            <div class="flex space-x-4">
                                <a href="https://www.facebook.com/people/Rvjewellers/100065329246578/" target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-gray-600 hover:text-amber-600 transition-colors duration-300"
                                    aria-label="Facebook - Rvjewellers">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326
                                                                      24h11.494v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.894-4.788
                                                                      4.659-4.788 1.325 0 2.464.099 2.797.143v3.24l-1.919.001c-1.504
                                                                      0-1.795.715-1.795 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.403
                                                                      24 24 23.403 24 22.674V1.326C24 .597 23.403 0 22.675 0z" />
                                    </svg>
                                </a>


                                <a href="https://www.instagram.com/aajayballia90/?g=5"
                                    class="text-gray-600 hover:text-amber-600 transition-colors duration-300">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-2/3 bg-white shadow-xl rounded-2xl p-8">
                    <form id="contactForm" method="POST" data-url="{{ route('contact.store') }}" class="space-y-6">
                        @csrf


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200">
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number
                                    *</label>
                                <input type="phone" id="phone" name="phone" required
                                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200"></textarea>
                        </div>

                        <div class="flex items-center justify-center">
                            <button id="submitBtn" type="submit"
                                class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 flex items-center justify-center"
                                disabled>
                                <svg id="loader" class="animate-spin hidden h-5 w-5 mr-2 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                                    </path>
                                </svg>
                                <span id="submitText">Send Message</span>
                            </button>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const submitBtn = document.getElementById("submitBtn");
            const loader = document.getElementById("loader");
            const submitText = document.getElementById("submitText");

            submitBtn.disabled = false; // re-enable on page load

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                submitBtn.disabled = true;
                loader.classList.remove("hidden");
                submitText.textContent = "Sending...";

                const formData = new FormData(form);
                const submitUrl = form.getAttribute("data-url");

                fetch(submitUrl, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    })
                    .then(async response => {
                        if (!response.ok) {
                            const err = await response.json();
                            throw new Error(Object.values(err.errors).flat().join('\n'));
                        }
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire({
                            title: "Message Sent!",
                            text: data.message || "Thank you for contacting us.",
                            icon: "success",
                            confirmButtonColor: "#f59e0b"
                        });
                        form.reset();
                    })
                    .catch(error => {
                        Swal.fire({
                            title: "Error!",
                            text: error.message || "Something went wrong. Please try again.",
                            icon: "error",
                            confirmButtonColor: "#e11d48"
                        });
                    })
                    .finally(() => {
                        loader.classList.add("hidden");
                        submitText.textContent = "Send Message";
                        submitBtn.disabled = false;
                    });
            });
        });
    </script>



    <!-- JavaScript -->
    <script>
        const tabs = document.querySelectorAll('.tab-btn');
        const products = document.querySelectorAll('.product-card');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const category = tab.getAttribute('data-category');

                // Highlight active tab
                tabs.forEach(btn => btn.classList.remove('bg-gray-800', 'text-white', 'active-tab'));
                tab.classList.add('bg-gray-800', 'text-white');

                // Filter products
                products.forEach(product => {
                    if (category === 'all' || product.getAttribute('data-category') === category) {
                        product.classList.remove('hidden');
                    } else {
                        product.classList.add('hidden');
                    }
                });
            });
        });
    </script>



    <!-- Swiper Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".default-carousel", {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                bulletClass: 'swiper-pagination-bullet custom-bullet',
                bulletActiveClass: 'swiper-pagination-bullet-active custom-bullet-active',
            },
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            },
        });
    </script>
@endsection
