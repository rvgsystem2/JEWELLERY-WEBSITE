@extends('component.main')
@section('content')

<!-- Category Title -->
<div class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">
        Products in "{{ $category->name }}"
    </h2>
    <p class="text-center text-gray-500 mb-8">{{ $category->title }}</p>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @forelse ($products as $product)
            <div class="border rounded-lg overflow-hidden shadow hover:shadow-lg transition duration-300">
                <img src="{{ asset('storage/' . $product->image) }}"
                     class="w-full h-64 object-cover" alt="{{ $product->name }}">

                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                    <p class="text-sm text-gray-500 mt-1">{{ $product->sort_description }}</p>
                    <p class="text-amber-600 font-bold mt-2">₹{{ $product->price }}</p>

                    <a href="{{ route('product.details', $product->id) }}">
                        <button class="mt-4 w-full bg-amber-500 hover:bg-amber-600 text-white py-2 px-4 rounded-lg">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-4 text-center text-gray-500">No products found in this category.</p>
        @endforelse
    </div>
</div>

@endsection
