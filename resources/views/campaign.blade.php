<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NU Cilacap</title>
    @vite('resources/css/app.css')
    <style>
      .sidebar {
          transform: translateX(-100%);
          transition: transform 0.3s ease-in-out;
      }
      .sidebar-open {
          transform: translateX(0);
      }
      body {
    font-family: 'Inter', sans-serif;
  }
  nav {
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
  }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="flex flex-col h-screen bg-gray-100">
  <nav class="z-10 p-4 bg-white">
    <div class="container flex items-center justify-between mx-auto">
        <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-auto h-8">
        <div class="hidden space-x-4 sm:flex">
          <div class="relative flex items-center group">
            <a href="#" class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                Tentang
                <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
            </a>
            <div class="absolute hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44 z-4 ">
                <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 1</a>
                <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 2</a>
            </div>
        </div>
        
            <div class="relative group">
                <a href="#" class="block px-3 py-2 text-black rounded hover:text-green-500">Campaign</a>
            </div>

            <div class="relative group">
                <a href="#" class="block px-3 py-2 text-black rounded hover:text-green-500">Berita</a>
            </div>

            <div class="hidden space-x-4 sm:flex">
              <div class="relative flex items-center group">
                <a href="#" class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                    layanan
                    <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                </a>
                <div class="absolute hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44 ">
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 1</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 2</a>
                </div>
            </div>
            <div class="relative group">
              <a href="/login" class="block px-3 py-2 text-white bg-green-500 border rounded hover:border-green-500 hover:bg-white hover:text-green-500">Masuk</a>
          </div>
          <div class="relative group">
              <a href="/daftar" class="block px-3 py-2 text-green-500 border border-green-500 rounded hover:bg-green-500 hover:text-white">Daftar</a>
        </div>
        </div>
        <div class="flex items-center sm:hidden">
            <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
  </nav>

  <!-- Sidebar for mobile view -->
  <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg sidebar sm:hidden">
    <div class="flex justify-end p-4">
        <button id="close-btn" class="text-gray-600 hover:text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="p-4 space-y-4">
        <a href="#" class="block px-3 py-2 text-black rounded hover:bg-gray-100 hover:text-black">Home</a>
        <a href="#" class="block px-3 py-2 text-black rounded hover:bg-gray-100 hover:text-black">About</a>
        <a href="#" class="block px-3 py-2 text-black rounded hover:bg-gray-100 hover:text-black">Services</a>
        <a href="#" class="block px-3 py-2 text-black rounded hover:bg-gray-100 hover:text-black">Contact</a>
    </div>
  </div>

  <div class="flex items-center justify-center px-6 py-12 lg:px-8">
    <div class="p-8 mx-5 space-y-8 bg-white rounded-lg shadow-md" style="background-image: url('{{ asset('images/bg_campaign.png') }}'); background-repeat: no-repeat; background-position: bottom right; height: 1689px; width: 1449px;">
        <div class="flex items-center justify-between">
            <p class="text-3xl font-bold text-green-600">
                Wujudkan Perubahan Sekarang!
            </p>
            <div class="relative flex items-center mx-5 border rounded-lg group">
                <div class="pr-20">
                    <a href="#" class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                    Pilih Kategori
                </a>
                </div>
                    <div class="px-3 pl-20">
                        <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                    </div>
                <div class="absolute right-0 hidden mt-1 text-black bg-gray-100 border border-gray-300 rounded shadow-lg top-full group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 1</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Subitem 2</a>
                </div>
            </div>
        </div>
            <div class="flex items-start justify-center w-1/3 overflow-hidden bg-white shadow-md h-1/3 rounded-3xl">
                <img src="{{ asset('images/campaign_1.png') }}" alt="pict_campaign" class="w-full h-auto">
            </div>
    </div>
</div>
