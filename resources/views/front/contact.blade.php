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
        Have questions about our jewellery collection, pricing, or customization? Reach out to us and we’ll get back to you soon.
      </p>

      <div class="space-y-6 text-gray-700">
        <div>
          <h3 class="font-semibold text-lg">Phone</h3>
          <p class="text-gray-600">8707656944

            , 9389859821
        </div>

        <div>
          <h3 class="font-semibold text-lg">Email</h3>
          <p class="text-gray-600">info@royaljewels.com</p>
        </div>

        <div>
          <h3 class="font-semibold text-lg">Address</h3>
          <p class="text-gray-600">Vijay Cinema Rd, Japlin Ganj, Bahadurpur, Ballia, Uttar Pradesh 277001
        </p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white p-8 rounded-2xl shadow-lg">
      <form action="#" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
          <input type="text" id="name" name="name" required
            class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" required
            class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500" />
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
          <textarea id="message" name="message" rows="4" required
            class="mt-1 p-2 block w-full rounded-xl border border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-yellow-600 hover:bg-yellow-700 text-white py-3 px-6 rounded-xl font-semibold transition duration-300">
          Send Message
        </button>
      </form>
    </div>
  </div>


  <!-- Map Section -->
  <section class="py-12 px-4 sm:px-6  max-w-full mx-auto">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold text-yellow-800 mb-6 md:mb-8 text-center">Our Location</h2>

      <div class="bg-white rounded-xl shadow-xl overflow-hidden">
        <div class="aspect-w-full aspect-h-9 w-full">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.4314375575996!2d84.1520871!3d25.7563094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992652120e73bc3%3A0x9ae8b9ceb2ba7298!2sR.V%20Jewellers!5e0!3m2!1sen!2sin!4v1747809762418!5m2!1sen!2sin"
            class="w-full h-full min-h-[300px] md:min-h-[400px]"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            aria-label="Google Map showing location of R.V Jewellers"
            title="R.V Jewellers Location"
          ></iframe>
        </div>

      </div>
    </div>
  </section>

@endsection

