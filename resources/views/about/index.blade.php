<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            Manage About Section
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 p-4 rounded-md bg-green-100 text-green-800 shadow">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">About Entries</h3>
                <a href="{{ route('about.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                    + Add About
                </a>
            </div>

            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="w-full table-auto">
                    <thead class="bg-gray-100 text-gray-700 text-sm uppercase">
                        <tr>
                            <th class="px-6 py-3 text-left">#</th>
                            <th class="px-6 py-3 text-left">Title</th>
                            <th class="px-6 py-3 text-left">Subtitle</th>
                            <th class="px-6 py-3 text-left">Description</th>
                            <th class="px-6 py-3 text-left">Image</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
                        @forelse($abouts as $index => $about)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 font-medium">{{ $about->title }}</td>
                                <td class="px-6 py-4">{{ $about->subtitle }}</td>
                                <td class="px-6 py-4">{{ Str::limit(strip_tags($about->description), 60) }}</td>
                                <td class="px-6 py-4">
                                    @if ($about->image)
                                        <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="h-12 w-12 rounded object-cover shadow">
                                    @else
                                        <span class="text-gray-400 italic">No image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 space-x-2">
                                    <a href="{{ route('about.edit', $about->id) }}"
                                       class="inline-block px-3 py-1 text-sm text-white bg-yellow-500 hover:bg-yellow-600 rounded shadow">
                                        Edit
                                    </a>
                                    <form action="{{ route('about.delete', $about->id) }}" method="get" class="inline-block"
                                          onsubmit="return confirm('Are you sure you want to delete this entry?');">
                                        @csrf
                                   
                                        <button type="submit"
                                                class="px-3 py-1 text-sm text-white bg-red-600 hover:bg-red-700 rounded shadow">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-gray-500 py-8">
                                    No About entries found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
