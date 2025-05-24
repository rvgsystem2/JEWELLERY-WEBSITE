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
                <h1 class="text-2xl font-bold text-amber-600">Firm Name</h1>
                <h1><strong></strong> RadheShayam ji Vidyashankar sarafa</h1>

                <h2 class="text-gray-700 mt-1"><strong>Deals:</strong> in diamond,gold,silver jewelleries and gems stone</h2>
            </div>
        </div>
        <p class="mb-2"><strong>Address:</strong> Ganesh Market,Ocdenganj Ballia</p>

    </div>


   </div>

    <!-- Our Team -->
    <section class="py-16 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-yellow-700 text-center mb-12">Meet Our Team</h2>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
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
                    <img src="{{asset('asset/img/founder3.jpg')}}" alt="Marketing"
                        class="mx-auto w-28 h-28 rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Mr.Santosh kumar verma</h4>
                    <p class="text-gray-500 text-sm">Founder & Director</p>
                </div>

                <div>
                    <img src="{{asset('asset/img/founder4.jpg')}}" alt="Marketing"
                        class="mx-auto w-28 h-28 rounded-full mb-4">
                    <h4 class="text-xl font-semibold">Dr.manoj kumar verma</h4>
                    <p class="text-gray-500 text-sm">Founder & Director</p>
                </div>
            </div>
        </div>
    </section>
@endsection
