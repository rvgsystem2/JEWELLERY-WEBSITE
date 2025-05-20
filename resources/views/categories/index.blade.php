<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-gray-800">
            Categories
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4">
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 rounded shadow-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold text-gray-700">All Categories</h3>
                <a href="{{ route('category.create') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg shadow">
                    + Add New Category
                </a>
            </div>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @forelse ($categories as $category)
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all duration-300 overflow-hidden">
                        @if ($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}"
                                 alt="{{ $category->name }}"
                                 class="w-full h-40 object-cover">
                        @else
                            <div class="w-full h-40 bg-gray-100 flex items-center justify-center text-gray-400">
                                No Image
                            </div>
                        @endif

                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-gray-800 mb-1 truncate">{{ $category->name }}</h4>
                            <p class="text-sm text-gray-500 mb-2">{{ $category->title }}</p>

                            <span class="inline-block px-2 py-1 text-xs font-semibold rounded-full
                                {{ $category->status === 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' }}">
                                {{ ucfirst($category->status) }}
                            </span>

                            <div class="mt-4 flex gap-2">
                                <a href="{{ route('category.edit', $category->id) }}"
                                   class="flex-1 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded">
                                    Edit
                                </a>
                                <form action="{{ route('category.delete', $category->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this category?');"
                                      class="flex-1">
                                    @csrf
                                   
                                    <button type="submit"
                                            class="w-full bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-3 py-1 rounded">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center text-gray-500 py-10">
                        No categories found.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
