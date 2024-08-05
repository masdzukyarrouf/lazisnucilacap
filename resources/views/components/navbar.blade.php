<nav class="sticky top-0 z-10 p-4 bg-white shadow-md md:hidden">
    <div class="container mx-auto flex items-center justify-between px-8">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="Logo" class="w-auto h-8">
        </a>
        
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar" class="fixed inset-0 bg-white z-20 transform -translate-x-full transition-transform md:relative md:translate-x-0 md:flex md:items-center md:justify-between md:bg-transparent md:shadow-none md:p-0">
    <div class="w-full container mx-auto flex flex-col p-4 space-y-4 md:flex-row md:items-center md:space-y-0 md:space-x-2 md:px-2 md:justify-around">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0 mb-4 md:mb-0">
            <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="Logo" class="w-auto h-8">
        </a>

        <!-- Navigation Links -->
        <div class="flex flex-col space-y-4 md:flex-row md:space-x-2 md:space-y-0">
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
        </div>

        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
            <a href="/login" class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">Masuk</a>
            <a href="/daftar" class="px-6 py-2 text-green-600 border rounded-xl border-green-600 hover:bg-green-600 hover:text-white">Daftar</a>
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
