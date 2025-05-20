@extends('component.main')
@section('content')
<div class="container mx-auto md:px-12 py-8 mx-4">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-6">Featured Jewelry Collection</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card 1 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Premium Gold Necklace"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
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
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Silver Charm Bracelet to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Silver Charm Bracelet"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
                <div class="absolute top-4 right-4 badge-sale text-white text-xs font-bold px-2 py-1 rounded-full">
                    SALE
                </div>
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Silver Charm Bracelet</h3>
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
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
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Silver Charm Bracelet to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Diamond Stud Earrings"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Stud Earrings</h3>
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
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
                        <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <span class="text-sm text-gray-500 ml-2">18 reviews</span>
                </div>
                <p class="text-gray-600 text-sm mb-4 flex-grow">Classic diamond stud earrings with premium quality stones.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-900">$89.99</span>
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Diamond Stud Earrings to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Platinum Engagement Ring"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
                <div class="absolute top-4 right-4 badge-popular text-white text-xs font-bold px-2 py-1 rounded-full">
                    POPULAR
                </div>
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Platinum Engagement Ring</h3>
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
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
                        <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <span class="text-sm text-gray-500 ml-2">56 reviews</span>
                </div>
                <p class="text-gray-600 text-sm mb-4 flex-grow">Exquisite platinum engagement ring with brilliant-cut diamond.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-900">$1,299.99</span>
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Platinum Engagement Ring to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Gold Bangles Set"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Gold Bangles Set</h3>
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
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
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                    <span class="text-sm text-gray-500 ml-2">32 reviews</span>
                </div>
                <p class="text-gray-600 text-sm mb-4 flex-grow">Set of three intricately designed 14k gold bangles.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-900">$179.99</span>
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Gold Bangles Set to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="bg-white rounded-xl card-shadow overflow-hidden h-full flex flex-col">
            <div class="relative h-48 overflow-hidden">
                <img src="https://cdn.pixabay.com/photo/2015/02/06/03/28/jewelry-625725_1280.jpg" alt="Diamond Nose Ring"
                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
                <div class="absolute top-4 right-4 badge-bestseller text-white text-xs font-bold px-2 py-1 rounded-full">
                    BEST SELLER
                </div>
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Diamond Nose Ring</h3>
                <div class="flex items-center mb-2">
                    <div class="flex text-yellow-400">
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
                    <a href="{{ route('detail') }}">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                            aria-label="Add Gold Bangles Set to cart">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
