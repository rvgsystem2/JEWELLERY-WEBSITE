@extends('component.main')

@section('content')
    <!-- Swiper Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Slider Section -->
    <div class="w-full relative ">
        <div class="swiper default-carousel overflow-hidden">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="bg-indigo-100 h-96 flex justify-center items-center">
                        <img src="https://cdn.pixabay.com/photo/2017/02/23/19/46/jewelry-box-2093019_1280.jpg" alt=""
                            class="w-full h-full">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="bg-indigo-100 h-96 flex justify-center items-center">
                        <img src="https://cdn.pixabay.com/photo/2017/06/08/16/54/emotions-2384139_1280.jpg" alt=""
                            class="w-full h-full">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="bg-indigo-100 h-96 flex justify-center items-center">
                        <img src="https://cdn.pixabay.com/photo/2018/10/10/06/16/ring-3736503_1280.jpg" alt=""
                            class="w-full h-full">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="absolute top-1/2 left-4 -translate-y-1/2 z-10">
                <button
                    class="button-prev group border border-amber-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-amber-600 transition">
                    <svg class="w-5 h-5 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <div class="absolute top-1/2 right-4 -translate-y-1/2 z-10">
                <button
                    class="button-next group border border-amber-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-amber-600 transition">
                    <svg class="w-5 h-5 text-amber-600 group-hover:text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
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
    </style>

    <div class="container mx-auto px-4 py-8" x-data="productSlider()">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Featured Products</h2>
            <div class="flex space-x-2">
                <button @click="scroll('left')"
                    class="p-2 bg-white rounded-full shadow hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="scroll('right')"
                    class="p-2 bg-white rounded-full shadow hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="relative overflow-hidden ">
            <div class="slider-container flex overflow-x-auto gap-4 pb-4" x-ref="slider">
                <!-- Product Card 1 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 0ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Premium Headphones" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-amber-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                NEW</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Premium Necklaces</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">24 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Wireless noise-cancelling headphones with premium sound
                                quality.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$299.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 100ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Smart Watch" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                SALE</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Smart bracelets</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">42 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Fitness tracker with heart rate monitor and sleep
                                tracking.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$149.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$199.99</span>
                                </div>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 200ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Portable Speaker" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Earings</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">18 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Waterproof ambertooth speaker with 20-hour battery life.
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$89.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 300ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Wireless Earbuds" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-purple-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                POPULAR</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Rings</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">56 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">True wireless earbuds with noise isolation and touch
                                controls.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$129.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 400ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Smart Home Hub" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Bangles</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">32 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Voice-controlled smart home device with built-in
                                assistant.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$179.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="flex-shrink-0 w-64 sm:w-72 md:w-80 fade-in" style="animation-delay: 500ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full">
                        <div class="relative pb-2/3">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Fitness Tracker" class="w-full h-48 object-cover">
                            <div
                                class="absolute top-4 right-4 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                BEST SELLER</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">NoseRings</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">78 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">Waterproof activity tracker with sleep and heart rate
                                monitoring.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$79.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$99.99</span>
                                </div>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress indicator dots -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(_, index) in 6" :key="index">
                    <button @click="scrollToCard(index)"
                        :class="{ 'bg-amber-500': activeIndex === index, 'bg-gray-300': activeIndex !== index }"
                        class="w-3 h-3 rounded-full transition-colors duration-300">
                    </button>
                </template>
            </div>
        </div>
    </div>



    <script>
        function productSlider() {
            return {
                activeIndex: 0,

                scroll(direction) {
                    const slider = this.$refs.slider;
                    const cardWidth = slider.children[0].offsetWidth + 16; // Card width + gap
                    const scrollAmount = direction === 'left' ? -cardWidth : cardWidth;

                    slider.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });

                    // Update the active index after scrolling
                    setTimeout(() => {
                        this.updateActiveIndex();
                    }, 300);
                },

                scrollToCard(index) {
                    const slider = this.$refs.slider;
                    const cardWidth = slider.children[0].offsetWidth + 16; // Card width + gap

                    slider.scrollTo({
                        left: cardWidth * index,
                        behavior: 'smooth'
                    });

                    this.activeIndex = index;
                },

                updateActiveIndex() {
                    const slider = this.$refs.slider;
                    const cardWidth = slider.children[0].offsetWidth + 16; // Card width + gap
                    const scrollPosition = slider.scrollLeft;

                    this.activeIndex = Math.round(scrollPosition / cardWidth);
                },

                init() {
                    const slider = this.$refs.slider;

                    // Listen for scroll events to update active index
                    slider.addEventListener('scroll', () => {
                        this.updateActiveIndex();
                    });

                    // Check viewport size changes to handle responsiveness
                    window.addEventListener('resize', () => {
                        this.updateActiveIndex();
                    });

                    // Initialize with first card active
                    this.activeIndex = 0;
                }
            };
        }
    </script>

 {{-- about -us --}}

 <div class="container mx-auto px-8 py-12 max-w-full">
    <div class="flex flex-col md:flex-row items-center bg-white  overflow-hidden">
        <div class="md:w-1/2 p-8 md:p-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">About us</h2>
            <p class="text-gray-600 mb-6 text-lg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, neque! Nostrum totam voluptatum
                temporibus rerum repellat facilis, nulla recusandae minus. Nemo doloremque omnis modi deleniti.
                Accusantium at deserunt eos. Magnam?
            </p>
            <a href="#"
                class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 transform hover:-translate-y-1">Learn
                More</a>
        </div>
        <div class="md:w-1/2 rounded-lg">
            <img src="https://cdn.pixabay.com/photo/2017/03/05/19/54/chain-2119611_1280.jpg"
                alt="Chain links representing connection" class="w-full h-full object-cover">
        </div>
    </div>
