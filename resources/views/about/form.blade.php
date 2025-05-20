<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($about) ? 'Edit About Section' : 'Create About Section' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow-md">
                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ isset($about) ? route('about.update', $about->id) : route('about.store') }}" enctype="multipart/form-data">
                    @csrf
                   

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $about->title ?? '') }}" class="w-full border px-4 py-2 rounded">
                    </div>

                    <!-- Subtitle -->
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700">Subtitle</label>
                        <input type="text" name="subtitle" value="{{ old('subtitle', $about->subtitle ?? '') }}" class="w-full border px-4 py-2 rounded">
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700">Description</label>
                        <textarea name="description" rows="5" class="w-full border px-4 py-2 rounded">{{ old('description', $about->description ?? '') }}</textarea>
                    </div>

                    <!-- Image -->
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700">Image</label>
                        <input type="file" name="image" class="w-full border px-4 py-2 rounded">
                        @if (isset($about) && $about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="w-32 mt-2 rounded shadow">
                        @endif
                    </div>

                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        {{ isset($about) ? 'Update' : 'Create' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
