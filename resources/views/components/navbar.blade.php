<nav class="sticky top-0 z-10 p-4 bg-white shadow-2xl md:hidden">
    <div class="container flex items-center justify-between px-4 mx-auto">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="Logo" class="w-auto h-8">
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar"
    class="fixed inset-0 z-20 transition-transform transform -translate-x-full bg-white md:sticky md:top-0 md:w-full md:translate-x-0 md:flex md:items-center md:justify-between md:bg-transparent md:shadow-none md:p-0">
    <!-- Main Content -->
    <div
        class="sticky top-0 flex flex-col items-center w-full px-8 py-4 space-y-4 bg-white md:flex-row md:justify-between md:space-y-0">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="Logo" class="w-auto h-8">
        </a>

        <!-- Navigation Links and Buttons -->
        <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0 md:ml-auto">
            <x-navlink title="Lazisnu Cilacap" :links="[
                ['href' => '#', 'text' => 'Visi & Misi'],
                ['href' => '#', 'text' => 'Profil & Jajaran Pengurus'],
                ['href' => '#', 'text' => 'Sejarah'],
                ['href' => '#', 'text' => 'Legalitas'],
                ['href' => '#', 'text' => 'Standar Layanan (MANTAP)'],
                ['href' => '#', 'text' => 'Laporan & Publikasi'],
                ['href' => '#', 'text' => 'Mitra'],
            ]" isDropdown="true" />

            <x-navlink title="Pilar & Program" :links="[
                ['href' => '#', 'text' => 'NU Care Berdaya (Ekonomi)'],
                ['href' => '#', 'text' => 'NU Care Cerdas (Pendidikan)'],
                ['href' => '#', 'text' => 'NU Care Sehat (Kesehatan)'],
                ['href' => '#', 'text' => 'NU Care Damai (Dakwah & Kemanusiaan)'],
                ['href' => '#', 'text' => 'NU Care Hijau (Lingkungan Hidup & Kebencanaan)'],
            ]" isDropdown="true" />

            <x-navlink title="Layanan" :links="[
                ['href' => '#', 'text' => 'Konfirmasi Donasi'],
                ['href' => '#', 'text' => 'Pengajuan Umum'],
                ['href' => '#', 'text' => 'Layanan Mobisnu'],
                ['href' => '#', 'text' => 'Gocap'],
            ]" isDropdown="true" />

            <x-navlink title="Ziswaf" url="/zakat"/>

            <x-navlink title="Campaign" url="/campaigns" />
            <x-navlink title="Berita" url="/berita" />

            @if (Auth::check() && Auth::user()->role == 'admin')
                <a href="/admin"
                    class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">Admin</a>
            @else
                <a href="/login"
                    class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">Masuk</a>
            @endif
            <a href="/daftar"
                class="px-6 py-2 text-green-600 border border-green-600 rounded-xl hover:bg-green-600 hover:text-white">Daftar</a>

            <!-- Close Button -->
            <div class="absolute top-4 right-4">
                <button id="close-btn" class="text-gray-500 hover:text-black md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    });

    document.getElementById('close-btn').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.add('-translate-x-full');
    });
</script>
