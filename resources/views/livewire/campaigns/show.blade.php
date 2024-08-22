<div class="w-full max-w-[414px] mx-auto bg-white">
    <x-nav-mobile2 title="{{ \Illuminate\Support\Str::limit($campaign->title, 35, '...') }}" />
    <div>
        <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="Main Picture"
            class="w-full object-cover" style="height: 205px">
        <p class="mt-4 px-4 py-2 font-bold text-[20px] w-full text-justify">{{ $campaign->title }}</p>
        <div class="px-3 w-full">
            <div class="flex justify-between w-fullitems-center mt-1">
                <div class="flex items-center">
                    <img src="{{ asset('images/icon_location.png') }}" alt="pinpoint" class="w-3 h-3">
                    <p class="pl-1 text-[12px] text-gray-600">{{ $campaign->lokasi }}</p>
                </div>
                <div>
                    <p class="pl-1 text-[12px] text-green-600">{{ $campaign->kategori }}</p>
                </div>
            </div>
            <div class="py-4">
                <div class="mb-2 h-1  bg-gray-200 rounded-full">
                    <div class="h-1  bg-green-500 rounded-full" style="width: {!! $progress !!}%;"></div>
                </div>

                <div class="flex items-center justify-between ">
                    <div class=" text-left ">
                        <p class=" text-gray-700 text-[10px]">Raised</p>
                        <p class=" text-green-600 text-[12px] font-extrabold">Rp.
                            {{ number_format($campaign->raised, 0, ',', '.') }}</p>
                    </div>
                    <div class=" text-left ">
                        <p class=" text-gray-700 text-right text-[12px] font-extrabold">{{ $dayLeft }}</p>
                        <p class=" text-gray-700 text-[10px]">Hari lagi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div id="details-container" class="relative max-h-[174px] overflow-hidden transition-all duration-300">
        <p class="mt-4 ml-4 text-[16px] font-semibold text-green-500">Detail Donasi</p>
        <div id="details-content" class="px-5 w-full py-4">
            <p wire:key="campaign-{{ $campaign->id_campaign }}" class="text-[12px]">{!! $processedDesc !!}</p>
        </div>
        <a href="#" id="details-expand-link"
            class="absolute bottom-0 left-0 px-3 pt-4 w-full text-left bg-gradient-to-t from-white via-white to-transparent">
            <div class="py-2 font-bold text-green-500 text-[12px]">
                Baca Selengkapnya...
            </div>
        </a>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div id="update-container" class="relative max-h-[174px] overflow-hidden transition-all duration-300">
        <p class="mt-4 ml-4 text-[16px] font-semibold text-green-500">Update Donasi</p>
        <div id="update-content" class="px-3 w-full py-4">
            <p wire:key="campaign-{{ $campaign->id_campaign }}" class="text-[12px]">{!! $processedDesc !!}</p>
        </div>
        <a href="#" id="update-expand-link"
            class="absolute bottom-0 left-0 px-3 pt-4 w-full text-left bg-gradient-to-t from-white via-white to-transparent">
            <div class="py-2 font-bold text-green-500 text-[12px]">
                Baca Selengkapnya...
            </div>
        </a>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div class="relative">
        <div class="flex justify-between items-center">
            <p class="mt-4 ml-4 text-md font-semibold text-green-500 text-[16px]">Donatur</p>
            <a href="{{ route('campaigns.donasiList', $campaign->id_campaign) }}" class="mt-4 mr-4 text-right font-semibold text-green-500 text-[12px]">Lihat Semua></a>

        </div>
        <div class="px-3 w-full py-4">
            @if ($donasis->isEmpty())
                <div class="px-4 py-2 border border-transparent border-b-gray-300 h-[100px] text-center ">
                    <p>
                        Belum Ada Donasi
                    </p>
                    <a href="{{ route('donasi.index', $campaign->id_campaign) }}" class="text-green-500 text-sm">Donasi Sekarang</a>
                </div>
            @else
                @foreach ($donasis as $donasi)
                    <livewire:campaigns.card-donasi :id_donasi="$donasi->id_donasi" wire:key="{{ $donasi->id_donasi }}" />
                @endforeach
            @endif
        </div>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div class="relative">
        <div class="flex justify-between items-center">
            <p class="mt-4 ml-4 text-md font-semibold text-green-500 text-[16px]">Doa Doa Orang Baik</p>
            <a href="{{ route('campaigns.doaList', $campaign->id_campaign) }}" class="mt-4 mr-4 text-right font-semibold text-green-500 text-[12px]">Lihat Semua></a>

        </div>
        <div class="px-3 w-full py-4 space-y-4">
            @if ($doas->isEmpty())
                <div class="px-4 py-2 border border-transparent border-b-gray-300 h-[100px] text-center ">
                    <p>
                        Belum Ada Doa
                    </p>
                    <a href="{{ route('donasi.index', $campaign->id_campaign) }}" class="text-green-500 text-sm">Donasi Sekarang</a>
                </div>
            @else
                @foreach ($doas as $doa)
                    <livewire:campaigns.card-doa :id_doa="$doa->id_doa" wire:key="{{ $doa->id_doa }}" />
                @endforeach
            @endif
        </div>
    </div>
    <div style="height: 67px "></div>

    <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center">
        <div class="flex items-center justify-center px-4 py-4 space-x-4 bg-white"
            style="width: 414px; height: 67px; box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 -2px 4px -2px rgba(0, 0, 0, 0.1);">
            <a onclick="copyToClipboard()"
                class="items-center px-6 py-2 rounded-lg flex space-x-1 border border-gray-300 text-[12px] hover:cursor-pointer">
                <img src="{{ asset('images/share.png') }}" alt="Share">
                <p>Bagikan</p>
            </a>
            <a wire:navigate.hover href="{{ route('donasi.index', $campaign->id_campaign) }}"
                class="text-[12px] bg-green-600 px-16 py-2 items-center text-white rounded-lg">
                Donasi Sekarang
            </a>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        function setupExpandableContainer(containerId, expandLinkId) {
            const container = document.getElementById(containerId);
            const expandLink = document.getElementById(expandLinkId);

            // Function to check if content overflows
            function checkOverflow() {
                if (container.scrollHeight > container.clientHeight) {
                    expandLink.style.display = 'block'; // Show the link if content overflows
                } else {
                    expandLink.style.display = 'none'; // Hide the link if no overflow
                }
            }

            // Function to expand the container
            function expandContainer() {
                container.classList.remove('max-h-[174px]');
                container.classList.add('max-h-none'); // Remove height restriction
                expandLink.style.display = 'none'; // Hide the link
            }

            // Initial check for overflow
            checkOverflow();

            // Event listener for the expand link
            expandLink.addEventListener('click', function(e) {
                e.preventDefault();
                expandContainer();
            });
        }

        // Setup expandable containers
        setupExpandableContainer('details-container', 'details-expand-link');
        setupExpandableContainer('update-container', 'update-expand-link');
    });
</script>
