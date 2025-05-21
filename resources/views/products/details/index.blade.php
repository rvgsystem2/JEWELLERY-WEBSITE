<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center px-6 py-4 bg-white shadow rounded-lg">
            <h2 class="text-2xl font-bold text-gray-800">Product Details</h2>
            <a href="{{ route('product.details.create') }}"
               class="bg-gradient-to-r from-[#c21108] to-[#000308] text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:from-[#000308] hover:to-[#c21108] transition duration-300 ease-in-out">
                + Create 
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-6 px-4 py-3 rounded-lg shadow bg-green-100 text-green-800 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($product as $productDetails)
                    <div class="bg-white shadow-md rounded-xl overflow-hidden group relative">
                        <img src="{{ asset('storage/' . $productDetails->image) }}"
                             alt="Product Image"
                             class="object-cover w-full h-48">

                        <div class="p-4">
                            <h3 class="text-sm font-semibold text-gray-800 truncate">
                                {{ $productDetails->product->name ?? 'Unknown Product' }}
                            </h3>
                            <p class="text-xs text-gray-500 mt-1">
                                Product ID: {{ $productDetails->product->id ?? '-' }}
                            </p>
                        </div>

                        <form action="{{ route('product.details.delete', $productDetails->id) }}"
                              method="POST"
                              class="absolute top-2 right-2">
                            @csrf
                         
                            <button onclick="return confirm('Delete this image?')"
                                    class="bg-red-600 hover:bg-red-700 text-white text-xs px-2 py-1 rounded shadow">
                                ✕
                            </button>
                        </form>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 italic">No product images found.</div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
