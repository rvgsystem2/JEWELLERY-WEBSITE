@extends('component.main')
@section('content')
<!-- Product Detail Section -->
<div class="max-w-7xl mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <!-- Image Gallery -->
        <div x-data="{ imageSrc: '{{ asset('storage/' . $product->image) }}' }" class="space-y-4">
            <!-- Main Image -->
            <div class="w-full overflow-hidden rounded-2xl shadow-lg">
                <img :src="imageSrc" alt="Product Image"
                     class="w-full h-auto object-cover aspect-square">
            </div>

            <!-- Thumbnails -->
            <div class="grid grid-cols-4 gap-4">
                <!-- Main image thumbnail -->
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}"
                         @click="imageSrc = '{{ asset('storage/' . $product->image) }}'"
                         class="rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                         alt="Main Image">
                @endif

                <!-- Additional images -->
                @php
                    $imageArray = $product->images ? explode(',', $product->images) : [];
                @endphp

                @foreach ($imageArray as $img)
                    <img src="{{ asset('storage/' . $img) }}"
                         @click="imageSrc = '{{ asset('storage/' . $img) }}'"
                         class="rounded-lg border hover:ring-2 ring-yellow-400 cursor-pointer aspect-square object-cover"
                         alt="Additional Image">
                @endforeach
            </div>
        </div>

        <!-- Product Info -->
        <div>
            <!-- Product Name -->
            <h1 class="text-3xl font-bold text-gray-800 mb-1">{{ $product->name }}</h1>

            <!-- Title -->
            <h2 class="text-xl text-gray-600 font-semibold mb-2">{{ $product->title }}</h2>

            <!-- Tag and Status -->
            <div class="text-sm text-gray-500 mb-3 space-x-2">
                <span class="bg-gray-100 px-2 py-1 rounded-full">Tag: {{ $product->tag ?? 'N/A' }}</span>
                <span class="px-2 py-1 rounded-full {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                    {{ ucfirst($product->status) }}
                </span>
            </div>

            <!-- Short Description -->
            <div class="mb-4">
                <p class="text-gray-700 italic">{{ $product->sort_description }}</p>
            </div>

            <!-- Price -->
            <div class="mb-4 flex flex-row gap-2">
                <h2 class="text-base text-gray-800 font-bold">Price started with</h2>
                <span class="text-2xl text-amber-600 font-semibold">₹{{ $product->price }}</span>
            </div>

            <!-- Full Description -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-900 mb-2">Description:</h3>
                <p class="text-gray-700">
                    {{ $product->description }}
                </p>
            </div>

            <!-- Call & Buy Now Buttons -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-start gap-4 mb-6">
                <!-- Call Now Button -->
                <a href="tel:+918707656944"
                   class="flex items-center justify-center w-full sm:w-auto bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-xl shadow transition duration-300">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 5a2 2 0 012-2h2a1 1 0 011 1v3a1 1 0 01-1 1H6v2c0 4.418 3.582 8 8 8h2v-2a1 1 0 011-1h3a1 1 0 011 1v2a2 2 0 01-2 2h-2c-7.18 0-13-5.82-13-13V6a1 1 0 011-1z"/>
                  </svg>
                  Call Now
                </a>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/918707656944" target="_blank" rel="noopener noreferrer"
                   class="w-full sm:w-auto">
                  <button id="buyNow"
                          class="w-full sm:w-auto border border-amber-600 text-amber-600 hover:bg-amber-50 font-semibold py-3 px-6 rounded-xl shadow transition duration-300">
                    Whatsapp
                  </button>
                </a>
              </div>

        </div>
    </div>
</div>


 <!-- Related Products -->
<div class="max-w-7xl mx-auto p-6 mt-16 border-t border-gray-200">
    <h2 class="text-2xl font-bold text-gray-900 mb-8">You may also like</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($relatedProducts as $related)
            <div class="group relative shadow-lg p-4 rounded-lg border border-gray-100">
                <div class="aspect-square w-full overflow-hidden rounded-lg bg-gray-200">
                    <img src="{{ asset('storage/' . $related->image) }}"
                         alt="{{ $related->name }}"
                         class="h-full w-full object-cover object-center group-hover:opacity-75 transition duration-300">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm text-gray-700 font-semibold">
                        <a href="{{ route('product.details', $related->id) }}">
                            {{ $related->title }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $related->tag ?? 'Jewellery' }}</p>
                    <p class="mt-1 text-lg font-medium text-gray-900">₹{{ $related->price }}</p>

                    <a href="{{ route('product.details', $related->id) }}">
                        <button
                            class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 mt-2 rounded-lg transition focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
