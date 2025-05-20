<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ isset($aboutFeature) ? 'Edit Feature' : 'Create Feature' }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded shadow">
                @if ($errors->any())
                    <div class="mb-4 bg-red-100 text-red-800 p-4 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ isset($aboutFeature) ? route('about.features.update', $aboutFeature->id) : route('about.features.store') }}"
                      method="POST">
                    @csrf
                  

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" value="{{ old('title', $aboutFeature->title ?? '') }}"
                               class="w-full border px-4 py-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Subtitle</label>
                        <input type="text" name="subtitle" value="{{ old('subtitle', $aboutFeature->subtitle ?? '') }}"
                               class="w-full border px-4 py-2 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Icon Class (Font Awesome)</label>
                        <input type="text" name="icon" value="{{ old('icon', $aboutFeature->icon ?? '') }}"
                               class="w-full border px-4 py-2 rounded" placeholder="e.g., fas fa-star">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" class="w-full border px-4 py-2 rounded">
                            <option value="active" {{ (old('status', $aboutFeature->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ (old('status', $aboutFeature->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <button type="submit"
                            class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        {{ isset($aboutFeature) ? 'Update' : 'Create' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
