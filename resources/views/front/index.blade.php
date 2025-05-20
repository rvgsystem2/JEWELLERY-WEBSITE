@extends('component.main')

@section('content')
    <!-- Swiper Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Slider Section -->
    <div class="w-full relative">
        <div class="swiper default-carousel">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="h-64 md:h-96">
                        <img src="https://img.freepik.com/free-psd/jewelry-template-design_23-2150694442.jpg?ga=GA1.1.1516777589.1747721461&semt=ais_hybrid&w=740" alt="Jewelry Box"
                            class="w-full h-full object-cover ">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="h-64 md:h-96">
                        <img src="https://img.freepik.com/free-psd/jewelry-template-design_23-2151693221.jpg?ga=GA1.1.1516777589.1747721461&semt=ais_hybrid&w=740" alt="Jewelry Display"
                            class="w-full h-full object-cover ">
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="h-64 md:h-96">
                        <img src="https://img.freepik.com/free-psd/celestial-style-jewelry-facebook-template_23-2150907812.jpg?ga=GA1.1.1516777589.1747721461&semt=ais_hybrid&w=740" alt="Ring"
                            class="w-full h-full object-cover ">
                    </div>
                </div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" :class="{'opacity-50': activeIndex === 0}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="scroll('right')"
                    class="p-2 bg-white rounded-full shadow hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500 transition"
                    aria-label="Scroll right" :disabled="activeIndex >= totalCards - cardsToShow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" :class="{'opacity-50': activeIndex >= totalCards - cardsToShow}">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div class="slider-container flex overflow-x-auto gap-4 pb-4" x-ref="slider">
                <!-- Product Card 1 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 0ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Premium Gold Necklace" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div class="absolute top-4 right-4 badge-new text-white text-xs font-bold px-2 py-1 rounded-full">
                                NEW
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Premium Gold Necklace</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">24 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Handcrafted 18k gold necklace with premium gemstone accents.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$299.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Premium Gold Necklace to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 100ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Silver Charm Bracelet" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div class="absolute top-4 right-4 badge-sale text-white text-xs font-bold px-2 py-1 rounded-full">
                                SALE
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Silver Charm Bracelet</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">42 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Elegant sterling silver bracelet with customizable charm options.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$149.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$199.99</span>
                                </div>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Silver Charm Bracelet to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 200ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Diamond Stud Earrings" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Stud Earrings</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">18 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Classic diamond stud earrings with premium quality stones.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$89.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Diamond Stud Earrings to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 300ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Platinum Engagement Ring" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div class="absolute top-4 right-4 badge-popular text-white text-xs font-bold px-2 py-1 rounded-full">
                                POPULAR
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Platinum Engagement Ring</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">56 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Exquisite platinum engagement ring with brilliant-cut diamond.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$1,299.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Platinum Engagement Ring to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 400ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Gold Bangles Set" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Gold Bangles Set</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">32 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Set of three intricately designed 14k gold bangles.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-900">$179.99</span>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Gold Bangles Set to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="flex-shrink-0 w-[calc(100%-2rem)] sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1rem)] fade-in" style="animation-delay: 500ms;">
                    <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col mx-2 sm:mx-0">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg"
                                alt="Diamond Nose Ring" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            <div class="absolute top-4 right-4 badge-bestseller text-white text-xs font-bold px-2 py-1 rounded-full">
                                BEST SELLER
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Nose Ring</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <!-- Star icons -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <!-- Repeat for 5 stars -->
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-gray-500 ml-2">78 reviews</span>
                            </div>
                            <p class="text-gray-600 text-sm mb-4 flex-grow">Elegant diamond nose ring with secure screw-back closure.</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-xl font-bold text-gray-900">$79.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">$99.99</span>
                                </div>
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                                    aria-label="Add Diamond Nose Ring to cart">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress indicator dots -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(_, index) in Math.ceil(totalCards / cardsToShow)" :key="index">
                    <button @click="scrollToCard(index * cardsToShow)"
                        :class="{ 'bg-amber-500 w-4': activeIndex >= index * cardsToShow && activeIndex < (index + 1) * cardsToShow, 'bg-gray-300 w-3': !(activeIndex >= index * cardsToShow && activeIndex < (index + 1) * cardsToShow) }"
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
                        slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                    } else if (direction === 'right') {
                        this.activeIndex++;
                        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
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

                    slider.scrollTo({ left: scrollPosition, behavior: 'smooth' });

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
                alt="Chain links representing connection" class="w-full h-full object-cover rounded-xl">
        </div>
    </div>
</div>
    {{-- why us --}}
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 font-serif">Why Choose Our Jewellery</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Where timeless elegance meets exceptional craftsmanship</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Quality Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 flex flex-col h-full border border-gray-100">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Handcrafted jewellery quality inspection"
                        class="w-full h-full object-cover"
                        loading="lazy">
                </div>
                <div class="p-6 flex-grow">
                    <div class="w-10 h-1 bg-amber-500 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 font-serif">Exquisite Craftsmanship</h3>
                    <p class="text-gray-600">Each piece is handcrafted by master jewellers using only the finest materials and traditional techniques.</p>
                </div>
            </div>

            <!-- Collections Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 flex flex-col h-full border border-gray-100">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Luxury jewellery collection"
                        class="w-full h-full object-cover"
                        loading="lazy">
                </div>
                <div class="p-6 flex-grow">
                    <div class="w-10 h-1 bg-amber-500 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 font-serif">Signature Collections</h3>
                    <p class="text-gray-600">Our curated collections blend contemporary design with classic elegance for every occasion.</p>
                </div>
            </div>

            <!-- Gemstones Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 flex flex-col h-full border border-gray-100">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Premium gemstones and diamonds"
                        class="w-full h-full object-cover"
                        loading="lazy">
                </div>
                <div class="p-6 flex-grow">
                    <div class="w-10 h-1 bg-amber-500 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 font-serif">Ethically Sourced Gems</h3>
                    <p class="text-gray-600">We use only conflict-free diamonds and responsibly mined gemstones of the highest quality.</p>
                </div>
            </div>

            <!-- Service Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2 flex flex-col h-full border border-gray-100">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Personal jewellery consultation"
                        class="w-full h-full object-cover"
                        loading="lazy">
                </div>
                <div class="p-6 flex-grow">
                    <div class="w-10 h-1 bg-amber-500 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 font-serif">Personalized Service</h3>
                    <p class="text-gray-600">From bespoke designs to lifetime care, we provide white-glove service at every step.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
            <a href="#" class="inline-block px-8 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 transition-colors duration-300 uppercase tracking-wider">
                Discover Our Collections
            </a>
            <p class="mt-4 text-gray-500 text-sm">Complimentary shipping & returns on all orders</p>
        </div>
    </div>

    {{-- gallery --}}
{{-- <div>
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
</div> --}}

<!-- Tabs Filter Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Jewellery Collection</h2>

      <!-- Tabs -->
      <div class="flex flex-wrap justify-center gap-4 mb-10">
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 active-tab" data-category="all">All</button>
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300" data-category="rings">Rings</button>
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300" data-category="necklaces">Necklaces</button>
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300" data-category="earrings">Earrings</button>
        <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300" data-category="bracelets">Bracelets</button>
      </div>

      <!-- Product Grid -->
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="productGrid">
        <!-- Ring -->
        <div class="product-card" data-category="rings">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Ring" class="w-full">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">Diamond Ring</h3>
              <p class="text-gray-500 mt-1">₹ 25,000</p>
            </div>
          </div>
        </div>

        <!-- Necklace -->
        <div class="product-card" data-category="necklaces">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Necklace" class="w-full">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">Gold Necklace</h3>
              <p class="text-gray-500 mt-1">₹ 48,000</p>
            </div>
          </div>
        </div>

        <!-- Earring -->
        <div class="product-card" data-category="earrings">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Earring" class="w-full">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">Pearl Earrings</h3>
              <p class="text-gray-500 mt-1">₹ 15,000</p>
            </div>
          </div>
        </div>

        <!-- Bracelet -->
        <div class="product-card" data-category="bracelets">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Bracelet" class="w-full">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">Charm Bracelet</h3>
              <p class="text-gray-500 mt-1">₹ 12,500</p>
            </div>
          </div>
        </div>

        <div class="product-card" data-category="rings">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Ring" class="w-full">
              <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Diamond Ring</h3>
                <p class="text-gray-500 mt-1">₹ 25,000</p>
              </div>
            </div>
          </div>

          <!-- Necklace -->
          <div class="product-card" data-category="necklaces">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Necklace" class="w-full">
              <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Gold Necklace</h3>
                <p class="text-gray-500 mt-1">₹ 48,000</p>
              </div>
            </div>
          </div>

          <!-- Earring -->
          <div class="product-card" data-category="earrings">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Earring" class="w-full">
              <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Pearl Earrings</h3>
                <p class="text-gray-500 mt-1">₹ 15,000</p>
              </div>
            </div>
          </div>

          <!-- Bracelet -->
          <div class="product-card" data-category="bracelets">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="https://cdn.pixabay.com/photo/2023/05/23/09/23/pearl-8012322_1280.jpg" alt="Bracelet" class="w-full">
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
