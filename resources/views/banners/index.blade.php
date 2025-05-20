<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center bg-white shadow-md px-6 py-4 rounded-lg">
            <h2 class="font-bold text-2xl text-gray-800">
                {{ __('Banner Management') }}
            </h2>
            <a href="{{ route('banner.create') }}" 
               class="px-5 py-2 bg-gradient-to-r from-[#c21108] to-[#000308] text-white font-semibold rounded-lg shadow-md hover:from-[#000308] hover:to-[#c21108] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#c21108] transition duration-300 ease-in-out">
                + Create Banner
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Success Message -->
            @if (session('success'))
                <div class="flex items-center bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-md">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
    
            <!-- Role Table -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Banner Management</h2>
                <p class="text-gray-600 mb-4">Manage your banners here. You can create, edit, or delete banners.</p>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gradient-to-r from-blue-50 to-blue-100 text-gray-700 uppercase font-semibold text-xs">
                            <tr>
                                <th class="px-6 py-4">ID</th>
                                <th class="px-6 py-4">Banner Title</th>
                                <th class="px-6 py-4">Image</th>
                                <th class="px-6 py-4">URL</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse ($bannerData as $banner)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-medium text-gray-800">{{ $banner->id }}</td>
                                    <td class="px-6 py-4 text-gray-700">{{ $banner->title }}</td>
                                    <td class="px-6 py-4 text-gray-600">
                                        @if($banner->image)
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" class="w-16 h-16 object-cover">
                                        @else
                                            <span class="text-gray-400 italic">No Image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        @if($banner->url)
                                            <a href="{{ $banner->url }}" target="_blank" class="text-blue-500 underline">{{ $banner->url }}</a>
                                        @else
                                            <span class="text-gray-400 italic">No URL</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                       
                                            {{ $banner->status }}
                                      
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex justify-center gap-3">
                                            <a href="{{ route('banner.edit', $banner->id) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                                ✏️ Edit
                                            </a>
                                            <a href="{{ route('banner.delete', $banner->id) }}"
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow">
                                                🗑️ Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-6 text-gray-400 text-base">
                                        No banners found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
