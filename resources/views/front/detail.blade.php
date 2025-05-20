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
                        <a href="tel:+919876543210" class="flex items-center text-white hover:text-gray-50">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h2a1 1 0 011 1v3a1 1 0 01-1 1H6v2c0 4.418 3.582 8 8 8h2v-2a1 1 0 011-1h3a1 1 0 011 1v2a2 2 0 01-2 2h-2c-7.18 0-13-5.82-13-13V6a1 1 0 011-1z" />
                            </svg>
                         <span>
                            Call Now</span>
                          </a>

                    </button>
                    <button id="buyNow"
                        class="border border-amber-600 text-amber-600 hover:bg-amber-50 font-semibold py-3 px-6 rounded-xl shadow transition duration-300">
                        Buy Now
                    </button>
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
