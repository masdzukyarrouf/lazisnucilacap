<div class="w-full max-w-[414px] mx-auto bg-white">
    <x-nav-mobile2 title="Campaign" />
    <div class="flex items-center justify-center w-full">
        <div class="w-full ">
            <!-- Kategori and Filter Buttons -->
            <div class="flex items-center justify-between">
                <!-- Kategori Button -->
                <a href="/kategori"
                    class="flex items-center justify-center py-2 border border-transparent border-b-gray-200 border-r-gray-200 space-x-2 w-1/2 hover:cursor-pointer">
                    <img src="{{ asset('images/kategori.png') }}" alt="Kategori" class="w-auto h-4">
                    <h1 class="text-base">Kategori</h1>
                </a>

                <a href="/"
                    class="flex justify-center items-center py-2 border border-transparent border-b-gray-200 border-l-gray-200 space-x-2 w-1/2 ">
                    <img src="{{ asset('images/filter.png') }}" alt="Filter" class="w-auto h-4">
                    <h1 class="text-base">Filter</h1>
                </a>
            </div>

            <!-- Campaign Cards Grid -->
            <div class="flex items-center justify-center grid grid-cols-1 h-auto w-full" wire:loading.remove>
                @foreach ($campaigns as $campaign)
                    <div class=" border border-transparent border-b-gray-300 py-2 px-4">
                        <livewire:campaigns.card :campaign="$campaign" wire:key="{{ $campaign->id_campaign }}"
                            :progress="62" />
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            {{-- <div class="flex justify-center mt-8">
                <button class="flex items-center justify-center p-2 text-white bg-green-600 rounded-md"
                    wire:click="moreCampaigns">
                    Campaign lainnya
                </button>
            </div> --}}
            <div style="height: 67px "></div>
        </div>
    </div>


</div>
</di>
