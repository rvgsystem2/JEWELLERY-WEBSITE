@extends('component.main')
@section('content')
    <!-- Hero Section -->
    <section class="bg-yellow-50 py-20 px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-yellow-700 mb-4">About Jewellers</h1>
        <p class="text-gray-600 max-w-2xl mx-auto">Discover the story, mission, and people behind the sparkle.</p>
    </section>

    <!-- Our Story -->

    {{-- about -us --}}

    <div class="container mx-auto px-8 py-12 max-w-full rounded-lg">
        @forelse ($abouts as $about)
            <div class="flex flex-col md:flex-row items-center bg-white  overflow-hidden">
                <div class="md:w-1/2 rounded-lg">
                    <img src="{{ asset('storage/' . $about->image) }}" alt="Chain links representing connection"
                        class="w-full h-full object-cover rounded-xl">
                </div>
                <div class="md:w-1/2 p-8 md:p-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $about->title }}</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ $about->sub_title }}
                    </p>
                    <p class="text-gray-600 mb-6 text-lg">
                        {{ $about->description }}
                    </p>

                </div>

            </div>
        @empty
            <p class="text-gray-600 mb-6 text-lg">No about us information available.</p>
        @endforelse
    </div>


    <!-- Vision & Mission -->
    <section class="bg-yellow-50 py-16 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-yellow-700 mb-6">Our Vision & Mission</h2>
            <div class="grid md:grid-cols-2 gap-10 text-left">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Vision</h3>
                    <p class="text-gray-700">Our vision is to become a globally recognized jewelry brand known for
                        authenticity, innovation, and trust. We aspire to inspire elegance and empower self-expression
                        through ethically sourced, masterfully crafted pieces that last generations.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-semibold mb-2 text-yellow-700">Our Mission</h3>
                    <p class="text-gray-700">Our mission is to craft timeless jewelry that celebrates life's special
                        moments. We are committed to providing exquisite designs, exceptional quality, and personalized
                        service—making every customer feel valued, confident, and connected to the beauty they wear.

                        .</p>
                </div>
            </div>
        </div>
    </section>

    {{-- partner institution --}}

    <div
        class="max-w-sm mx-auto bg-amber-600 my-8 text-white rounded-md px-6 py-3 font-semibold uppercase tracking-wide shadow-md text-center">
        Partner Institution
    </div>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 px-2">
    {{-- card1 --}}
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6 text-gray-800 my-8">


        <div class="flex items-center space-x-4 mb-4">
            <img src="https://cdn.pixabay.com/photo/2019/06/17/17/57/stethoscope-4280497_1280.jpg" alt="Umarawati Clinic Logo"
                class="w-20 h-20 rounded-full object-cover border-2 border-amber-500" />
            <div>
                <h1 class="text-2xl font-bold text-amber-600">Umarawati Clinic</h1>

                <h1 class="text-gray-700 mt-1"><strong>Name:</strong> Dr. Manoj Kumar Verma</h1>
                <h2 class="text-gray-700 mt-1"><strong>Designation:</strong> Physician</h2>

            </div>
        </div>
        <p class="mb-2"><strong>Address:</strong> Baleshwar Mandir Road, Near Durga Temple, Ballia, Uttar Pradesh</p>
    </div>
    {{-- card2 --}}
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6 text-gray-800 my-8">


        <div class="flex items-center space-x-4 mb-4">
            <img src="https://cdn.pixabay.com/photo/2012/11/19/07/09/ring-66598_1280.jpg" alt="Umarawati Clinic Logo"
                class="w-20 h-20 rounded-full object-cover border-2 border-amber-500" />
            <div>
                <h1 class="text-2xl font-bold text-amber-600">R V jewellers</h1>
                <h1><strong>Name:</strong> RadheShayam ji Vidyashankar sarafa</h1>

                <h2 class="text-gray-700 mt-1"><strong>Designation:</strong></h2>
            </div>
        </div>
        <p class="mb-2"><strong>Address:</strong> Baleshwar Mandir Road, Near Durga Temple, Ballia, Uttar Pradesh</p>

    </div>


   </div>

    <!-- Our Team -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-yellow-700 text-center mb-12">Meet Our Team</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 text-center">
                <div>
                    <img src="{{asset('asset/img/founder.jpg')}}" alt="Founder"
                        class="mx-auto w-28 h-28 rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Mr.Ajay kumar verma</h4>
                    <p class="text-gray-500 text-sm">Founder & Director</p>
                </div>
                <div>
                    <img src="{{asset('asset/img/founder2.jpg')}}" alt="Designer"
                        class="mx-auto w-28 h-28 rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Mr.Amit kumar verma</h4>
                    <p class="text-gray-500 text-sm">Founder & Director</p>
                </div>
                <div>
                    <img src="data:image/jpeg;base64,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" alt="Marketing"
                        class="mx-auto w-28 h-28 rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Coming Soon..</h4>
                    <p class="text-gray-500 text-sm">Coming Soon.....</p>
                </div>
            </div>
        </div>
    </section>
@endsection
