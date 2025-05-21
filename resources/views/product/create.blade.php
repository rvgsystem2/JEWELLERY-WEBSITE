<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($product) ? 'Edit Product' : 'Create Product' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($product) ? 'Edit Product' : 'Create New Product' }}
                </h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}"
                    method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf


                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Product Name</label>
                        <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Enter product name" required>
                    </div>

                    <!-- Title -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Product Title</label>
                        <input type="text" name="title" value="{{ old('title', $product->title ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Enter product title">
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Price</label>
                        <input type="text" name="price" value="{{ old('price', $product->price ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="e.g., 999.99">
                    </div>

                    <!-- Short Description -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Short Description</label>
                        <input type="text" name="sort_description"
                            value="{{ old('sort_description', $product->sort_description ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="Brief summary of the product">
                    </div>

                    <!-- Full Description -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Description</label>
                        <textarea name="description" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200" rows="4"
                            placeholder="Detailed description...">{{ old('description', $product->description ?? '') }}</textarea>
                    </div>

                    <!-- Tags -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Tag</label>
                        <input type="text" name="tag" value="{{ old('tag', $product->tag ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200"
                            placeholder="e.g., trending, sale, new">
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Product Image</label>
                        <input type="file" name="image"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                        @if (isset($product) && $product->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image"
                                    class="w-40 rounded shadow">
                            </div>
                        @endif
                    </div>

                    <!-- Multiple Images Upload -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Additional Images</label>
                        <input type="file" name="images[]" multiple
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                        @if (isset($product) && $product->images)
                            <div class="flex flex-wrap gap-4 mt-2">
                                @foreach (explode(',', $product->images) as $img)
                                    <img src="{{ asset('storage/' . $img) }}"
                                        class="w-20 h-20 object-cover rounded shadow">
                                @endforeach
                            </div>
                        @endif
                    </div>


                    <!-- Status -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Status</label>
                        <select name="status"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-200">
                            <option value="active"
                                {{ old('status', $product->status ?? '') == 'active' ? 'selected' : '' }}>Active
                            </option>
                            <option value="inactive"
                                {{ old('status', $product->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="px-6 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 transition">
                            {{ isset($product) ? 'Update Product' : 'Create Product' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
