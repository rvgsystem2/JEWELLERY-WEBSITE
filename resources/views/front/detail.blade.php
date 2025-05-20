@extends('component.main')
@section('content')
    <!-- Product Detail Section -->
    <div class="max-w-7xl mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

            <!-- Image Gallery -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="w-full overflow-hidden rounded-2xl shadow-lg">
                    <img id="mainImage"
                        src="https://img.freepik.com/free-vector/realistic-gold-silver-jewelry-display-black-mannequins-stands-grey-surface_1284-9644.jpg"
                        alt="Elegant Gold Necklace Set" class="w-full h-auto object-cover aspect-square">
                </div>

                <!-- Thumbnails -->
                <div class="grid grid-cols-4 gap-4">
                    <img src="https://img.freepik.com/free-vector/realistic-gold-silver-jewelry-display-black-mannequins-stands-grey-surface_1284-9644.jpg"
                        alt="Necklace front view"
                        class="thumbnail rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                        data-main-src="https://img.freepik.com/free-vector/realistic-gold-silver-jewelry-display-black-mannequins-stands-grey-surface_1284-9644.jpg">
                    <img src="https://img.freepik.com/premium-photo/ethnic-indian-jewellery_864595-514.jpg"
                        alt="Necklace side view"
                        class="thumbnail rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                        data-main-src="https://img.freepik.com/premium-photo/ethnic-indian-jewellery_864595-514.jpg">
                    <img src="https://img.freepik.com/premium-photo/indian-traditional-jewellery_136354-6544.jpg"
                        alt="Necklace close-up"
                        class="thumbnail rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                        data-main-src="https://img.freepik.com/premium-photo/indian-traditional-jewellery_136354-6544.jpg">
                    <img src="https://img.freepik.com/premium-photo/gold-bangles-indian-bridal-jewellery-wedding-wear-collection-real-gold-jewellery-ornaments-lady_493265-36.jpg"
                        alt="Necklace with earrings"
                        class="thumbnail rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                        data-main-src="https://img.freepik.com/premium-photo/gold-bangles-indian-bridal-jewellery-wedding-wear-collection-real-gold-jewellery-ornaments-lady_493265-36.jpg">
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Elegant Gold Necklace Set</h1>

                <!-- SKU and Availability -->
                <div class="text-sm text-gray-500 mb-3">
                    SKU: JWL-22045 | <span class="text-green-600">In Stock</span>
                </div>

                <!-- Rating -->
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <span class="star" data-rating="1">★</span>
                        <span class="star" data-rating="2">★</span>
                        <span class="star" data-rating="3">★</span>
                        <span class="star" data-rating="4">★</span>
                        <span class="star" data-rating="5">☆</span>
                    </div>
                    <span class="ml-2 text-sm text-gray-600">(124 reviews)</span>
                    <a href="#reviews" class="ml-3 text-sm text-amber-600 hover:underline">Read reviews</a>
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <span class="text-2xl text-amber-600 font-semibold">₹24,999</span>
                    <span class="ml-2 text-sm text-amber-500 line-through">₹29,999</span>
                    <span class="ml-2 text-sm text-green-600 bg-green-100 px-2 py-1 rounded">17% OFF</span>
                </div>



                <!-- Quantity Selector -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Quantity:</h3>
                    <div class="flex items-center">
                        <button id="decrement"
                            class="px-3 py-1 border border-gray-300 rounded-l-md bg-gray-100 text-gray-600 hover:bg-gray-200">-</button>
                        <input type="number" id="quantity" value="1" min="1" max="10"
                            class="w-16 text-center border-t border-b border-gray-300 py-1">
                        <button id="increment"
                            class="px-3 py-1 border border-gray-300 rounded-r-md bg-gray-100 text-gray-600 hover:bg-gray-200">+</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Description:</h3>
                    <p class="text-gray-700">
                        This exquisite handcrafted gold-plated necklace set features intricate design details, perfect for
                        weddings, parties, and traditional occasions. Includes matching earrings.
                    </p>
                </div>

                <!-- Features -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Features:</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> 22K Gold Plated</li>
                        <li class="flex items-center"><svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Hypoallergenic, Skin Friendly</li>
                        <li class="flex items-center"><svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Free Shipping & Return</li>
                        <li class="flex items-center"><svg class="h-5 w-5 text-green-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> 1 Year Warranty</li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row sm:items-center gap-4 mb-6">
                    <button id="addToCart"
                        class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow transition duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        Add to Cart
                    </button>
                    <button id="buyNow"
                        class="border border-amber-600 text-amber-600 hover:bg-amber-50 font-semibold py-3 px-6 rounded-xl shadow transition duration-300">
                        Buy Now
                    </button>
                </div>

                <!-- Wishlist and Share -->
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <button id="wishlistBtn" class="flex items-center hover:text-amber-600 transition">
                        <svg id="wishlistIcon" class="w-5 h-5 mr-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        <span id="wishlistText">Add to Wishlist</span>
                    </button>
                    <button id="shareBtn" class="flex items-center hover:text-amber-600 transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                            </path>
                        </svg>
                        Share
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-16 border-t border-gray-200 pt-10">
            <div class="flex border-b border-gray-200">
                <button
                    class="tab-btn py-4 px-6 font-medium text-sm border-b-2 border-transparent hover:text-amber-600 hover:border-amber-600"
                    data-tab="description">Description</button>
                <button
                    class="tab-btn py-4 px-6 font-medium text-sm border-b-2 border-transparent hover:text-amber-600 hover:border-amber-600"
                    data-tab="specifications">Specifications</button>
                <button
                    class="tab-btn py-4 px-6 font-medium text-sm border-b-2 border-transparent hover:text-amber-600 hover:border-amber-600"
                    data-tab="reviews">Reviews (124)</button>
                <button
                    class="tab-btn py-4 px-6 font-medium text-sm border-b-2 border-transparent hover:text-amber-600 hover:border-amber-600"
                    data-tab="shipping">Shipping & Returns</button>
            </div>

            <div class="py-6">
                <!-- Description Tab Content -->
                <div id="description" class="tab-content">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Product Description</h3>
                    <div class="pamber pamber-sm text-gray-500">
                        <p>This elegant gold necklace set is meticulously crafted by skilled artisans using traditional
                            techniques passed down through generations. The set includes a stunning necklace with intricate
                            filigree work and matching earrings that complement the design perfectly.</p>
                        <p>Made with 22K gold plating over a durable base metal, this jewelry set maintains its luster while
                            being more affordable than solid gold. The hypoallergenic materials ensure comfort for all-day
                            wear, even for those with sensitive skin.</p>
                        <p>Perfect for weddings, festivals, and special occasions, this set comes in a beautiful gift box,
                            making it an ideal present for loved ones.</p>
                    </div>
                </div>

                <!-- Specifications Tab Content -->
                <div id="specifications" class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Product Specifications</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                        <div class="space-y-2">
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Material</span>
                                <span>22K Gold Plated Brass</span>
                            </div>
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Weight</span>
                                <span>Necklace: 18g, Earrings: 4g</span>
                            </div>
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Dimensions</span>
                                <span>Necklace Length: 18 inches</span>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Closure</span>
                                <span>Lobster Clasp</span>
                            </div>
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Stone Type</span>
                                <span>Zircon Stones</span>
                            </div>
                            <div class="flex border-b py-2">
                                <span class="font-medium text-gray-900 w-1/3">Warranty</span>
                                <span>1 Year against manufacturing defects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews Tab Content -->
                <div id="reviews" class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Customer Reviews</h3>
                    <div class="space-y-8">
                        <!-- Review Summary -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="text-3xl font-bold mr-4">4.2</div>
                                <div>
                                    <div class="flex items-center mb-1">
                                        <div class="flex text-yellow-400">
                                            ★★★★☆
                                        </div>
                                        <span class="ml-2 text-sm text-gray-600">out of 5</span>
                                    </div>
                                    <div class="text-sm text-gray-600">124 global ratings</div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <span class="w-16 text-sm">5 star</span>
                                    <div class="flex-1 h-2.5 bg-gray-200 rounded-full mx-2">
                                        <div class="h-2.5 bg-yellow-400 rounded-full" style="width: 70%"></div>
                                    </div>
                                    <span class="w-8 text-sm text-right">70%</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-16 text-sm">4 star</span>
                                    <div class="flex-1 h-2.5 bg-gray-200 rounded-full mx-2">
                                        <div class="h-2.5 bg-yellow-400 rounded-full" style="width: 20%"></div>
                                    </div>
                                    <span class="w-8 text-sm text-right">20%</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-16 text-sm">3 star</span>
                                    <div class="flex-1 h-2.5 bg-gray-200 rounded-full mx-2">
                                        <div class="h-2.5 bg-yellow-400 rounded-full" style="width: 7%"></div>
                                    </div>
                                    <span class="w-8 text-sm text-right">7%</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-16 text-sm">2 star</span>
                                    <div class="flex-1 h-2.5 bg-gray-200 rounded-full mx-2">
                                        <div class="h-2.5 bg-yellow-400 rounded-full" style="width: 2%"></div>
                                    </div>
                                    <span class="w-8 text-sm text-right">2%</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-16 text-sm">1 star</span>
                                    <div class="flex-1 h-2.5 bg-gray-200 rounded-full mx-2">
                                        <div class="h-2.5 bg-yellow-400 rounded-full" style="width: 1%"></div>
                                    </div>
                                    <span class="w-8 text-sm text-right">1%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Individual Reviews -->
                        <div class="space-y-6">
                            <div class="border-b pb-6">
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400 mr-2">
                                        ★★★★★
                                    </div>
                                    <span class="text-sm font-medium">Priya Sharma</span>
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Beautiful craftsmanship</h4>
                                <p class="text-sm text-gray-600 mb-2">Reviewed on 15 May 2023</p>
                                <p class="text-gray-700">The necklace set exceeded my expectations. The detailing is
                                    exquisite and it looks much more expensive than it actually is. Received many
                                    compliments at my sister's wedding.</p>
                            </div>

                            <div class="border-b pb-6">
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400 mr-2">
                                        ★★★★☆
                                    </div>
                                    <span class="text-sm font-medium">Rahul Patel</span>
                                </div>
                                <h4 class="font-medium text-gray-900 mb-1">Good quality for the price</h4>
                                <p class="text-sm text-gray-600 mb-2">Reviewed on 3 April 2023</p>
                                <p class="text-gray-700">Bought this for my wife's anniversary gift. She loved the design.
                                    The gold plating seems durable after 2 months of occasional wear. Only minor issue was
                                    the delivery took longer than expected.</p>
                            </div>
                        </div>

                        <button class="mt-4 text-amber-600 hover:underline font-medium">See all reviews</button>
                    </div>
                </div>

                <!-- Shipping Tab Content -->
                <div id="shipping" class="tab-content hidden">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Shipping & Returns</h3>
                    <div class="pamber pamber-sm text-gray-500 space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">Shipping Information</h4>
                            <p>We offer free standard shipping on all orders. Orders are processed within 1-2 business days
                                and typically delivered within 5-7 business days via our trusted courier partners.</p>
                            <p>Express shipping options are available at checkout for an additional charge.</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">Returns Policy</h4>
                            <p>We offer a 30-day return policy from the date of delivery. Items must be unused, in their
                                original condition, and with all tags attached. The customer is responsible for return
                                shipping costs unless the item arrived damaged or defective.</p>
                            <p>To initiate a return, please contact our customer service team with your order details.</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">International Shipping</h4>
                            <p>We ship to most countries worldwide. International orders may be subject to customs duties
                                and taxes which are the responsibility of the customer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="max-w-7xl mx-auto p-6 mt-16 border-t border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">You may also like</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="group relative shadow-lg p-4">
                <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                    <img src="https://img.freepik.com/premium-photo/indian-traditional-jewellery_136354-6544.jpg"
                        alt="Traditional Earrings"
                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition duration-300">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Gold Plated Jhumka Earrings
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">22K Gold</p>
                    <p class="mt-1 text-lg font-medium text-gray-900">₹8,999</p>

                    <a href="{{route('detail')}}"> <button
                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                        aria-label="Add Gold Bangles Set to cart">
                        View Details
                    </button></a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group relative shadow-lg p-4">
                <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                    <img src="https://img.freepik.com/premium-photo/gold-bangles-indian-bridal-jewellery-wedding-wear-collection-real-gold-jewellery-ornaments-lady_493265-36.jpg"
                        alt="Bridal Bangles"
                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition duration-300">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Bridal Gold Bangles Set
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Set of 12</p>
                    <p class="mt-1 text-lg font-medium text-gray-900">₹12,499</p>
                    <a href="{{route('detail')}}"> <button
                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                        aria-label="Add Gold Bangles Set to cart">
                        View Details
                    </button></a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group relative shadow-lg p-4">
                <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                    <img src="https://img.freepik.com/premium-photo/gold-jwellery_1057199-4.jpg" alt="Gold Ring"
                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition duration-300">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Diamond Studded Gold Ring
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Solitaire</p>
                    <p class="mt-1 text-lg font-medium text-gray-900">₹15,999</p>
                    <a href="{{route('detail')}}"> <button
                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                        aria-label="Add Gold Bangles Set to cart">
                        View Details
                    </button></a>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="group relative shadow-lg p-4">
                <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                    <img src="https://img.freepik.com/premium-photo/indian-traditional-jewellery_136354-6544.jpg"
                        alt="Pearl Necklace"
                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition duration-300">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Pearl & Gold Choker Set
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">With Matching Earrings</p>
                    <p class="mt-1 text-lg font-medium text-gray-900">₹18,499</p>
                    <a href="{{route('detail')}}"> <button
                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50"
                        aria-label="Add Gold Bangles Set to cart">
                        View Details
                    </button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Image gallery functionality
            const thumbnails = document.querySelectorAll('.thumbnail');
            const mainImage = document.getElementById('mainImage');

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Update main image
                    mainImage.src = this.dataset.mainSrc;
                    mainImage.alt = this.alt;

                    // Update active thumbnail styling
                    thumbnails.forEach(t => t.classList.remove('ring-2', 'ring-yellow-400'));
                    this.classList.add('ring-2', 'ring-yellow-400');
                });
            });

            // Quantity selector functionality
            const quantityInput = document.getElementById('quantity');
            const incrementBtn = document.getElementById('increment');
            const decrementBtn = document.getElementById('decrement');

            incrementBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < 10) {
                    quantityInput.value = currentValue + 1;
                }
            });

            decrementBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            // Color selection functionality
            const colorOptions = document.querySelectorAll('.color-option');

            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    colorOptions.forEach(opt => opt.classList.remove('border-amber-500', 'ring-2',
                        'ring-amber-200'));
                    this.classList.add('border-amber-500', 'ring-2', 'ring-amber-200');
                    // Here you would typically update product images/variants based on color selection
                });
            });

            // Wishlist functionality
            const wishlistBtn = document.getElementById('wishlistBtn');
            const wishlistIcon = document.getElementById('wishlistIcon');
            const wishlistText = document.getElementById('wishlistText');
            let isInWishlist = false;

            wishlistBtn.addEventListener('click', function() {
                isInWishlist = !isInWishlist;
                if (isInWishlist) {
                    wishlistIcon.classList.add('fill-amber-600');
                    wishlistText.textContent = 'Added to Wishlist';
                    // Here you would typically make an API call to add to wishlist
                    showToast('Added to wishlist');
                } else {
                    wishlistIcon.classList.remove('fill-amber-600');
                    wishlistText.textContent = 'Add to Wishlist';
                    // Here you would typically make an API call to remove from wishlist
                    showToast('Removed from wishlist');
                }
            });

            // Share functionality
            const shareBtn = document.getElementById('shareBtn');

            shareBtn.addEventListener('click', function() {
                if (navigator.share) {
                    navigator.share({
                            title: 'Elegant Gold Necklace Set',
                            text: 'Check out this beautiful gold necklace set!',
                            url: window.location.href,
                        })
                        .catch(err => {
                            console.log('Error sharing:', err);
                        });
                } else {
                    // Fallback for browsers that don't support Web Share API
                    const shareUrl =
                        `https://wa.me/?text=Check%20out%20this%20beautiful%20gold%20necklace%20set%20${encodeURIComponent(window.location.href)}`;
                    window.open(shareUrl, '_blank');
                }
            });

            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabId = this.dataset.tab;

                    // Update active tab button
                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-amber-600', 'text-amber-600');
                    });
                    this.classList.add('border-amber-600', 'text-amber-600');

                    // Show selected tab content
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                        if (content.id === tabId) {
                            content.classList.remove('hidden');
                        }
                    });
                });
            });

            // Set first tab as active by default
            if (tabButtons.length > 0) {
                tabButtons[0].classList.add('border-amber-600', 'text-amber-600');
            }

            // Star rating functionality
            const stars = document.querySelectorAll('.star');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = this.dataset.rating;

                    // Update star display
                    stars.forEach((s, index) => {
                        if (index < rating) {
                            s.textContent = '★';
                        } else {
                            s.textContent = '☆';
                        }
                    });

                    // Here you would typically submit the rating to your backend
                    console.log(`User rated ${rating} stars`);
                    showToast(`Thanks for your ${rating} star rating!`);
                });
            });

            // Add to cart functionality
            const addToCartBtn = document.getElementById('addToCart');

            addToCartBtn.addEventListener('click', function() {
                const quantity = quantityInput.value;
                // Here you would typically make an API call to add to cart
                showToast(`Added ${quantity} item(s) to cart`);
            });

            // Buy now functionality
            const buyNowBtn = document.getElementById('buyNow');

            buyNowBtn.addEventListener('click', function() {
                const quantity = quantityInput.value;
                // Here you would typically redirect to checkout with the product
                console.log(`Buy now with quantity: ${quantity}`);
                showToast('Proceeding to checkout');
            });

            // Helper function to show toast notifications
            function showToast(message) {
                const toast = document.createElement('div');
                toast.className =
                    'fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-md shadow-lg transition-opacity duration-300 opacity-0';
                toast.textContent = message;
                document.body.appendChild(toast);

                // Animate in
                setTimeout(() => {
                    toast.classList.remove('opacity-0');
                    toast.classList.add('opacity-100');
                }, 10);

                // Animate out after 3 seconds
                setTimeout(() => {
                    toast.classList.remove('opacity-100');
                    toast.classList.add('opacity-0');
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 300);
                }, 3000);
            }
        });
    </script>
@endsection
