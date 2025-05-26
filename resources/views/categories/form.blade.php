<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            {{ isset($category) ? 'Edit Category' : 'Create Category' }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto">
        <div class="bg-white p-6 rounded shadow">
            @if ($errors->any())
                <div class="mb-4 text-red-700 bg-red-100 p-3 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}"
                           class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $category->title ?? '') }}"
                           class="w-full border px-4 py-2 rounded">
                </div>

              

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" class="w-full border px-4 py-2 rounded">
                    @if (isset($category) && $category->image)
                        <div class="mt-3">
                            <img src="{{ asset('storage/' . $category->image) }}" class="w-24 h-24 object-cover rounded">
                        </div>
                    @endif
                </div>
  <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" class="w-full border px-4 py-2 rounded">
                        <option value="active" {{ (old('status', $category->status ?? '') === 'active') ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ (old('status', $category->status ?? '') === 'inactive') ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                    {{ isset($category) ? 'Update' : 'Create' }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
