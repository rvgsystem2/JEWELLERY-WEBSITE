<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RV Jewellers | Elegant Gold & Diamond Jewellery in India</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Explore a stunning range of gold, diamond, and bridal jewellery at RV Jewellers. Trusted craftsmanship and timeless designs to suit every occasion." />
  <meta name="keywords" content="RV Jewellers, Gold Jewellery, Diamond Jewellery, Bridal Jewellery, Indian Jewellery, Kanpur Jewellers, Buy Gold Online" />
  <meta name="author" content="RV Jewellers" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.rvjewellers.com/" />

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="RV Jewellers | Elegant Gold & Diamond Jewellery" />
  <meta property="og:description" content="Shop from a premium collection of gold, diamond, and bridal jewellery. Quality you can trust." />
  <meta property="og:image" content="https://www.rvjewellers.com/images/banner.jpg" />
  <meta property="og:url" content="https://www.rvjewellers.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="RV Jewellers | Elegant Gold & Diamond Jewellery" />
  <meta name="twitter:description" content="Discover exclusive gold and diamond jewellery collections. Trusted by thousands." />
  <meta name="twitter:image" content="https://www.rvjewellers.com/images/banner.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="{{asset('asset/img/rv.png')}}" href="/favicon.png" />

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Tailwind CSS & JS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>

<body class="bg-white text-gray-800">

    @include('component.header')

    @yield('content')

    @include('component.footer')
</body>
</html>
