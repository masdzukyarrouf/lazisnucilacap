<div class="w-full max-w-[414px] mx-auto bg-white">
    <x-nav-mobile2 title="{{ \Illuminate\Support\Str::limit($campaign->title, 35, '...') }}" />
    <div>
        <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="Main Picture"
            class="w-full object-cover" style="height: 205px">
        <p class="mt-4 px-4 py-2 font-bold text-md w-full text-justify">{{ $campaign->title }}</p>
        <div class="px-3 w-full">
            <div class="flex items-center mt-1">
                <img src="{{ asset('images/icon_location.png') }}" alt="pinpoint" class="w-3 h-3">
                <p class="pl-1 text-xs text-gray-600">{{ $campaign->lokasi }}</p>
            </div>
            <div class="py-4">
                <div class="mb-2 h-1  bg-gray-200 rounded-full">
                    <div class="h-1  bg-green-500 rounded-full" style="width: {!! $progress !!}%;"></div>
                </div>

                <div class="flex items-center justify-between ">
                    <div class="text-xs text-left space-y-1">
                        <p class=" text-gray-700">Raised</p>
                        <p class=" text-green-600 font-extrabold">Rp. {{ number_format($campaign->raised, 0, ',', '.') }}</p>
                    </div>
                    <div class="text-xs text-left space-y-1">
                        <p class=" text-gray-700 text-right font-extrabold">{{ $dayLeft }}</p>
                        <p class=" text-gray-700">Hari lagi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div id="details-container" class="relative max-h-[174px] overflow-hidden transition-all duration-300">
        <p class="mt-4 ml-4 text-lg font-semibold text-green-500">Detail Donasi</p>
        <div id="details-content" class="px-3 w-full py-4">
            <p wire:key="campaign-{{ $campaign->id_campaign }}">{!! $processedDesc !!}</p>
        </div>
        <a href="#" id="details-expand-link"
            class="absolute bottom-0 left-0 px-3 pt-4 w-full text-left bg-gradient-to-t from-white via-white to-transparent">
            <div class="py-2 font-bold text-green-500">
                Baca Selengkapnya...
            </div>
        </a>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div id="update-container" class="relative max-h-[174px] overflow-hidden transition-all duration-300">
        <p class="mt-4 ml-4 text-lg font-semibold text-green-500">Update Donasi</p>
        <div id="update-content" class="px-3 w-full py-4">
            <p wire:key="campaign-{{ $campaign->id_campaign }}">{!! $processedDesc !!}</p>
        </div>
        <a href="#" id="update-expand-link"
            class="absolute bottom-0 left-0 px-3 pt-4 w-full text-left bg-gradient-to-t from-white via-white to-transparent">
            <div class="py-2 font-bold text-green-500">
                Baca Selengkapnya...
            </div>
        </a>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div class="relative">
        <div class="flex justify-between items-center">
            <p class="mt-4 ml-4 text-md font-semibold text-green-500">Donatur</p>
            <p class="mt-4 mr-4 text-right font-semibold text-green-500">Lihat Semua></p>

        </div>
        <div class="px-3 w-full py-4">
            @foreach ($donasis as $donasi)
                <livewire:campaigns.card-donasi :id_donasi="$donasi->id_donasi" wire:key="{{ $donasi->id_donasi }}" />
            @endforeach
        </div>
    </div>
    <div class="py-1 w-full bg-gray-200">
        {{-- empty --}}
    </div>
    <div class="relative">
        <div class="flex justify-between items-center">
            <p class="mt-4 ml-4 text-md font-semibold text-green-500">Doa Doa Orang Baik</p>
            <p class="mt-4 mr-4 text-right font-semibold text-green-500">Lihat Semua></p>

        </div>
        <div class="px-3 w-full py-4 space-y-4">
            @foreach ($doas as $doa)
                <livewire:campaigns.card-doa :id_doa="$doa->id_doa" wire:key="{{ $doa->id_doa }}"/>
            @endforeach
        </div>
    </div>




    <div style="height: 67px"></div>
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
