@extends('component.main')
@section('content')
    <!--OUR COLLECTION Tabs Filter Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Jewellery Collection</h2>

            <!-- Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button class="tab-btn px-4 py-2 bg-amber-500 text-white rounded-full active-tab"
                    data-category="all">All</button>
                @foreach ($collections->unique('category') as $tab)
                    <button class="tab-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300"
                        data-category="{{ strtolower($tab->category) }}">
                        {{ ucfirst($tab->category) }}
                    </button>
                @endforeach
            </div>

            <!-- Grid of all images from collections -->
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="productGrid">
                @foreach ($collections as $collection)
                    @php
                        $images = array_values(array_filter(explode(',', $collection->image ?? '')));
                    @endphp

                    @foreach (array_slice($images, 1) as $img)
                        @if (!empty($img))
                            <div class="product-card" data-category="{{ strtolower($collection->category) }}">
                                <div
                                    class="bg-white rounded-xl shadow-md hover:shadow-lg overflow-hidden transition-all duration-300">
                                    <img src="{{ asset('storage/' . $img) }}" alt="{{ $collection->title }}"
                                        class="w-full h-56 object-cover">

                                    <div class="p-4">
                                        <h3 class="text-lg font-semibold text-gray-800 truncate">{{ $collection->title }}
                                        </h3>
                                        <p class="text-sm text-gray-500">₹ {{ $collection->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>


        </div>
    </section>
    
@endsection