</div>
    {{-- why us --}}
    <div class="container mx-auto py-16 px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12">Why us</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Collection Card 1 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative">
                    <img src="https://cdn.pixabay.com/photo/2023/11/23/05/06/check-8406976_1280.jpg"
                        alt="Collection Image" class="w-full h-64 object-cover">

                </div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Great Collections</h3>
                    <p class="text-gray-600">Premium handpicked items for your style</p>
                </div>
            </div>

            <!-- Collection Card 2 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative">
                    <img src="https://cdn.pixabay.com/photo/2023/11/23/05/06/check-8406976_1280.jpg"
                        alt="Collection Image" class="w-full h-64 object-cover">

                </div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Great Collections</h3>
                    <p class="text-gray-600">Premium handpicked items for your style</p>
                </div>
            </div>

            <!-- Collection Card 3 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative">
                    <img src="https://cdn.pixabay.com/photo/2023/11/23/05/06/check-8406976_1280.jpg"
                        alt="Collection Image" class="w-full h-64 object-cover">

                </div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Great Collections</h3>
                    <p class="text-gray-600">Premium handpicked items for your style</p>
                </div>
            </div>

            <!-- Collection Card 4 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="relative">
                    <img src="https://cdn.pixabay.com/photo/2023/11/23/05/06/check-8406976_1280.jpg"
                        alt="Collection Image" class="w-full h-64 object-cover">

                </div>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Great Collections</h3>
                    <p class="text-gray-600">Premium handpicked items for your style</p>
                </div>
            </div>
        </div>
    </div>


    {{-- gallery --}}
<div>
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12">Gallery</h1>


    <div class="grid grid-cols-2 gap-4 md:grid-cols-4 px-12">
        <div class="grid gap-4">
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg""
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg""
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center h-auto max-w-full rounded-lg shadow-lg"
                    src="https://cdn.pixabay.com/photo/2017/04/24/07/03/jewelry-2255622_1280.jpg" alt="gallery-photo" />
            </div>
        </div>
    </div>
</div>



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
