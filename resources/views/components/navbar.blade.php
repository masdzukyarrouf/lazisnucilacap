<nav class="sticky top-0 z-10 p-4 bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between px-8">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="Logo" class="w-auto h-8">
        </a>
        
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4 items-center">
            <x-nav-link title="Lazisnu Cilacap"  :links="[
                ['href' => '#', 'text' => 'Visi & Misi'],
                ['href' => '#', 'text' => 'Profil & Jajaran Pengurus'],
                ['href' => '#', 'text' => 'Sejarah'],
                ['href' => '#', 'text' => 'Legalitas'],
                ['href' => '#', 'text' => 'Standar Layanan (MANTAP)'],
                ['href' => '#', 'text' => 'Laporan & Publikasi'],
                ['href' => '#', 'text' => 'Mitra'],
            ]" isDropdown="true" />

            <x-nav-link title="Pilar & Program"  :links="[
                ['href' => '#', 'text' => 'NU Care Berdaya (Ekonomi)'],
                ['href' => '#', 'text' => 'NU Care Cerdas (Pendidikan)'],
                ['href' => '#', 'text' => 'NU Care Sehat (Kesehatan)'],
                ['href' => '#', 'text' => 'NU Care Damai (Dakwah & Kemanusiaan)'],
                ['href' => '#', 'text' => 'NU Care Hijau (Lingkungan Hidup & Kebencanaan)'],
            ]" isDropdown="true" />

            <x-nav-link title="Layanan"  :links="[
                ['href' => '#', 'text' => 'Konfirmasi Donasi'],
                ['href' => '#', 'text' => 'Pengajuan Umum'],
                ['href' => '#', 'text' => 'Layanan Mobisnu'],
                ['href' => '#', 'text' => 'Gocap'],
            ]" isDropdown="true" />

            <x-nav-link title="Ziswaf"  :links="[
                ['href' => '#', 'text' => 'Zakat'],
                ['href' => '#', 'text' => 'Wakaf'],
                ['href' => '#', 'text' => 'Fidyah'],
                ['href' => '#', 'text' => 'Qurban'],
            ]" isDropdown="true" />

            <x-nav-link title="Campaign" url="/campaign" />
            <x-nav-link title="Berita" url="/berita" />

            <div class="flex space-x-4">
                <a href="/login" class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">Masuk</a>
                <a href="/daftar" class="px-6 py-2 text-green-600 border rounded-xl border-green-600 hover:bg-green-600 hover:text-white">Daftar</a>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>

