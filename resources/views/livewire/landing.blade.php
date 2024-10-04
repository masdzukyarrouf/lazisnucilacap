<div>
    {{-- <x-navbar></x-navbar> --}}
    <livewire:navbar.index />
    <livewire:navbar.usermenu />
    <div class="relative flex items-center justify-center mt-1">
        <div class="relative z-0 w-full bg-white">
            <div x-data="{
                offset: 0,
                logoWidth: 100, // Lebar setiap logo dalam %
                visibleLogos: 1, // Menampilkan 5 logo sekaligus
                logoCount: {{ $landings ? $landings->count() : 0 }},
                slideWidth: 100, // Menggeser sesuai dengan lebar satu logo
                slideInterval: 3000, // Waktu dalam milidetik untuk setiap slide
                interval: null,
            }" x-init="interval = setInterval(() => {
                if (offset < (logoCount - visibleLogos) * slideWidth) {
                    offset += slideWidth;
                } else {
                    offset = 0; // Mulai dari awal lagi
                }
            }, slideInterval);" class="relative w-full overflow-hidden">
                <!-- Carousel Container -->
                <div class="flex w-full transition-transform duration-500"
                    :style="'transform: translateX(-' + offset + '%)'">
                    @foreach ($landings as $landing)
                        @if ($landing->link == '-')
                            <a class="min-w-full h-auto ">
                                <img src="{{ asset('storage/' . $landing->gambar) }}" alt="Picture"
                                    class="min-w-full h-auto " />
                            </a>
                        @else
                            <a href="{{ $landing->link }}" class="min-w-full h-auto ">
                                <img src="{{ asset('storage/' . $landing->gambar) }}" alt="Picture"
                                    class="min-w-full h-auto " />
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="relative flex justify-center w-full mt-16 z-12">
        <div class="flex justify-center space-x-4 -mt-24">
            <!-- Item 1 -->
            <a
                href="https://wa.me/62895392167815?text=Assalamualaikum,%20saya%20ingin%20berkonsultasi%20mengenai%20zakat">
                <div
                    class="flex flex-col items-center w-20 h-32 sm:w-36 sm:h-36 p-4 bg-white rounded-lg shadow-2xl md:w-48 md:h-44">
                    <div class="px-4 py-4 bg-green-500 rounded-full">
                        <img src="{{ asset('images/Phone Message.png') }}" alt="Image 1"
                            class="w-6 h-6 sm:w-8 sm:h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                    </div>
                    <p class="text-[10px] md:text-lg font-medium text-center text-gray-800">Konsultasi</p>
                </div>
            </a>

            <!-- Item 2 -->
            <a href="/zakat">
                <div
                    class="flex flex-col items-center w-20 h-32 sm:w-36 sm:h-36 p-4 bg-white rounded-lg shadow-2xl md:w-48 md:h-44">
                    <div class="px-4 py-4 bg-green-500 rounded-full">
                        <img src="{{ asset('images/calculator.png') }}" alt="Image 2"
                            class="w-6 h-6 sm:w-8 sm:h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                    </div>
                    <p class="text-[10px] md:text-lg font-medium text-center text-gray-800">Kalkulator Zakat</p>
                </div>
            </a>

            <!-- Item 3 -->
            <div
                class="flex flex-col items-center w-20 h-32 sm:w-36 sm:h-36 p-4 bg-white rounded-lg shadow-2xl md:w-48 md:h-44">
                <div class="px-4 py-4 bg-green-500 rounded-full">
                    <img src="{{ asset('images/Buy With Card.png') }}" alt="Image 3"
                        class="w-6 h-6 sm:w-8 sm:h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                </div>
                <p class="text-[10px] md:text-lg font-medium text-center text-gray-800">Rekening Donasi</p>
            </div>

            <!-- Item 4 -->
            <div
                class="flex flex-col items-center w-20 h-32 sm:w-36 sm:h-36 p-4 bg-white rounded-lg shadow-2xl md:w-48 md:h-44">
                <div class="px-4 py-4 bg-green-500 rounded-full">
                    <img src="{{ asset('images/Qr Code.png') }}" alt="Image 4"
                        class="w-6 h-6 sm:w-8 sm:h-8 md:w-16 md:h-16 lg:w-16 lg:h-16">
                </div>
                <p class="text-[10px] md:text-lg font-medium text-center text-gray-800">QR Donasi</p>
            </div>
        </div>
    </div>



    <div class="flex flex-col justify-between px-4 mt-8 md:px-8 lg:px-16 xl:px-24">
        <div id="details-container" class="relative max-h-[325px] overflow-hidden transition-all duration-300">
            <p
                class="mt-4 ml-4 text-[14px] md:text-[16px] font-semibold text-green-500 flex justify-center items-center">
                Sekilas NU-Care Lazisnu Cilacap</p>
            <div id="details-content" class="w-full px-4 py-4 md:px-5">
                <h2 class="w-full font-semibold text-left text-green-500">Visi</h2>
                @foreach ($visis as $visi)
                    <p class="text-sm md:text-base" wire:key="misi-{{ $visi->id_visi }}">{!! nl2br(e($visi->visi)) !!}</p>
                @endforeach
                <h2 class="w-full mt-4 font-semibold text-left text-green-500">Misi</h2>
                @php
                    $index = 1;
                @endphp

                @foreach ($misis as $Misi)
                    <div class="flex mt-4" wire:key="misi-{{ $Misi->id_misi }}">
                        <h1 class="pr-2 text-sm">{{ $index }}.</h1>
                        <p class="text-sm">
                            {!! nl2br(e(\Illuminate\Support\Str::limit($Misi->misi, 300, '...'))) !!}
                        </p>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </div>
            <a id="details-expand-link"
                class="absolute bottom-0 left-0 w-full px-3 pt-4 text-left bg-gradient-to-t from-white via-white to-transparent">
                {{-- <livewire:visi-misi /> --}}
                <div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
                    <!-- Button to open the modal -->
                    <span @click="isOpen=true" class="text-green-500 cursor-pointer hover:underline">Baca
                        Selengkapnya...</span>

                    <!-- Modal Background -->
                    <div x-show="isOpen"
                        class="fixed inset-0 z-50 flex items-center justify-center bg-gray-600 bg-opacity-75">
                        <!-- Modal Content -->
                        <div class="w-[414px] md:w-full md:mx-4 bg-white rounded-lg shadow-lg">
                            <!-- Modal Header -->
                            <div class="flex items-center justify-between p-4 bg-gray-200 rounded-t-lg">
                                <h3 class="text-xl font-semibold text-green-500">Sekilas NU-Care Lazisnu Cilacap</h3>
                                <div @click="isOpen=false" class="px-3 rounded-sm shadow hover:bg-red-500">
                                    <button class="text-gray-900">&times;</button>
                                </div>
                            </div>
                            <div class="p-4 max-h-[500px] overflow-y-auto">
                                <div class="flex flex-col items-start mt-4">
                                    <h2 class="w-full font-semibold text-left text-green-500">Visi</h2>
                                    @foreach ($visis as $visi)
                                        <p> {!! nl2br(e($visi->visi)) !!}</p>
                                    @endforeach
                                    <h2 class="w-full mt-4 font-semibold text-left text-green-500">Misi</h2>
                                    @php
                                        $index = 1;
                                    @endphp

                                    @foreach ($misis as $Misi)
                                        <div class="flex mt-4">
                                            <h1 class="pr-2 text-sm">{{ $index }}.</h1>
                                            <p class="text-sm">
                                                {!! nl2br(e(\Illuminate\Support\Str::limit($Misi->misi, 300, '...'))) !!}
                                            </p>
                                        </div>
                                        @php
                                            $index++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <a href="{{ route('campaign') }}"
                    class="overflow-hidden text-sm text-left text-green-500 md:hidden mr-14 hover:text-green-600 hover:cursor-pointer whitespace-nowrap text-ellipsis">Selengkapnya
                    ></a>

                <a href="{{ route('campaign') }}"
                    class="relative hidden px-4 py-2 mr-12 text-white bg-green-500 rounded-md md:block hover:bg-green-600">
                    Campaign Lainya
                </a>
            </div>
        </div>
        <div class="flex flex-col justify-center w-full px-10 pb-4 space-y-4 md:flex-row md:space-y-0 md:shadow-lg md:space-x-4 md:w-auto "
            x-data="{ load: false }" x-init="load = true" x-show="load" wire:init="loadCampaigns">
            @if ($campaigns && $campaigns->isEmpty())
            @elseif($campaigns)
                @foreach ($campaigns as $campaign)
                    <!-- Display this card on md: and larger -->
                    <div class="hidden md:block">
                        <x-campaign-card :campaign="$campaign" wire:key="md-{{ $campaign->id_campaign }}" />
                    </div>

                    <!-- Display this card below md: -->
                    <div class="block md:hidden">
                        <livewire:campaigns.card :campaign="$campaign" wire:key="sm-{{ $campaign->id_campaign }}" />
                    </div>
                @endforeach

            @endif
            <div wire:loading class="w-full ">
                <div
                    class="flex flex-col justify-between w-full pb-4 space-y-4 md:flex-row md:flex md:space-y-0 md:shadow-lg md:space-x-4 md:w-auto ">
                    @for ($i = 0; $i < 3; $i++)
                        <div
                            class="flex flex-row md:flex-col md:space-y-4 animate-pulse bg-gray-200 h-28 w-full md:h-[500px] md:w-[410px] ">
                            <div class="w-2/5 h-full bg-gray-400 md:w-full md:h-80"></div>
                            <div class="flex flex-col w-3/5 space-y-2 md:space-y-4 md:w-full">
                                <div
                                    class="w-auto h-4 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-sm md:mt-1 md:w-auto md:h-6">
                                </div>
                                <div class="w-2/5 h-2 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-sm md:w-1/2 md:h-2">
                                </div>
                                <div
                                    class="w-auto h-1 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-lg md:w-auto md:h-2">
                                </div>
                                <div class="flex justify-between w-auto mx-4 mt-1 md:mt-0">
                                    <div class="w-1/4 h-2 text-gray-400 bg-gray-400 rounded-sm md:w-1/4 md:h-2 "></div>
                                    <div class="w-1/4 h-2 text-gray-400 bg-gray-400 rounded-sm md:w-1/4 md:h-2 "></div>
                                </div>
                                <div class="flex justify-between w-auto mx-4 mt-4">
                                    <div class="w-4/12 h-3 text-gray-400 bg-gray-400 rounded-sm md:w-4/12 md:h-4 ">
                                    </div>
                                    <div class="w-4/12 h-3 text-gray-400 bg-gray-400 rounded-sm md:w-4/12 md:h-4 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
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
                <a
                    class="overflow-hidden text-sm text-left text-green-500 md:hidden mr-14 hover:text-green-600 hover:cursor-pointer whitespace-nowrap text-ellipsis">Selengkapnya
                    ></a>
                <button
                    class="relative hidden px-4 py-2 mr-12 text-white bg-green-500 rounded-md md:block hover:bg-green-600">
                    <a href="{{ route('berita') }}">
                        Berita Lainya
                    </a>
                </button>
            </div>
        </div>

        <div class="flex flex-col justify-center w-full px-10 pb-4 space-y-4 md:flex-row md:space-y-0 md:space-x-4 md:w-auto"
            x-data="{ load: false }" x-init="load = true" x-show="load" wire:init="loadBerita">
            @if ($beritas && $beritas->isEmpty())
            @elseif($beritas)
                @foreach ($beritas as $berita)
                    <x-berita-card :berita="$berita" wire:key="{{ $berita->id_berita }}" />
                @endforeach
            @endif
            <div wire:loading class="w-full ">
                <div
                    class="flex flex-col justify-between w-full pb-4 space-y-4 md:flex-row md:flex md:space-y-0 md:shadow-lg md:space-x-4 md:w-auto ">
                    @for ($i = 0; $i < 3; $i++)
                        <div
                            class="flex flex-row md:flex-col md:space-y-1 animate-pulse bg-gray-200 h-28 w-full md:h-[400px] md:w-[410px] ">
                            <div class="bg-gray-400 w-2/5 h-full md:w-full md:h-[300px]"></div>
                            <div class="flex flex-col w-3/5 space-y-2 md:space-y-4 md:w-full">
                                <div
                                    class="w-auto h-5 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-sm md:mt-2 md:w-auto md:h-4">
                                </div>
                                <div
                                    class="w-2/5 h-2 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-sm md:mt-0 md:w-1/2 md:h-3">
                                </div>
                                <div
                                    class="w-auto h-1 mx-4 mt-4 text-gray-400 bg-gray-400 rounded-lg md:mt-0 md:w-1/2 md:h-3">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang Section -->
    {{-- <div class="flex flex-col items-center py-10 mt-4 bg-white shadow-lg">
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
                            <p class="relative text-xs font-semibold text-center text-green-600 md:text-md">
                                {{ number_format($this->banyak_donasi, 0, ',', '.') }}
                                Munfiq<br>NU Care Lazisnu Cilacap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Mitra Section -->
    <div class="flex flex-col items-center px-4 py-4 mt-4 mb-2 bg-white bg-center bg-cover w-max-screen">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-green-600">Mitra Kami</h2>
        </div>
        <div x-data="{
            offset: 0,
            logoWidth: 10, // Lebar setiap logo 10%
            visibleLogos: 5, // Menampilkan 5 logo sekaligus
            logoCount: {{ $this->mitraCount }},
            slideWidth: 20.10, // Nilai default, akan disesuaikan
            slideInterval: 1000, // Waktu dalam milidetik untuk setiap slide
            interval: null,
            load: false,
            updateSlideWidth() {
                // Deteksi ukuran layar dan sesuaikan slideWidth
                if (window.innerWidth < 640) {
                    this.slideWidth = 43; // Nilai untuk layar kecil
                } else {
                    this.slideWidth = 20.10; // Nilai untuk layar besar
                }
            }
        }" x-init="updateSlideWidth(),
            load = true;
        interval = setInterval(() => {
            if (offset < (logoCount - visibleLogos) * slideWidth) {
                offset += slideWidth;
            } else {
                offset = 0; // Mulai dari awal lagi
            }
        }, slideInterval);
        window.addEventListener('resize', updateSlideWidth);" x-show="load" wire:init="loadMitra"
            class="relative w-full overflow-hidden">
            <!-- Carousel Container -->
            <div class="flex transition-transform duration-500 w-[{{ $this->mitraCount * 10 }}%] items-center flex"
                :style="'transform: translateX(-' + offset + '%)'">
                <!-- Loop through logos -->
                @if ($mitras && $mitras->isEmpty())
                @elseif($mitras)
                    @foreach ($mitras as $mitra)
                        <div wire:loading.remove class=" w-[50px] h-[50px] md:w-[150px] md:h-[150px] mx-10 md:mx-20">
                            <div class="w-[50px] h-[50px] md:w-[150px] md:h-[150px]">
                                <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Picture"
                                    class="w-full h-full bg-black" />
                            </div>
                        </div>
                    @endforeach
                @endif
                @for ($i = 0; $i < $this->mitraCount; $i++)
                    <div wire:loading
                        class="animate-pulse bg-gray-400 w-[50px] h-[50px] md:w-[150px] md:h-[150px] mx-10 md:mx-20">
                        <div class="w-[50px] h-[50px] md:w-[150px] md:h-[150px]"></div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="w-full pt-8 px-4 md:px-20 h-[180px] md:h-[350px] flex">
            <iframe class="w-1/2 h-[180px] md:h-[350px] bg-black"
                src="https://www.youtube.com/embed/IUWm95fwZHk?si=sDflST4mHtaP_N1-" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="w-1/2 h-full text-green-500 flex items-center justify-center mx-4">
                <p class="text-[12px] md:text-[30px] font-bold">
                    Lihat Video Terbaru dari NU Care Lazisnu Cilacap
                </p>
            </div>
        </div>
        <div class="h-[70px]">
        </div>
        <!-- Sticky Bottom -->
        <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center bg-white shadow-md md:hidden border-t">
            <div
                class="flex items-center justify-between w-full max-w-lg px-8 py-4 space-x-6 bg-white shadow-2xl rounded-3xl">

                <!-- Landing -->
                <div class="flex items-center justify-center w-16">
                    <a wire:navigate.hover href="{{ route('landing') }}">
                        <img class="h-10 w-full" src="{{ asset('images/Frame 1-active.png') }}" alt="">
                    </a>
                </div>

                <!-- Campaign -->
                <div class="flex items-center justify-center w-16">
                    <a wire:navigate.hover href="{{ route('campaign') }}">
                        <img class="h-10 w-full"
                            src="{{ Request::is('campaigns') ? asset('images/Frame 2-active.png') : asset('images/Frame 2.png') }}"
                            alt="">
                    </a>
                </div>

                <!-- Berita -->
                <div class="flex items-center justify-center w-16">
                    <a wire:navigate.hover href="{{ route('berita') }}">
                        <img class="h-10 w-full"
                            src="{{ Request::is('berita') ? asset('images/Frame 3-active.png') : asset('images/Frame 3.png') }}"
                            alt="">
                    </a>
                </div>

                <!-- Zakat -->
                <div class="flex items-center justify-center w-16">
                    <a wire:navigate.hover href="{{ route('zakat') }}">
                        <img class="h-10 w-full"
                            src="{{ request()->is('zakat') || request()->is('infak') || request()->is('wakaf') ? asset('images/Frame 5-active.png') : asset('images/Frame 5.png') }}"
                            alt="">
                    </a>
                </div>

                <!-- Profile -->
                <div class="flex items-center justify-center w-16">
                    <a wire:navigate.hover href="{{ route('profile.index') }}">
                        <img class="h-10 w-full"
                            src="{{ Request::is('profil') ? asset('images/Frame 4-active.png') : asset('images/Frame 4.png') }}"
                            alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    // Toggle User Menu visibility
    document.getElementById('user-menu-btn').addEventListener('click', function() {
        const userMenu = document.getElementById('user-menu');
        userMenu.classList.toggle('hidden');
    });

    // Close User Menu when clicking outside
    document.addEventListener('click', function(event) {
        const userMenu = document.getElementById('user-menu');
        const userMenuBtn = document.getElementById('user-menu-btn');
        if (userMenu) {
            if (userMenuBtn.contains(event.target) == null && userMenu.contains(event.target) == null) {
                userMenu.classList.add('hidden');
            }
        }
        if (userMenuBtn) {
            if (userMenuBtn.contains(event.target) == null && userMenu.contains(event.target) == null) {
                userMenu.classList.add('hidden');
            }
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function setupExpandableContainer(containerId, expandLinkId) {
            const container = document.getElementById(containerId);
            const expandLink = document.getElementById(expandLinkId);



            // Function to expand the container
            function expandContainer() {
                container.classList.remove('max-h-[174px]');
                container.classList.add('max-h-none'); // Remove height restriction
                expandLink.style.display = 'none'; // Hide the link
            }

        }

        // Setup expandable containers
        setupExpandableContainer('details-container', 'details-expand-link');
        setupExpandableContainer('update-container', 'update-expand-link');
    });
</script>
