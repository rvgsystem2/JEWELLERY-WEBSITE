<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            About Features
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
                <h3 class="text-lg font-semibold text-gray-700">List of Features</h3>
                <a href="{{ route('about.features.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                    + Add Feature
                </a>
            </div>

            <div class="bg-white shadow rounded-lg overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700 uppercase">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Icon</th>
                            <th class="px-6 py-3">Title</th>
                            <th class="px-6 py-3">Subtitle</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @forelse ($features as $index => $feature)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4"><i class="{{ $feature->icon }}"></i></td>
                                <td class="px-6 py-4 font-semibold">{{ $feature->title }}</td>
                                <td class="px-6 py-4">{{ $feature->subtitle }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 rounded text-xs font-medium 
                                        {{ $feature->status == 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                        {{ ucfirst($feature->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 space-x-2">
                                    <a href="{{ route('about.features.edit', $feature->id) }}"
                                       class="px-3 py-1 text-white bg-yellow-500 hover:bg-yellow-600 rounded shadow text-xs">
                                        Edit
                                    </a>
                                    <form action="{{ route('about.features.delete', $feature->id) }}" method="get" class="inline"
                                          onsubmit="return confirm('Delete this feature?')">
                                        @csrf
                                        <button type="submit"
                                                class="px-3 py-1 text-white bg-red-600 hover:bg-red-700 rounded shadow text-xs">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-8 text-gray-500">No features added yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
