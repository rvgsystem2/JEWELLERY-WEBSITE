<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-gray-800">
            Rate 
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
                <h3 class="text-xl font-semibold text-gray-700">All Rate </h3>
                <a href="{{ route('rate.create') }}"
                   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg shadow">
                    + Add New Rate
                </a>
            </div>

           <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @forelse ($rates as $rate)
        <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-100">
            <div class="p-5">
                <div class="mb-3 text-sm text-gray-400">
                    📅 {{ \Carbon\Carbon::parse($rate->created_at)->format('d M, Y') }}
                </div>

                <h4 class="text-xl font-bold text-yellow-700 mb-1">{{ $rate->name }}</h4>
          
                <p class="text-base text-gray-700 mb-4">Price : ₹{{ $rate->gold_rate }}</p>

                <div class="flex justify-between gap-2">
                    <a href="{{ route('rate.edit', $rate->id) }}"
                        class="flex-1 text-center bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-1.5 rounded-lg">
                        ✏️ Edit
                    </a>
                    <form action="{{ route('rate.delete', $rate->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this rate?');"
                          class="flex-1">
                        @csrf
                        <button type="submit"
                                class="w-full bg-red-500 hover:bg-red-600 text-white text-sm font-medium py-1.5 rounded-lg">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-4 text-center text-gray-500 py-10">
            No rates found.
        </div>
    @endforelse
</div>

        </div>
    </div>
</x-app-layout>
