@extends('component.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Diamond Ring - Real Victory Jewellery</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Breadcrumb -->
  <div class="bg-gray-50 py-4 px-4 sm:px-10 text-sm">
    <nav class="text-gray-600">
      <a href="#" class="hover:text-black">Home</a> /
      <a href="#" class="hover:text-black">Jewellery</a> /
      <span class="text-black font-medium">Diamond Ring</span>
    </nav>
  </div>

  <!-- Product Section -->
  <section class="max-w-7xl mx-auto p-4 sm:p-10">
    <div class="flex flex-col lg:flex-row gap-10">

      <!-- Product Images -->
      <div class="flex-1">
        <div class="bg-gray-100 rounded-xl overflow-hidden">
          <img src="https://images.unsplash.com/photo-1611765083444-0c4f76c35f50" alt="Diamond Ring" class="w-full object-cover rounded-xl">
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
          <img src="https://images.unsplash.com/photo-1581090700227-4c3a976e8b06" class="w-full h-20 object-cover rounded-md border hover:ring-2 hover:ring-black cursor-pointer" />
          <img src="https://images.unsplash.com/photo-1579273164585-b67a5b68bacc" class="w-full h-20 object-cover rounded-md border hover:ring-2 hover:ring-black cursor-pointer" />
          <img src="https://images.unsplash.com/photo-1581090700334-68bb2fcb49f8" class="w-full h-20 object-cover rounded-md border hover:ring-2 hover:ring-black cursor-pointer" />
          <img src="https://images.unsplash.com/photo-1579273164885-6b2c21a4cf4f" class="w-full h-20 object-cover rounded-md border hover:ring-2 hover:ring-black cursor-pointer" />
        </div>
      </div>

      <!-- Product Info -->
      <div class="flex-1 space-y-6">
        <h1 class="text-3xl sm:text-4xl font-bold">18K Gold Diamond Ring</h1>
        <p class="text-xl text-yellow-600 font-semibold">₹89,999 <span class="text-gray-500 line-through ml-2">₹1,19,999</span></p>
        <p class="text-gray-600">This 18K gold ring features premium quality VVS diamonds set with exquisite craftsmanship. Perfect for weddings, engagements, or anniversaries.</p>

        <ul class="text-sm text-gray-700 space-y-2 pt-4">
          <li>✔ Certified Diamonds</li>
          <li>✔ BIS Hallmarked Gold</li>
          <li>✔ Free Resizing & Delivery</li>
        </ul>

        <div class="flex gap-4 pt-6">
          <button class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl font-semibold transition">Add to Cart</button>
          <button class="px-6 py-3 bg-black text-white hover:bg-gray-800 rounded-xl font-semibold transition">Buy Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Products -->
  <section class="max-w-7xl mx-auto p-4 sm:p-10 mt-10">
    <h2 class="text-2xl font-bold mb-6">Related Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://images.unsplash.com/photo-1600712191982-fc3a73d87a5f" alt="Gold Necklace" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold">Gold Necklace</h3>
          <p class="text-yellow-600 font-medium">₹74,500</p>
        </div>
      </div>
      <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://images.unsplash.com/photo-1602080758365-943e3086dbbb" alt="Diamond Earrings" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold">Diamond Earrings</h3>
          <p class="text-yellow-600 font-medium">₹58,000</p>
        </div>
      </div>
      <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://images.unsplash.com/photo-1602080881665-3ba5fc244dbf" alt="Platinum Ring" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold">Platinum Ring</h3>
          <p class="text-yellow-600 font-medium">₹1,25,000</p>
        </div>
      </div>
      <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
        <img src="https://images.unsplash.com/photo-1602080758012-5f5b1476f14b" alt="Pearl Bracelet" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold">Pearl Bracelet</h3>
          <p class="text-yellow-600 font-medium">₹22,999</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-20 bg-gray-100 py-8 text-center text-sm text-gray-600">
    &copy; 2025 Real Victory Jewellery. All rights reserved.
  </footer>

</body>
</html>

@endsection
