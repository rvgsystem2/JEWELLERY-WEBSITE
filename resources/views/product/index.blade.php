<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center px-6 py-4 bg-white shadow rounded-lg">
            <h2 class="text-2xl font-bold text-gray-800">Product Management</h2>
            <a href="{{ route('product.create') }}"
                class="bg-gradient-to-r from-[#c21108] to-[#000308] text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:from-[#000308] hover:to-[#c21108] transition duration-300 ease-in-out">
                + Create Product
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-6 px-4 py-3 rounded-lg shadow bg-green-100 text-green-800 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @forelse($products as $product)
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-all duration-300">
                        <div class="w-full h-48 bg-gray-100 flex justify-center items-center">
                            @if ($product->images)
                                @php
                                    $multipleImages = explode(',', $product->images);
                                @endphp

                                <div x-data="{ activeSlide: 0 }" class="relative w-full h-48 overflow-hidden bg-gray-100">
                                    <!-- Slides -->
                                    <template x-for="(img, index) in {{ Js::from($multipleImages) }}"
                                        :key="index">
                                        <div x-show="activeSlide === index"
                                            class="absolute inset-0 transition-all duration-500 ease-in-out">
                                            <img :src="'/storage/' + img" alt="Product Image"
                                                class="object-cover w-full h-full">
                                        </div>
                                    </template>

                                    <!-- Navigation Buttons -->
                                    <button type="button"
                                        @click="activeSlide = activeSlide > 0 ? activeSlide - 1 : {{ count($multipleImages) }} - 1"
                                        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-75 rounded-full p-1 shadow">
                                        &#8592;
                                    </button>
                                    <button type="button"
                                        @click="activeSlide = activeSlide < {{ count($multipleImages) }} - 1 ? activeSlide + 1 : 0"
                                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-75 rounded-full p-1 shadow">
                                        &#8594;
                                    </button>
                                </div>
                            @elseif($product->image)
                                <div class="w-full h-48 bg-gray-100">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                        class="object-cover w-full h-full">
                                </div>
                            @else
                                <div class="w-full h-48 bg-gray-100 flex justify-center items-center">
                                    <span class="text-gray-400 italic">No Image</span>
                                </div>
                            @endif

                        </div>
                        <div class="p-4 space-y-2">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                            <p class="text-sm text-gray-500 truncate">
                                {{ $product->sort_description ?? 'No short description' }}</p>
                            <p class="text-base font-semibold text-red-600">₹{{ $product->price }}  {{ $product->category->name }}</p>
                            <div class="flex items-center justify-between mt-2">
                                <span
                                    class="px-2 py-1 text-xs rounded-full {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($product->status) }}
                                </span>
                                <span class="text-xs text-gray-400">Tag: {{ $product->tag ?? '-' }}</span>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                <a href="{{ route('product.edit', $product->id) }}"
                                    class="text-sm text-blue-600 hover:text-blue-800 font-semibold">Edit</a>
                                <form action="{{ route('product.delete', $product->id) }}" method="get"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    {{-- @method('DELETE') --}}
                                    <button type="submit"
                                        class="text-sm text-red-600 hover:text-red-800 font-semibold">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 italic">No products found.</div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{-- {{ $products->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
