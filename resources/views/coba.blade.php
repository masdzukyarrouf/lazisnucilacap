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
<body class="flex flex-col h-screen">
  <nav class="bg-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-black text-lg font-semibold">Logo NU</div>
        <div class="hidden sm:flex space-x-4">
          <div class="relative group flex items-center">
            <a href="#" class="text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded inline-flex items-center">
                Tentang
                <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="ml-1 h-4 w-4">
            </a>
            <div class="absolute hidden group-hover:block bg-gray-100 text-black mt-44 rounded shadow-lg">
                <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 2</a>
            </div>
        </div>
        
            <div class="relative group">
                <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">Campaign</a>
            </div>

            <div class="relative group">
                <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">Berita</a>
                <div class="absolute hidden group-hover:block bg-gray-100 text-black mt-2 rounded shadow-lg">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 2</a>
                </div>
            </div>

            <div class="hidden sm:flex space-x-4">
              <div class="relative group flex items-center">
                <a href="#" class="text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded inline-flex items-center">
                    layanan
                    <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="ml-1 h-4 w-4">
                </a>
                <div class="absolute hidden group-hover:block bg-gray-100 text-black mt-44 rounded shadow-lg">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 1</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600 hover:text-black">Subitem 2</a>
                </div>
            </div>
        </div>
        <div class="sm:hidden flex items-center">
            <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
  </nav>

  <!-- Sidebar for mobile view -->
  <div id="sidebar" class="sidebar fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-50 sm:hidden">
    <div class="flex justify-end p-4">
        <button id="close-btn" class="text-gray-600 hover:text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="p-4 space-y-4">
        <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">Home</a>
        <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">About</a>
        <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">Services</a>
        <a href="#" class="block text-black hover:bg-gray-100 hover:text-black px-3 py-2 rounded">Contact</a>
    </div>
  </div>

  <div class="flex-grow flex items-center justify-center mt-1">
    <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
  </div>

  <div class=" flex items-center justify-evenly rounded-lg outline py-10 mx-20" style="margin-top: -120px">
    <div class="flex space-x-8">
      <!-- Individual item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penerima_manfaat.png') }}" alt="Image 1" class="w-32 h-32 object-cover mb-2">
        <p class="text-green-500 font-semibold mb-1">Green Text 1</p>
        <p class="text-gray-700">Regular Text 1</p>
      </div>
  
      <!-- Individual item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penerima_manfaat.png') }}" alt="Image 2" class="w-32 h-32 object-cover mb-2">
        <p class="text-green-500 font-semibold mb-1">Green Text 2</p>
        <p class="text-gray-700">Regular Text 2</p>
      </div>
  
      <!-- Individual item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penyaluran.png') }}" alt="Image 3" class="w-32 h-32 object-cover mb-2">
        <p class="text-green-500 font-semibold mb-1">Green Text 3</p>
        <p class="text-gray-700">Regular Text 3</p>
      </div>
  
      <!-- Individual item -->
      <div class="flex flex-col items-center">
        <img src="path-to-image4.jpg" alt="Image 4" class="w-32 h-32 object-cover mb-2">
        <p class="text-green-500 font-semibold mb-1">Green Text 4</p>
        <p class="text-gray-700">Regular Text 4</p>
      </div>
    </div>
  </div>
  
  

  <script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        document.getElementById('sidebar').classList.add('sidebar-open');
    });

    document.getElementById('close-btn').addEventListener('click', function() {
        document.getElementById('sidebar').classList.remove('sidebar-open');
    });
  </script>
</body>
</html>