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
    <x-navbar></x-navbar>
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
        <div class="grid grid-cols-1 gap-6 pt-1 pl-14 sm:grid-cols-2 lg:grid-cols-3">
            <x-campaign-card></x-campaign-card>
            <div>
                <x-campaign-card></x-campaign-card>
            </div>
            <div>
                <x-campaign-card></x-campaign-card>
            </div>
    </div>
</div>
