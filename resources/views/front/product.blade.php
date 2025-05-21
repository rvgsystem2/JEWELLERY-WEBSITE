@extends('component.main')
@section('content')

<!-- Section Heading -->
<div class="container mx-auto md:px-12 py-10 px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">✨ Featured Jewelry Collection ✨</h2>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @forelse ($products as $product)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 flex flex-col overflow-hidden border border-gray-100">
                
                <!-- Product Image -->
                <div class="relative group h-56 overflow-hidden bg-gray-50">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                         class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    
                    <!-- Tag Badge -->
                    @if($product->tag)
                        <span class="absolute top-3 right-3 bg-amber-600 text-white text-xs px-3 py-1 rounded-full shadow">
                            {{ ucfirst($product->tag) }}
                        </span>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-gray-800 mb-1 line-clamp-1">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-500 mb-3 line-clamp-2">{{ $product->sort_description }}</p>

                    <!-- Price & Button -->
                    <div class="flex justify-between items-center mt-auto">
                        <span class="text-lg font-bold text-amber-600">₹{{ $product->price }}</span>
                        <a href="{{ route('product.details', $product->id) }}">
                            <button
                                class="bg-amber-500 hover:bg-amber-600 text-white text-sm px-4 py-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                                View Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">No products found.</div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="text-center mt-12">
        {{ $products->links() }}
    </div>
</div>

@endsection
