@extends('component.main')
@section('content')
    <div class="relative md:px-12 md:py-12 p-6">
        <select
            class="appearance-none bg-white text-amber-500 border border-amber-300 rounded-full py-2 pl-4 pr-8 text-amber-700 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
            <option>Sort by: Featured</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Newest Arrivals</option>
            <option>Best Sellers</option>
        </select>

    </div>
    </div>
    </div>
    </div>

    <!-- Products Grid -->
    <section id="products" class="md:px-12 md:py-12 p-6 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <span class="bg-gold text-white text-xs font-bold px-2 py-1 rounded-full">NEW</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Eternity Diamond Ring</h3>
                                <p class="text-gray-500">18K White Gold</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$1,299</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.8 (124)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"> <button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Pearl Drop Necklace</h3>
                                <p class="text-gray-500">14K Rose Gold</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$899</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.9 (87)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">SALE</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Diamond Stud Earrings</h3>
                                <p class="text-gray-500">Platinum</p>
                            </div>
                            <div>
                                <span class="text-gold text-lg font-bold">$1,599</span>
                                <span class="text-gray-400 line-through ml-2">$1,899</span>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.7 (156)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1370&q=80"
                            alt="Gold Bracelet" class="w-full h-64 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Delicate Chain Bracelet</h3>
                                <p class="text-gray-500">14K Yellow Gold</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$599</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.6 (92)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Stackable Ring Set</h3>
                                <p class="text-gray-500">Mixed Metals</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$749</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.5 (68)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <span class="bg-gold text-white text-xs font-bold px-2 py-1 rounded-full">BESTSELLER</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Sapphire Pendant</h3>
                                <p class="text-gray-500">18K White Gold</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$1,199</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.9 (203)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 7 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Diamond Hoop Earrings</h3>
                                <p class="text-gray-500">14K Yellow Gold</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$1,450</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.7 (98)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>

                <!-- Product Card 8 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Diamond Ring" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">LIMITED</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-20 transition duration-300 flex items-center justify-center opacity-0 hover:opacity-100">

                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">Diamond Tennis Bracelet</h3>
                                <p class="text-gray-500">Platinum</p>
                            </div>
                            <div class="text-gold text-lg font-bold">$2,799</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-600 ml-1">4.9 (76)</span>
                            </div>
                            <button class="text-gold hover:text-yellow-600">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                        <a href="{{route('product')}}"><button
                            class="mt-4 w-full bg-amber-500 hover:bg-amber-600 hover:text-white text-gray-800 font-medium py-2 px-4 rounded-full transition duration-300">
                            View Details
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gold hover:text-white hover:border-gold">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#"
                        class="px-4 py-2 border border-gold bg-gold text-white ext-gray-600 rounded-full font-medium">1</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gold hover:text-white hover:border-gold">2</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gold hover:text-white hover:border-gold">3</a>
                    <span class="px-2 text-gray-600">...</span>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gold hover:text-white hover:border-gold">8</a>
                    <a href="#"
                        class="px-4 py-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gold hover:text-white hover:border-gold">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-gray-100 md:px-12 md:py-12 p-6">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Join Our Jewelry Community</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6">Subscribe to receive updates on new collections, exclusive
                offers, and styling tips.</p>
            <div class="flex flex-col sm:flex-row max-w-md mx-auto sm:max-w-xl">
                <input type="email" placeholder="Your email address"
                    class="px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent mb-2 sm:mb-0 sm:mr-2 flex-grow">
                <button
                    class="bg-gold hover:bg-yellow-600 text-white font-medium py-3 px-6 rounded-full transition duration-300">Subscribe</button>
            </div>
        </div>
    </section>



    <!-- Mobile menu toggle script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
@endsection
