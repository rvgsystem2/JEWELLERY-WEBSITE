@extends('component.main')
@section('content')

<!-- Hero Section with Gradient Overlay -->
<section class="relative bg-[url('https://images.unsplash.com/photo-1608139744243-70c4f8f9b3ff')] bg-cover bg-center text-white py-32 px-4">
  <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 to-amber-900/50"></div>
  <div class="max-w-4xl mx-auto text-center relative z-10">
    <h2 class="text-4xl md:text-6xl font-bold mb-6 font-serif">Timeless Jewellery Collections</h2>
    <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Discover exquisite handcrafted pieces that celebrate craftsmanship and elegance.</p>
    <a href="#collections" class="inline-block px-8 py-3 bg-amber-600 hover:bg-amber-700 rounded-full font-medium transition-all duration-300 transform hover:scale-105 shadow-lg">
      Explore Collections
    </a>
  </div>
</section>

<!-- Collections Section -->
<section id="collections" class="max-w-7xl mx-auto px-4 py-12">
  <!-- Section Header -->
  <div class="text-center mb-12">
    <h3 class="text-2xl md:text-3xl font-serif font-semibold text-gray-800 mb-3">Our Curated Collections</h3>
    <div class="w-20 h-1 bg-amber-500 mx-auto"></div>
  </div>

  <!-- Filters -->
  <div class="flex flex-wrap gap-3 justify-center mb-10">
    <button data-filter="all" class="px-5 py-2 bg-amber-600 text-white rounded-full text-sm font-medium shadow-md hover:bg-amber-700 transition-colors duration-300 filter-btn active">All Collections</button>
    <button data-filter="gold" class="px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium shadow-sm hover:bg-amber-50 hover:text-amber-700 transition-colors duration-300 filter-btn">Gold Masterpieces</button>
    <button data-filter="diamond" class="px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium shadow-sm hover:bg-amber-50 hover:text-amber-700 transition-colors duration-300 filter-btn">Diamond Elegance</button>
    <button data-filter="silver" class="px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium shadow-sm hover:bg-amber-50 hover:text-amber-700 transition-colors duration-300 filter-btn">Silver Treasures</button>
    <button data-filter="bridal" class="px-5 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium shadow-sm hover:bg-amber-50 hover:text-amber-700 transition-colors duration-300 filter-btn">Bridal Collection</button>
  </div>

  <!-- Product Grid -->
  <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="product-grid">
    <!-- Product Card 1 - Gold -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="gold">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Gold Necklace"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
        <span class="absolute top-3 right-3 bg-amber-600 text-white text-xs px-2 py-1 rounded-full">BESTSELLER</span>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Heritage Gold Necklace</h3>
          <span class="text-xs bg-amber-100 text-amber-800 px-2 py-1 rounded">22K</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">Handcrafted with intricate detailing</p>
        <div class="flex justify-between items-center">
            <div>
              <span class="text-amber-600 font-bold text-lg">₹1,25,000</span>
            </div>
            <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              View Details
            </button>
          </div>
      </div>
    </div>

    <!-- Product Card 2 - Diamond -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="diamond">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Diamond Earrings"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Princess Cut Diamonds</h3>
          <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">GIA Certified</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">0.5ct each, platinum setting</p>
        <div class="flex justify-between items-center">
          <div>
            <span class="text-amber-600 font-bold text-lg">₹1,25,000</span>
          </div>
          <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            View Details
          </button>
        </div>
      </div>
    </div>

    <!-- Product Card 3 - Gold -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="gold">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Gold Ring"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
        <span class="absolute top-3 right-3 bg-green-600 text-white text-xs px-2 py-1 rounded-full">NEW</span>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Classic Solitaire Ring</h3>
          <span class="text-xs bg-amber-100 text-amber-800 px-2 py-1 rounded">24K</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">Timeless design with comfort fit</p>
        <div class="flex justify-between items-center">
            <div>
              <span class="text-amber-600 font-bold text-lg">₹1,25,000</span>
            </div>
            <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
              View Details
            </button>
          </div>
      </div>
    </div>

    <!-- Product Card 4 - Silver -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="silver">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Silver Bracelet"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Artisan Silver Bracelet</h3>
          <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded">925 Sterling</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">Handmade with traditional motifs</p>
        <div class="flex justify-between items-center">
          <div>
            <span class="text-amber-600 font-bold text-lg">₹15,500</span>
          </div>
          <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            View Details
          </button>
        </div>
      </div>
    </div>

    <!-- Product Card 5 - Bridal -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="bridal">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Bridal Set"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
        <span class="absolute top-3 right-3 bg-pink-600 text-white text-xs px-2 py-1 rounded-full">BRIDAL</span>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Royal Bridal Set</h3>
          <span class="text-xs bg-amber-100 text-amber-800 px-2 py-1 rounded">22K Gold</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">Complete bridal jewellery collection</p>
        <div class="flex justify-between items-center">
          <div>
            <span class="text-amber-600 font-bold text-lg">₹2,45,000</span>
          </div>
          <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            View Details
          </button>
        </div>
      </div>
    </div>

    <!-- Product Card 6 - Diamond -->
    <div class="product-card bg-white rounded-lg overflow-hidden group shadow-md hover:shadow-xl transition-shadow duration-300" data-category="diamond">
      <div class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a" alt="Diamond Pendant"
             class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-110">
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/20 transition-colors duration-300"></div>
      </div>
      <div class="p-5">
        <div class="flex justify-between items-start mb-1">
          <h3 class="text-lg font-semibold text-gray-800">Diamond Solitaire Pendant</h3>
          <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">1.0ct</span>
        </div>
        <p class="text-sm text-gray-500 mb-3">18k white gold setting</p>
        <div class="flex justify-between items-center">
          <div>
            <span class="text-amber-600 font-bold text-lg">₹1,85,000</span>
          </div>
          <button class="view-details-btn text-sm text-white bg-amber-600 hover:bg-amber-700 px-4 py-2 rounded-full transition-colors duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            View Details
          </button>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- JavaScript for Interactive Elements -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active', 'bg-amber-600', 'text-white'));
        filterButtons.forEach(btn => btn.classList.add('bg-white', 'border', 'border-gray-200'));

        // Add active class to clicked button
        this.classList.add('active', 'bg-amber-600', 'text-white');
        this.classList.remove('bg-white', 'border', 'border-gray-200');

        const filterValue = this.getAttribute('data-filter');

        // Filter products
        productCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'block';
            // Add animation
            card.style.animation = 'fadeIn 0.5s ease-in-out';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    // View Details button functionality
    const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
    viewDetailsButtons.forEach(button => {
      button.addEventListener('click', function() {
        const productCard = this.closest('.product-card');
        const productName = productCard.querySelector('h3').textContent;
        const productPrice = productCard.querySelector('.text-amber-600').textContent;

        // Here you would typically redirect to a product detail page
        // For demo, we'll show an alert
        alert(`Viewing details for:\n${productName}\nPrice: ${productPrice}`);

        // In a real implementation, you might do:
        // window.location.href = `/products/${productId}`;
      });
    });

    // View All Collections button
    const viewAllButton = document.querySelector('.view-all-btn');
    if (viewAllButton) {
      viewAllButton.addEventListener('click', function() {
        // Reset filters
        filterButtons.forEach(btn => {
          btn.classList.remove('active', 'bg-amber-600', 'text-white');
          btn.classList.add('bg-white', 'border', 'border-gray-200');
        });
        document.querySelector('[data-filter="all"]').classList.add('active', 'bg-amber-600', 'text-white');

        // Show all products
        productCards.forEach(card => {
          card.style.display = 'block';
          card.style.animation = 'fadeIn 0.5s ease-in-out';
        });
      });
    }
  });
</script>

<!-- Add some simple animations -->
<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .product-card {
    animation: fadeIn 0.5s ease-in-out;
  }
</style>

@endsection
