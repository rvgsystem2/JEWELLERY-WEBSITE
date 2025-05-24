<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($rate) ? 'Edit Rate' : 'Create Rate' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">
                    {{ isset($rate) ? 'Edit Rate' : 'Create New Rate' }}
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

                <form action="{{ isset($rate) ? route('rate.update', $rate->id) : route('rate.store') }}"
                    method="POST" class="space-y-4">
                    @csrf
                   

                    <!-- Gold Rate -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Gold Rate (₹/gram)</label>
                        <input type="text" name="gold_rate"
                            value="{{ old('gold_rate', $rate->gold_rate ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-yellow-300"
                            placeholder="Enter gold rate" required>
                    </div>

                    <!-- Silver Rate -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Silver Rate (₹/gram)</label>
                        <input type="text" name="silver_rate"
                            value="{{ old('silver_rate', $rate->silver_rate ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300"
                            placeholder="Enter silver rate" required>
                    </div>

                    <!-- Diamond Rate -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Diamond Rate (₹/carat)</label>
                        <input type="text" name="diamond_rate"
                            value="{{ old('diamond_rate', $rate->diamond_rate ?? '') }}"
                            class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300"
                            placeholder="Enter diamond rate" required>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                            {{ isset($rate) ? 'Update' : 'Submit' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
