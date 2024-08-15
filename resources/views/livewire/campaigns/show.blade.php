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
                    <div class="h-1  bg-green-500 rounded-full" style="width: 60%;"></div>
                </div>

                <div class="flex items-center justify-between ">
                    <div class="text-xs text-left space-y-1">
                        <p class=" text-gray-700">Raised</p>
                        <p class=" text-green-600">Rp. {{ $campaign->raised }}</p>
                    </div>
                    <div class="text-xs text-left space-y-1">
                        <p class=" text-gray-700">90</p>
                        <p class=" text-gray-700">Hari lagi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 w-full bg-gray-200">
    </div>
    <div>
        <p class="mt-4 ml-4 text-lg font-semibold text-green-500 ">Detail Donasi</p>
        <div class="px-3 w-full">
            <div class="py-4">
                <p wire:key="campaign-{{ $campaign->id_campaign }}">{!! $processedDesc !!}</p>
            </div>
        </div>
    </div>

    <div style="height: 67px"></div>
</div>
