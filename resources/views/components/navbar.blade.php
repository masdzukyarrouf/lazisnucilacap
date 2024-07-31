<nav class="z-10 p-4 bg-white">
    <div class="container flex items-center justify-between px-20 mx-auto">
        <a href="/">
        <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-auto h-8">
        </a>
        <div class="hidden space-x-4 sm:flex">
            <div class="relative flex items-center group">
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                    Lazisnu Cilacap
                    <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                </a>
                <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44">
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Visi & Misi</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Profil & Jajaran Pengurus</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Sejarah</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Legalitas</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Standar Layanan (MANTAP)</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Laporan & Publikasi</a>
                    <a href="#" class="block px-4 py-2 hover:text-green-500">Mitra</a>
                </div>
            </div>
            <div class="relative flex items-center group">
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                        layanan
                        <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                    </a>
                    <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44">
                        <a href="#" class="block px-4 py-2 hover:text-green-500">NU Care Berdaya (Ekonomi)</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">NU Care Cerdas (Pendidikan)</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">NU Care Sehat (Kesehatan)</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">NU Care Damai (Dakwah & Kemanusiaan)</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">NU Care Hijau (Lingkungan Hidup & Kebencanaan)</a>
                    </div>
                </div>
                <div class="relative flex items-center group">
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                        layanan
                        <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                    </a>
                    <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44">
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Konfirmasi Donasi</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Pengajuan Umum</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Layanan Mobisnu</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Gocap</a>
                    </div>
                </div>
                <div class="relative flex items-center group">
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
                        layanan
                        <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                    </a>
                    <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-44">
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Zakat</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Wakaf</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Fidyah</a>
                        <a href="#" class="block px-4 py-2 hover:text-green-500">Qurban</a>
                    </div>
                </div>
            <div class="relative group">
                <a href="/campaign" class="block px-3 py-2 text-black rounded hover:text-green-500">Campaign</a>
            </div>

            <div class="relative group">
                <a href="/berita" class="block px-3 py-2 text-black rounded hover:text-green-500">Berita</a>
            </div>

            <div class="hidden space-x-4 sm:flex">
                <div class="relative group">
                    <a href="/login"
                        class="block px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">Masuk</a>
                </div>
                <div class="relative group">
                    <a href="/daftar"
                        class="block px-6 py-2 text-green-600 border rounded-xl border-green-6 00 hover:bg-green-600 hover:text-white">Daftar</a>
                </div>
            </div>
            <div class="flex items-center sm:hidden">
                <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
</nav>