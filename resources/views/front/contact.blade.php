@extends('component.main')
@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-yellow-100 to-yellow-50 py-16 text-center">
        <h1 class="text-4xl font-bold text-yellow-800">Contact Us</h1>
        <p class="mt-2 text-lg text-gray-600">We'd love to hear from you</p>
    </section>

    <!-- Main Contact Section -->
    <!-- Contact Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-12 px-6 md:px-16 bg-gray-50">

        <!-- Contact Info -->
        <div class="space-y-8">
            <h2 class="text-3xl font-bold text-yellow-800">Get in Touch</h2>
            <p class="text-gray-600">
                Have questions about our jewellery collection, pricing, or customization? Reach out to us and we’ll get back
                to you soon.
            </p>

            <div class="space-y-6 text-gray-700">
                <div>
                    <h3 class="font-semibold text-lg">Phone</h3>
                    <p class="text-gray-600">8707656944</p>
                    <p class="text-gray-600">9389859821</p>
                </div>

                <div>
                    <h3 class="font-semibold text-lg">Email</h3>
                    <p class="text-gray-600">aajayballia86@gmail.com</p>
                </div>

                <div>
                    <h3 class="font-semibold text-lg">Address</h3>
                    <p class="text-gray-600">Chowk Vijay Cinema Road, Ballia
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-2xl shadow-lg">
            <form id="contactForm" method="POST" data-url="{{ route('contact.store') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" />
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="phone" id="phone" name="phone" required
                        class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" />
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-transparent focus:outline-none transition duration-200">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"></textarea>
                </div>

                <button id="submitBtn" type="submit"
                    class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 flex items-center justify-center"
                    disabled>
                    <svg id="loader" class="animate-spin hidden h-5 w-5 mr-2 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z">
                        </path>
                    </svg>
                    <span id="submitText">Send Message</span>
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const submitBtn = document.getElementById("submitBtn");
            const loader = document.getElementById("loader");
            const submitText = document.getElementById("submitText");

            submitBtn.disabled = false; // re-enable on page load

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                submitBtn.disabled = true;
                loader.classList.remove("hidden");
                submitText.textContent = "Sending...";

                const formData = new FormData(form);
                const submitUrl = form.getAttribute("data-url");

                fetch(submitUrl, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        },
                        body: formData
                    })
                    .then(async response => {
                        if (!response.ok) {
                            const err = await response.json();
                            throw new Error(Object.values(err.errors).flat().join('\n'));
                        }
                        return response.json();
                    })
                    .then(data => {
                        Swal.fire({
                            title: "Message Sent!",
                            text: data.message || "Thank you for contacting us.",
                            icon: "success",
                            confirmButtonColor: "#f59e0b"
                        });
                        form.reset();
                    })
                    .catch(error => {
                        Swal.fire({
                            title: "Error!",
                            text: error.message || "Something went wrong. Please try again.",
                            icon: "error",
                            confirmButtonColor: "#e11d48"
                        });
                    })
                    .finally(() => {
                        loader.classList.add("hidden");
                        submitText.textContent = "Send Message";
                        submitBtn.disabled = false;
                    });
            });
        });
    </script>

    <!-- Map Section -->
    <section class="py-12 px-4 sm:px-6  max-w-full mx-auto">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-yellow-800 mb-6 md:mb-8 text-center">Our Location</h2>

            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="aspect-w-full aspect-h-9 w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.4314375575996!2d84.1520871!3d25.7563094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992652120e73bc3%3A0x9ae8b9ceb2ba7298!2sR.V%20Jewellers!5e0!3m2!1sen!2sin!4v1747809762418!5m2!1sen!2sin"
                        class="w-full h-full min-h-[300px] md:min-h-[400px]" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        aria-label="Google Map showing location of R.V Jewellers" title="R.V Jewellers Location"></iframe>
                </div>

            </div>
        </div>
    </section>
@endsection
