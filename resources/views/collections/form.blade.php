<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ isset($collection) ? 'Edit Collection' : 'Create Collection' }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            @if ($errors->any())
                <div class="mb-4 bg-red-100 text-red-800 p-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($collection) ? route('collection.update', $collection->id) : route('collection.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $collection->title ?? '') }}"
                        class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Category</label>
                    <input type="text" name="category" value="{{ old('category', $collection->category ?? '') }}"
                        class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Price</label>
                    <input type="text" name="price" value="{{ old('price', $collection->price ?? '') }}"
                        class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-gray-700">Upload Images</label>
                    <input type="file" name="images[]" multiple class="w-full border px-4 py-2 rounded">
                    @if (isset($collection) && $collection->image)
                        <div class="flex gap-2 mt-3">
                            @foreach (explode(',', $collection->image) as $img)
                                <img src="{{ asset('storage/' . $img) }}" class="w-20 h-20 object-cover rounded shadow">
                            @endforeach
                        </div>
                    @endif
                </div>

                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    {{ isset($collection) ? 'Update' : 'Create' }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
