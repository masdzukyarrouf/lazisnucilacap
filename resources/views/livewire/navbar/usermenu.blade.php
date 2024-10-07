<div>
    <div id="user-menu" class="fixed inset-y-0 right-0 z-30 hidden w-48 px-8 py-2 bg-white rounded-lg shadow-lg top-12">
        <div class="flex flex-col">
            <livewire:navbar.navlink wire:key={{ rand() }} title="Lazisnu Cilacap" :links="[
                ['href' => '/profil&jajaran', 'text' => 'Profil & Jajaran Pengurus'],
                ['href' => '/sejarah', 'text' => 'Sejarah'],
                ['href' => '/legalitas', 'text' => 'Legalitas'],
                ['href' => '/kebijakan', 'text' => 'Standar Layanan (MANTAP)'],
                ['href' => '#', 'text' => 'Laporan & Publikasi'],
                ['href' => '/mitra', 'text' => 'Mitra'],
            ]"
                isDropdown="true" />

                <livewire:navbar.navlink wire:key="{{ rand() }}" title="Pilar & Program" :links="$pilarLinks"
                isDropdown="true" />


            <livewire:navbar.navlink wire:key={{ rand() }} title="Layanan" :links="[
                ['href' => '/konfirmasi', 'text' => 'Konfirmasi Donasi'],
                ['href' => '/pengajuan', 'text' => 'Pengajuan Umum'],
                ['href' => '/pengajuan-mobiznu', 'text' => 'Layanan Mobisnu'],
                ['href' => '/pengajuan-gocap', 'text' => 'Gocap'],
            ]" isDropdown="true" />

            <livewire:navbar.navlink wire:key={{ rand() }} title="Ziwaf" :links="[
                ['href' => '/narasi/fitrah', 'text' => 'Zakat Fitrah'],
                ['href' => '/narasi/maal', 'text' => 'Zakat Maal'],
                ['href' => '/narasi/infaq', 'text' => 'Infaq'],
                ['href' => '/narasi/wakaf', 'text' => 'wakaf'],
                ['href' => '/narasi/fidyah', 'text' => 'Fidyah'],
                ['href' => '/narasi/qurban', 'text' => 'Qurban'],
            ]" isDropdown="true" />

            <livewire:navbar.navlink isDropdown="false" wire:key={{ rand() }} title="Campaign"
                url="/campaigns" />
            <livewire:navbar.navlink isDropdown="false" wire:key={{ rand() }} title="Berita" url="/berita" />

            @if (Auth::check())
                @if (Auth::user()->role == 'admin')
                    <a href="/admin"
                        class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                        Admin
                    </a>
                @elseif (Auth::user()->role == 'donatur')
                    <a href="/profile"
                        class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                        profil
                    </a>
                @endif
            @else
                <a href="/login"
                    class="z-30 px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                    Login
                </a>
                <a href="/daftar"
                    class="px-6 py-2 text-green-600 border border-green-600 rounded-xl hover:bg-green-600 hover:text-white">
                    Daftar
                </a>

            @endif

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed inset-0 right-0 z-30 w-2/4 transition-transform transform -translate-x-full bg-white md:sticky md:top-0 md:w-full md:translate-x-0 md:flex md:items-center md:justify-between md:bg-transparent md:shadow-none md:p-0">
        <!-- Main Content -->
        <div
            class="sticky top-0 right-0 flex flex-col items-center w-full px-8 py-4 space-y-4 bg-white md:flex-row md:justify-between md:space-y-0">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0">
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="ogo"
                    class="hidden w-auto h-8 md:block">
            </a>

            <!-- Navigation Links and Buttons -->
            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0 md:ml-auto">
                <livewire:navbar.navlink wire:key={{ rand() }} title="Lazisnu Cilacap" :links="[
                    ['href' => '/profil&jajaran', 'text' => 'Profil & Jajaran Pengurus'],
                    ['href' => '/sejarah', 'text' => 'Sejarah'],
                    ['href' => '/legalitas', 'text' => 'Legalitas'],
                    ['href' => '/kebijakan', 'text' => 'Standar Layanan (MANTAP)'],
                    ['href' => '#', 'text' => 'Laporan & Publikasi'],
                    ['href' => '/mitra', 'text' => 'Mitra'],
                ]"
                    isDropdown="true" />

                <livewire:navbar.navlink wire:key="{{ rand() }}" title="Pilar & Program" :links="$pilarLinks"
                    isDropdown="true" />
                {{-- ['href' => '/berdaya', 'text' => 'NU Care Berdaya (Ekonomi)'],
                     ['href' => '/cerdas', 'text' => 'NU Care Cerdas (Pendidikan)'],
                     ['href' => '/sehat', 'text' => 'NU Care Sehat (Kesehatan)'],
                     ['href' => '/damai', 'text' => 'NU Care Damai (Dakwah & Kemanusiaan)'],
                     ['href' => 'hijau', 'text' => 'NU Care Hijau (Lingkungan Hidup & Kebencanaan)'], --}}

                <livewire:navbar.navlink wire:key={{ rand() }} title="Layanan" :links="[
                    ['href' => '/konfirmasi', 'text' => 'Konfirmasi Donasi'],
                    ['href' => '/pengajuan', 'text' => 'Pengajuan Umum'],
                    ['href' => '/pengajuan-mobiznu', 'text' => 'Layanan Mobisnu'],
                    ['href' => '/pengajuan-gocap', 'text' => 'Gocap'],
                ]"
                    isDropdown="true" />

                <livewire:navbar.navlink wire:key={{ rand() }} title="Ziwaf" :links="[
                    ['href' => '/narasi/fitrah', 'text' => 'Zakat Fitrah'],
                    ['href' => '/narasi/maal', 'text' => 'Zakat Maal'],
                    ['href' => '/narasi/infaq', 'text' => 'Infaq'],
                    ['href' => '/narasi/wakaf', 'text' => 'wakaf'],
                    ['href' => '/narasi/fidyah', 'text' => 'Fidyah'],
                    ['href' => '/narasi/qurban', 'text' => 'Qurban'],
                ]"
                    isDropdown="true" />

                <livewire:navbar.navlink isDropdown="false" wire:key={{ rand() }} title="Campaign"
                    url="/campaigns" />
                <livewire:navbar.navlink isDropdown="false" wire:key={{ rand() }} title="Berita"
                    url="/berita" />

                @if (Auth::check())
                    @if (Auth::user()->role == 'admin')
                        <a href="/admin"
                            class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                            Admin
                        </a>
                        <div class="flex items-center">
                            <span class="font-semibold">
                                <?php $a = auth::user()->username;
                                echo $a; ?>
                            </span>
                        </div>
                    @elseif (Auth::user()->role == 'donatur')
                        <a href="/profile"
                            class="px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                            profil
                        </a>
                    @endif
                @else
                    <a href="/login"
                        class="z-30 px-6 py-2 text-white bg-green-600 border rounded-xl hover:border-green-600 hover:bg-white hover:text-green-600">
                        Login
                    </a>
                    <a href="/daftar"
                        class="px-6 py-2 text-green-600 border border-green-600 rounded-xl hover:bg-green-600 hover:text-white">Daftar</a>
                @endif

                <!-- Close Button -->
                <div class="absolute top-4 right-4">
                    <button id="close-btn" class="text-gray-500 hover:text-black md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
