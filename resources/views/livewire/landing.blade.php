<div >
    <x-navbar></x-navbar>
        <div class="relative flex items-center justify-center mt-1">
            <div class="relative z-0 w-full bg-white">
                <div x-data="{ 
                    offset: 0, 
                    logoWidth: 100, // Lebar setiap logo dalam %
                    visibleLogos: 1, // Menampilkan 5 logo sekaligus
                    logoCount: {{ $landings->count() }},
                    slideWidth: 100, // Menggeser sesuai dengan lebar satu logo
                    slideInterval: 3000, // Waktu dalam milidetik untuk setiap slide
                    interval: null 
                }"
                x-init="
                    interval = setInterval(() => {
                        if (offset < (logoCount - visibleLogos) * slideWidth) {
                            offset += slideWidth;
                        } else {
                            offset = 0; // Mulai dari awal lagi
                        }
                    }, slideInterval);
                "
                class="relative w-full overflow-hidden">
                    <!-- Carousel Container -->
                    <div class="flex w-full transition-transform duration-500" :style="'transform: translateX(-' + offset + '%)'">
                        @foreach ($landings as $landing)
                        <img src="{{ asset('storage/' . $landing->gambar) }}" alt="Picture" class="min-w-full"/>
                        @endforeach
                    </div> 
                </div>
            </div>
        </div>

        <div class="relative flex flex-wrap items-center justify-center w-full mt-12 z-12">
            <div
                class="relative flex flex-wrap items-center justify-center h-auto -mt-24 space-x-2 md:mx-20 md:-mt-32 md:space-x-4 lg:space-x-8 rounded-3xl">
                <!-- Wrapper for Left Ornament and Item 1 -->
                <div class="relative flex items-center">
                    <a href="https://wa.me/6283863536205?text=Assalamualaikum,%20saya%20ingin%20berkonsultasi%20mengenai%20zakat">
                        <div class="relative flex flex-col items-center w-24 p-4 bg-white rounded-lg shadow-2xl h-28 md:w-36 md:h-42 lg:w-48 lg:h-52 md:p-8">
                            <div class="px-4 py-4 bg-green-500 rounded-full">
                                <img src="{{ asset('images/Phone Message.png') }}" alt="Image 1"
                                class="flex items-center justify-center w-8 h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                            </div>
                            <p class="relative text-sm text-center text-gray-800 md:text-lg">Konsultasi</p>
                        </div>
                    </a>
                </div>

                <!-- Item 2 -->
                <a href="/zakat">
                    <div class="relative flex flex-col items-center w-24 p-4 bg-white rounded-lg shadow-2xl h-28 md:w-36 md:h-42 lg:w-48 lg:h-52 md:p-8">
                        <div class="px-4 py-4 bg-green-500 rounded-full">
                            <img src="{{ asset('images/calculator.png') }}" alt="Image 1"
                            class="flex items-center justify-center w-8 h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                        </div>
                        <p class="relative text-sm text-center text-gray-800 md:text-lg">Kalkulator Zakat</p>
                    </div>
                </a>


                <!-- Item 3 -->
                <div
                    class="relative flex flex-col items-center w-24 p-4 bg-white rounded-lg shadow-2xl h-28 md:w-36 md:h-42 lg:w-48 lg:h-52 md:p-8">
                    <div class="px-4 py-4 bg-green-500 rounded-full">
                        <img src="{{ asset('images/Buy With Card.png') }}" alt="Image 1"
                        class="flex items-center justify-center w-8 h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                    </div>
                    <p class="relative text-sm text-center text-gray-800 md:text-lg">Rekenign Donasi</p>
                </div>

                <!-- Wrapper for Right Ornament and Item 4 -->
                <div class="relative flex items-center">
                    <div
                        class="relative flex flex-col items-center w-24 p-4 bg-white rounded-lg shadow-2xl h-28 md:w-36 md:h-42 lg:w-48 lg:h-52 md:p-8">
                        <div class="px-4 py-4 bg-green-500 rounded-full">
                            <img src="{{ asset('images/Qr Code.png') }}" alt="Image 1"
                            class="flex items-center justify-center w-8 h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                        </div>
                        <p class="relative text-sm text-center text-gray-800 md:text-lg">QR Donasi</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between mt-8 px-60">
            <div id="details-container" class="relative max-h-[1000px] overflow-hidden transition-all duration-300">
                <p class="mt-4 ml-4 text-[16px] font-semibold text-green-500 justify-center items-center flex">Sekilas NU-Care Lazisnu Cilacap</p>
                <div id="details-content" class="w-full px-5 py-4">
                    <h2 class="font-semibold text-left text-green-500">Visi</h2>
                    @foreach($visis as $visi)
                        <p>{!! nl2br(e($visi->visi)) !!}</p>
                    @endforeach
                    <h2 class="mt-4 font-semibold text-left text-green-500">Misi</h2>
                    @foreach($misis as $Misi)
                        <p>{!! nl2br(e(\Illuminate\Support\Str::limit($Misi->misi, 300, '...'))) !!}</p>
                    @endforeach
                </div>
                <a href="#" id="details-expand-link"
                    class="absolute bottom-0 left-0 w-full px-3 pt-4 text-left bg-gradient-to-t from-white via-white to-transparent">
                        <livewire:visi-misi />
                </a>
            </div>
        </div>



        <!-- Campaign Section -->
        <div class="flex flex-col items-center py-10 mt-8 bg-white">
            <!-- Title -->
            <div class="flex items-center justify-between w-full mb-8">
                <div class="relative flex flex-col justify-between px-12">
                    <h2 class="font-semibold text-green-600 text-md md:text-lg">Campaign Lazisnu Cilacap</h2>
                    <h2 class="text-xs text-black md:text-sm">Berikut merupakan campaign terbaru Lazisnu Cilacap</h2>
                </div>
                <div>
                    <a href="{{ route('campaign') }}" class="overflow-hidden text-sm text-left text-green-500 md:hidden mr-14 hover:text-green-600 hover:cursor-pointer whitespace-nowrap text-ellipsis">Selengkapnya ></a>

                    <a href="{{ route('campaign') }}" class="relative hidden px-4 py-2 mr-12 text-white bg-green-500 rounded-md md:block hover:bg-green-600">
                        Campaign Lainya
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center w-full px-10 pb-4 md:space-y-0 md:shadow-lg md:space-x-4 md:w-auto md:grid md:grid-cols-3">
                <!-- Card 1 -->
                @foreach ($campaigns as $campaign)
                <x-campaign-card :campaign="$campaign" wire:key="{{ $campaign->id_campaign }}"/>                    
                @endforeach
            </div>
        </div>

        <!-- Berita Section -->
        <div class="flex flex-col items-center w-full pb-4 mt-4 bg-center bg-cover shadow-md bg-gray-50 bg-opacity-90">
            <!-- Title -->
            <div class="flex items-center justify-between w-full mb-8">
                <div class="relative flex flex-col justify-between px-12">
                    <h2 class="text-lg font-semibold text-green-600">Berita Lazisnu Cilacap</h2>
                    <h2 class="text-sm text-black">Berikut merupakan berita terbaru Lazisnu Cilacap</h2>
                </div>
                <div>
                    <a class="overflow-hidden text-sm text-left text-green-500 md:hidden mr-14 hover:text-green-600 hover:cursor-pointer whitespace-nowrap text-ellipsis">Selengkapnya ></a>
                    <button class="relative hidden px-4 py-2 mr-12 text-white bg-green-500 rounded-md md:block hover:bg-green-600">
                        <a href="{{ route('berita') }}">
                            Berita Lainya
                        </a>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 mx-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                @foreach ($beritas as $berita)
                <x-berita-card :berita="$berita" wire:key="{{ $berita->id_berita }}"/>                    
                @endforeach
            </div>
        </div>

        <!-- Tentang Section -->
        <div class="flex flex-col items-center py-10 mt-4 bg-white shadow-lg">
            <!-- Title -->
            {{-- <div class="mb-8">
                <h2 class="text-xl font-semibold text-black">Tentang</h2>
                <div class="relative px-8 pt-4 mt-2">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                    </div>
                </div>
            </div> --}}

            <!-- Container for items left -->
            <div class="flex items-start justify-between w-full h-auto max-w-4xl mx-20 space-x-20">
                <!-- Item 1 -->
                <div class="flex flex-col items-center flex-1 hidden md:block">
                    <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="object-cover mb-4 w-128 h-128">
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-start items-center flex-1 mb-4 -ml-8 text-justify md:ml-0">
                    <div>
                        <p class="font-extrabold text-green-600 text-md md:text-xl">Sekilas NU Care-LAZISNU Cilacap</p>
                        <p class="mr-8 text-sm text-gray-700 md:text-md md:mr-0">
                            Terima kasih banyak kami ucapkan kepada para muzakki, munfiq, donatur atas semua zakat,
                            infaq,
                            sedekah atas donasinya yang telah diamanatkan melalui NU Care Lazisnu Cilacap.
                        </p>
                    </div>
                    <div class="flex flex-col justify-center w-full -ml-8 md:ml-0">
                        <p class="mt-4 mb-4 text-lg font-semibold text-center text-black">Terima kasih kepada Sejumlah</p>
                        <div class="flex flex-row justify-center">
                            <div class="relative flex flex-col items-center w-40 h-24 p-4 md:w-60 md:p-8">
                                <img src="{{ asset('images/tikum.png') }}" alt="Image 1"
                                    class="relative w-8 h-8 mb-2 md:w-16 md:h-16">
                                <p class="relative text-xs font-semibold text-center text-green-600 md:text-md">41.124
                                    muzakki<br>NU Care Lazisnu Cilacap</p>
                            </div>
                            <div class="relative flex flex-col items-center w-40 h-24 p-4 md:w-60 md:p-8">
                                <img src="{{ asset('images/tikum.png') }}" alt="Image 1"
                                    class="relative w-8 h-8 mb-2 md:w-16 md:h-16">
                                <p class="relative text-xs font-semibold text-center text-green-600 md:text-md">64.712
                                    Munfiq<br>NU Care Lazisnu Cilacap</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mitra Section -->
        <div class="flex flex-col items-center px-4 py-4 mt-4 mb-2 bg-white bg-center bg-cover shadow-md w-max-screen">
            <!-- Title -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-green-600">Mitra Kami</h2>
            </div>
            <div x-data="{ 
                offset: 0, 
                logoWidth: 10, // Lebar setiap logo 10%
                visibleLogos: 5, // Menampilkan 5 logo sekaligus
                logoCount: {{ $mitras->count() }}, 
                slideWidth: 20.10, // Menggeser sesuai dengan lebar satu logo
                slideInterval: 3000, // Waktu dalam milidetik untuk setiap slide
                interval: null 
            }"
            x-init="
                    interval = setInterval(() => {
                        if (offset < (logoCount - visibleLogos) * slideWidth) {
                            offset += slideWidth;
                        } else {
                            offset = 0; // Mulai dari awal lagi
                        }
                    }, slideInterval);
                "
            class="relative w-full overflow-hidden">
                <!-- Carousel Container -->
                <div class="flex transition-transform duration-500 w-[{{ $mitras->count() * 10 }}%] items-center flex" :style="'transform: translateX(-' + offset + '%)'">
                    <!-- Loop through logos -->
                    @foreach ($mitras as $mitra)
                        <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Picture" class="w-[10%] h-[5%]" style="margin-left: 75px; margin-right:75px"/>
                    @endforeach
                </div> 
            </div>
            <div class="mb-16">
                
            </div>
        <!-- Sticky Bottom -->
        <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center bg-white shadow-md md:hidden">
            <div class="flex items-center justify-center w-full px-8 py-4 space-x-12 bg-white shadow-2xl rounded-3xl">
                
                    <div class="items-center w-16 h-auto rounded-lg">
                        <a wire:navigate.hover href="{{ route('landing') }}">
                            <img src="{{ Request::is('/') ? asset('images/Frame 1-active.png') : asset('images/Frame 1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="items-center w-16 h-auto rounded-lg">
                        <a wire:navigate.hover href="{{ route('campaign') }}">
                            <img src="{{ Request::is('campaigns') ? asset('images/Frame 2-active.png') : asset('images/Frame 2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="items-center w-16 h-auto rounded-lg">
                        <a wire:navigate.hover href="{{ route('berita') }}">
                            <img src="{{ Request::is('berita') ? asset('images/Frame 3-active.png') : asset('images/Frame 3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="items-center w-16 h-auto rounded-lg">
                        <a wire:navigate.hover href="{{ route('zakat') }}">
                            <img src="{{ request()->is('zakat') || request()->is('infak') || request()->is('wakaf') ? asset('images/Frame 5-active.png') : asset('images/Frame 5.png') }}" alt="">
                        </a>
                    </div> 
                    <div class="items-center w-16 h-auto rounded-lg">
                        <a wire:navigate.hover href="{{ route('profil') }}">
                            <img src="{{ Request::is('profil') ? asset('images/Frame 4-active.png') : asset('images/Frame 4.png') }}" alt="">
                        </a>
                    </div>
            </div>
        </div>
</div>


    