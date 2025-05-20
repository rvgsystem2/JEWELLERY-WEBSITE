<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            Collections
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded shadow">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-700">All Collections</h3>
                <a href="{{ route('collection.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 shadow">
                    + Add New
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($collections as $collection)
                    <div class="bg-white rounded shadow p-4">
                        <h4 class="text-xl font-semibold text-gray-800">{{ $collection->title }}</h4>
                        <p class="text-sm text-gray-500 mb-2">Category: {{ $collection->category }} |
                            ₹{{ $collection->price }}</p>

                        <div class="flex gap-2 flex-wrap mb-3">
                            @foreach (explode(',', $collection->image ?? '') as $img)
                                @if (!empty($img) && file_exists(public_path('storage/' . $img)))
                                    <img src="{{ asset('storage/' . $img) }}"
                                        class="w-20 h-20 object-cover rounded shadow" alt="Collection Image">
                                @endif
                            @endforeach
                        </div>


                        <div class="flex gap-2">
                            <a href="{{ route('collection.edit', $collection->id) }}"
                                class="px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded">
                                Edit
                            </a>
                            <form action="{{ route('collection.delete', $collection->id) }}" method="get"
                                onsubmit="return confirm('Delete this item?');">
                                @csrf
                                <button type="submit"
                                    class="px-3 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">No collections available.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
