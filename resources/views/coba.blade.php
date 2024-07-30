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

  <div class="relative flex items-center justify-center flex-grow mt-1">
    <!-- Arrow  left -->
    <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Left" class="absolute left-0 object-cover w-8 h-8">
  
    <div class="relative z-0 bg-white">
      <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
    </div>
  
    <!-- Arrow  right -->
    <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Right" class="absolute right-0 object-cover w-8 h-8 transform -scale-x-100">
  </div>
  

  <div class="relative z-10">
    <div class="absolute top-0 left-0 right-0 flex items-center justify-around py-10 mx-20 bg-white shadow-lg rounded-3xl" style="margin-top: -120px">
      <!-- Item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penerima_manfaat.png') }}" alt="Image 1" class="object-cover w-24 h-24 mb-2">
        <p class="mb-1 font-semibold text-green-500">5000</p>
        <p class="text-gray-700">Penerima Manfaat</p>
      </div>
  
      <!-- Item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penghimpunan.png') }}" alt="Image 2" class="object-cover w-24 h-24 mb-2">
        <p class="mb-1 font-semibold text-green-500">Rp 2.000.000.000.000</p>
        <p class="text-gray-700">Penghimpunan</p>
      </div>
  
      <!-- Item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/penyaluran.png') }}" alt="Image 3" class="object-cover w-24 h-24 mb-2">
        <p class="mb-1 font-semibold text-green-500">Rp 2.000.000.000.000</p>
        <p class="text-gray-700">Penyaluran</p>
      </div>
  
      <!-- Item -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/donatur.png') }}" alt="Image 4" class="object-cover w-24 h-24 mb-2">
        <p class="mb-1 font-semibold text-green-500">5000</p>
        <p class="text-gray-700">Donatur</p>
      </div>
    </div>
  </div>
  

    {{-- tentang --}}
    <div class="flex flex-col items-center py-10 bg-white mt-36">
      <!-- Title -->
      <div class="mb-8">
        <h2 class="text-xl font-semibold text-black">Tentang</h2>
        <div class="relative px-8 pt-4 mt-2">
          <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white"></div>
        </div>
      </div>
      
      <!-- Container for items -->
      <div class="flex items-start justify-between w-full max-w-4xl mx-20 space-x-20">
        <!-- Item 1 -->
          <div class="flex flex-col items-center flex-1">
            <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="object-cover mb-4 w-128 h-128">
          </div>

        <!-- Item 2 -->
        <div class="flex flex-col items-start flex-1 text-justify">
          <p class="mb-4 text-xl font-extrabold text-black">Sekilas NU Care-LAZISNU Cilacap</p>
          <p class="mb-4 text-sm text-gray-700">
            NU Care-LAZISNU adalah rebranding dan/atau sebagai pintu masuk agar masyarakat global mengenal Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU) sebagai lembaga filantropi NU. NU Care-LAZISNU berdiri pada tahun 2004 sebagai sarana untuk membantu masyarakat, sesuai amanat muktamar NU yang ke-31 di Asrama Haji Donohudan, Boyolali, Jawa Tengah. LAZISNU secara yuridis-formal dikukuhkan oleh SK Menteri Agama RI No. 65/2005 untuk melakukan penghimpunan Zakat, Infak, dan Sedekah (ZIS) kepada masyarakat luas.
            <br><br>
            NU Care-LAZISNU merupakan lembaga nirlaba milik perkumpulan Nahdlatul Ulama (NU) yang bertujuan untuk berkhidmat dalam rangka membantu kesejahteraan dan kemandirian umat; mengangkat harkat sosial dengan mendayagunakan dana Zakat, Infak, Sedekah (ZIS) dan dana sosial-keagamaan lainnya (DSKL).
          </p>
          <button class="px-4 py-2 text-white bg-green-500 rounded-lg ">Baca Selengkap</button>
        </div>
    </div>

    {{-- zakat --}}
    <div class="flex flex-col items-center w-full py-10 mt-4 bg-white bg-center bg-cover shadow-sm" style="background-image: url('{{ asset('images/zakat_bg.png') }}');">
      <!-- Title -->
      <div class="mb-8">
        <h2 class="text-3xl font-bold text-green-500">Apakah Anda masih bingung dengan cara berzakat?</h2>
      </div>
      
      <!-- Container for items -->
      <div class="relative flex items-start justify-around w-full max-w-4xl mx-20 space-x-20" style="margin-top: -20px;">
        
        <!-- Overlay container for content -->
        <div class="flex items-start justify-center w-full mx-14">
          <!-- Item 1 -->
          <div class="items-center p-4 rounded-lg ">
             <a href="" class="px-4 py-2 text-white bg-green-500 rounded-lg"> Konsultasi Zakat</a>
          </div>

          <!-- Item 2 -->
          <div class="items-center p-4 rounded-lg ">
          <a href="" class="px-4 py-2 text-white bg-green-500 rounded-lg"> Kalkulator Zakat</a>
        </div>

          <!-- Item 3 -->
          <div class="items-center p-4 rounded-lg ">
         <a href="" class="px-4 py-2 text-white bg-green-500 rounded-lg"> Konfirmasi Zakat</a>
        </div>
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