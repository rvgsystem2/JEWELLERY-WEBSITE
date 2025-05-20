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
                        <div class="h-64 md:h-96">
                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}"
                                class="w-full h-full object-cover ">
                        </div>
                    </div>

                @empty
                    <div class="swiper-slide">
                        <div class="h-64 md:h-96 flex items-center justify-center text-center text-gray-500">
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
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Necklaces"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Necklaces</h3>
                    <p class="text-sm text-gray-500 mt-1">Elegant designs to shine</p>
                </div>

                <!-- Category 2 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Earrings"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Earrings</h3>
                    <p class="text-sm text-gray-500 mt-1">Sparkle with every step</p>
                </div>

                <!-- Category 3 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Bracelets"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Bracelets</h3>
                    <p class="text-sm text-gray-500 mt-1">Graceful wrist adornments</p>
                </div>

                <!-- Category 4 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Rings"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Rings</h3>
                    <p class="text-sm text-gray-500 mt-1">Symbol of elegance</p>
                </div>

                <!-- Category 5 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Anklets"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Anklets</h3>
                    <p class="text-sm text-gray-500 mt-1">Delicate steps of beauty</p>
                </div>

                <!-- Category 6 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Maang Tikka"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Maang Tikka</h3>
                    <p class="text-sm text-gray-500 mt-1">Traditional charm</p>
                </div>

                <!-- Category 7 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Bangles"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Bangles</h3>
                    <p class="text-sm text-gray-500 mt-1">Celebrate tradition</p>
                </div>

                <!-- Category 8 -->
                <div
                    class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-lg transition-transform transform hover:scale-105 text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/01/15/14/beads-967179_1280.jpg" alt="Brooches"
                        class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Brooches</h3>
                    <p class="text-sm text-gray-500 mt-1">Add a touch of grace</p>
                </div>

            </div>
        </div>
    </section>


    {{-- products --}}
    <style>
        .slider-container {
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .slider-container::-webkit-scrollbar {
            display: none;
        }

        .card-shadow {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .badge-new {
            background-color: #f59e0b;
        }

        .badge-sale {
            background-color: #10b981;
        }

        .badge-popular {
            background-color: #8b5cf6;
        }

        .badge-bestseller {
            background-color: #ef4444;
        }
    </style>

    <div class="container mx-auto md:px-12 py-8 mx-4" x-data="productSlider()" x-init="init()">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 ">Featured Jewelry Collection</h2>
            <div class="flex space-x-2">
                <button @click="scroll('left')"
                    class="p-2 bg-white rounded-full shadow hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition"
                    aria-label="Scroll left" :disabled="activeIndex === 0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" :class="{ 'opacity-50': activeIndex === 0 }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="scroll('right')"
                    class="p-2 bg-white rounded-full shadow hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition"
                    aria-label="Scroll right" :disabled="activeIndex >= totalCards - cardsToShow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor"
                        :class="{ 'opacity-50': activeIndex >= totalCards - cardsToShow }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div class="slider-container flex overflow-x-auto gap-4 pb-4" x-ref="slider">
                <!-- Product Card 1 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 0ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Premium Gold Necklace"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div
                                class="absolute top-4 right-4 badge-new text-white text-xs font-bold px-2 py-1 rounded-full">
                                NEW
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Premium Gold Necklace</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">24 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Handcrafted 18k gold necklace with premium
                                gemstone accents.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$299.99</span>
                                <a href="{{ route('detail') }}"> <button
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                        aria-label="Add Silver Charm Bracelet to cart">
                                        View Details
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 100ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Silver Charm Bracelet"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div
                                class="absolute top-4 right-4 badge-sale text-white text-xs font-bold px-2 py-1 rounded-full">
                                SALE
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Silver Charm Bracelet</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">42 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Elegant sterling silver bracelet with
                                customizable charm options.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$149.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$199.99</span>
                                    <a href="{{ route('detail') }}"> <button
                                            class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                            aria-label="Add Silver Charm Bracelet to cart">
                                            View Details
                                        </button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 200ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Diamond Stud Earrings"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Stud Earrings</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">18 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Classic diamond stud earrings with premium
                                quality stones.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$89.99</span>
                                <a href="{{ route('detail') }}"> <button
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                        aria-label="Add Diamond Stud Earrings to cart">
                                        View Details
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 300ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Platinum Engagement Ring"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div
                                class="absolute top-4 right-4 badge-popular text-white text-xs font-bold px-2 py-1 rounded-full">
                                POPULAR
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Platinum Engagement Ring</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">56 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Exquisite platinum engagement ring with
                                brilliant-cut diamond.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$1,299.99</span>
                                <a href="{{ route('detail') }}"> <button
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                        aria-label="Add Platinum Engagement Ring to cart">
                                        View Details
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 400ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Gold Bangles Set"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Gold Bangles Set</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">32 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Set of three intricately designed 14k gold
                                bangles.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$179.99</span>
                                <a href="{{ route('detail') }}"> <button
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                        aria-label="Add Gold Bangles Set to cart">
                                        View Details
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in"
                    style="animation-delay: 500ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Diamond Nose Ring"
                                class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div
                                class="absolute top-4 right-4 badge-bestseller text-white text-xs font-bold px-2 py-1 rounded-full">
                                BEST SELLER
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Nose Ring</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">78 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Elegant diamond nose ring with secure
                                screw-back closure.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$79.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$99.99</span>
                                </div>
                                <a href="{{ route('detail') }}"> <button
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                        aria-label="Add Gold Bangles Set to cart">
                                        View Details
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress indicator dots -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(_, index) in Math.ceil(totalCards / cardsToShow)" :key="index">
                    <button @click="scrollToCard(index * cardsToShow)"
                        :class="{ 'bg-amber-500 w-4': activeIndex >= index * cardsToShow && activeIndex < (index + 1) *
                                cardsToShow, 'bg-gray-300 w-3': !(activeIndex >= index * cardsToShow && activeIndex < (
                                index + 1) * cardsToShow) }"
                        class="h-3 rounded-full transition-all duration-300 focus:outline-none"
                        :aria-label="`Go to slide ${index + 1}`">
                    </button>
                </template>
            </div>
        </div>
    </div>

    <script>
        function productSlider() {
            return {
                activeIndex: 0,
                totalCards: 0,
                cardsToShow: 4,
                isScrolling: false,
                sliderWidth: 0,
                cardWidth: 0,
                gap: 16,
                loop: true,

                updateCardsToShow() {
                    if (window.innerWidth < 640) {
                        this.cardsToShow = 1;
                    } else if (window.innerWidth < 1024) {
                        this.cardsToShow = 2;
                    } else {
                        this.cardsToShow = 4;
                    }
                },

                calculateDimensions() {
                    const slider = this.$refs.slider;
                    if (!slider || !slider.children.length) return;

                    this.sliderWidth = slider.offsetWidth;
                    this.cardWidth = slider.children[0].offsetWidth + this.gap;
                    this.totalCards = slider.children.length;
                },

                scroll(direction) {
                    if (this.isScrolling) return;
                    this.isScrolling = true;

                    const slider = this.$refs.slider;
                    this.calculateDimensions();

                    let scrollAmount = this.cardWidth * this.cardsToShow;

                    if (direction === 'left') {
                        this.activeIndex--;
                        slider.scrollBy({
                            left: -scrollAmount,
                            behavior: 'smooth'
                        });
                    } else if (direction === 'right') {
                        this.activeIndex++;
                        slider.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    }

                    setTimeout(() => {
                        // Handle loop jump (without animation)
                        if (this.activeIndex >= this.totalCards - this.cardsToShow) {
                            this.activeIndex = this.cardsToShow;
                            slider.scrollLeft = this.cardWidth * this.activeIndex;
                        }

                        if (this.activeIndex < this.cardsToShow) {
                            this.activeIndex = this.totalCards - this.cardsToShow * 2;
                            slider.scrollLeft = this.cardWidth * this.activeIndex;
                        }

                        this.isScrolling = false;
                    }, 500);
                },

                scrollToCard(index) {
                    if (this.isScrolling) return;
                    this.isScrolling = true;

                    const slider = this.$refs.slider;
                    this.calculateDimensions();

                    this.activeIndex = Math.max(0, Math.min(index, this.totalCards - 1));
                    const scrollPosition = this.activeIndex * this.cardWidth;

                    slider.scrollTo({
                        left: scrollPosition,
                        behavior: 'smooth'
                    });

                    setTimeout(() => {
                        this.isScrolling = false;
                    }, 500);
                },

                cloneSlides() {
                    const slider = this.$refs.slider;
                    if (!slider || !slider.children.length) return;

                    const cards = Array.from(slider.children);
                    const prepend = cards.slice(-this.cardsToShow).map(card => card.cloneNode(true));
                    const append = cards.slice(0, this.cardsToShow).map(card => card.cloneNode(true));

                    // Prepend and append clones
                    prepend.forEach(clone => slider.prepend(clone));
                    append.forEach(clone => slider.appendChild(clone));
                },

                updateActiveIndex() {
                    const slider = this.$refs.slider;
                    if (!slider) return;

                    this.calculateDimensions();
                    const scrollPosition = slider.scrollLeft;
                    this.activeIndex = Math.round(scrollPosition / this.cardWidth);
                },

                handleResize() {
                    this.updateCardsToShow();
                    this.calculateDimensions();
                    this.scrollToCard(this.activeIndex);
                },

                init() {
                    this.updateCardsToShow();
                    this.cloneSlides(); // add clones
                    this.calculateDimensions();

                    const slider = this.$refs.slider;
                    if (!slider) return;

                    // Set initial scroll to the first real slide (after prepended clones)
                    this.activeIndex = this.cardsToShow;
                    slider.scrollLeft = this.cardWidth * this.activeIndex;

                    slider.addEventListener('scroll', () => {
                        if (!this.isScrolling) {
                            this.updateActiveIndex();
                        }
                    });

                    window.addEventListener('resize', () => this.handleResize());
                }
            };
        }
    </script>


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
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 active-tab"
                    data-category="all">All</button>
                <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
                    data-category="rings">Rings</button>
                <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
                    data-category="necklaces">Necklaces</button>
                <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
                    data-category="earrings">Earrings</button>
                <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
                    data-category="bracelets">Bracelets</button>
            </div>

            <!-- Product Grid -->
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="productGrid">
                <!-- Ring -->
                <div class="product-card" data-category="rings">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Ring"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Diamond Ring</h3>
                            <p class="text-gray-500 mt-1">₹ 25,000</p>
                        </div>
                    </div>
                </div>

                <!-- Necklace -->
                <div class="product-card" data-category="necklaces">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Necklace"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Gold Necklace</h3>
                            <p class="text-gray-500 mt-1">₹ 48,000</p>
                        </div>
                    </div>
                </div>

                <!-- Earring -->
                <div class="product-card" data-category="earrings">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Earring"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Pearl Earrings</h3>
                            <p class="text-gray-500 mt-1">₹ 15,000</p>
                        </div>
                    </div>
                </div>

                <!-- Bracelet -->
                <div class="product-card" data-category="bracelets">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Bracelet"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Charm Bracelet</h3>
                            <p class="text-gray-500 mt-1">₹ 12,500</p>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="rings">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Ring"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Diamond Ring</h3>
                            <p class="text-gray-500 mt-1">₹ 25,000</p>
                        </div>
                    </div>
                </div>

                <!-- Necklace -->
                <div class="product-card" data-category="necklaces">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Necklace"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Gold Necklace</h3>
                            <p class="text-gray-500 mt-1">₹ 48,000</p>
                        </div>
                    </div>
                </div>

                <!-- Earring -->
                <div class="product-card" data-category="earrings">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Earring"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Pearl Earrings</h3>
                            <p class="text-gray-500 mt-1">₹ 15,000</p>
                        </div>
                    </div>
                </div>

                <!-- Bracelet -->
                <div class="product-card" data-category="bracelets">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Bracelet"
                            class="w-full">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Charm Bracelet</h3>
                            <p class="text-gray-500 mt-1">₹ 12,500</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate a few more items as needed -->
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
                                <p class="mt-1 text-gray-600"> Vijay Cinema Rd, Japlin Ganj, Bahadurpur, Ballia, Uttar Pradesh 277001 </p>
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
                                    class="mt-1 text-amber-600 hover:text-amber-800">contact@example.com</a>
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
                                <a href="tel:9389859821" class="mt-1 text-amber-600 hover:text-amber-800">9389859821</a>
                                <p class="mt-1 text-gray-500 text-sm">Mon-Fri, 9am-5pm PST</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="pt-4">
                            <h4 class="sr-only text-lg font-medium text-gray-800 mb-3">Follow Us</h4>
                            <div class="flex space-x-4">
                            <a href="https://www.facebook.com/people/Rvjewellers/100065329246578/"
                                target="_blank" rel="noopener noreferrer"
                                class="text-gray-600 hover:text-amber-600 transition-colors duration-300"
                                aria-label="Facebook - Rvjewellers">
                               <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                 <path
                                   d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326
                                      24h11.494v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.894-4.788
                                      4.659-4.788 1.325 0 2.464.099 2.797.143v3.24l-1.919.001c-1.504
                                      0-1.795.715-1.795 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116C23.403
                                      24 24 23.403 24 22.674V1.326C24 .597 23.403 0 22.675 0z"/>
                               </svg>
                            </a>

                                <a href="#"
                                    class="text-gray-600 hover:text-amber-800 transition-colors duration-300">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                            clip-rule="evenodd" />
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
                                <a href="#"
                                    class="text-gray-600 hover:text-gray-900 transition-colors duration-300">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-2/3 bg-white shadow-xl rounded-2xl p-8">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address
                                    *</label>
                                <input type="email" id="email" name="email" required
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

                            <button type="submit"
                                class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


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
