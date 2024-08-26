<div class="z-5  md:flex-col bg-white md:shadow-2xl md:rounded-lg h-full border border-transparent border-b-gray-300">
    <a href="{{ route('campaigns.show', $campaign->id_campaign) }}" class="flex flex-row md:flex-col md:flex">
        <div class="z-0 relative group flex items-center w-44 h-28 md:h-80 md:w-auto md:rounded-lg">

            <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="Picture"
                class="object-cover md:h-80 h-full w-full hover:cursor-pointer ">
            <div
                class="hover:cursor-pointer  absolute inset-0 flex items-center justify-center bg-green-600 bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg text-center">View Campaign</p>
            </div>
        </div>
        <div class="py-2 px-3 md:p-4 w-4/5 md:w-full">
            <h2 class="text-sm md:text-xl font-semibold text-gray-800">
                {{ \Illuminate\Support\Str::limit($campaign->title, 25, '...') }}</h2>
            <div class="flex items-center mt-1">
                <img src="{{ asset('images/icon_location.png') }}" alt="pinpoint" class="w-3 h-3">
                <p class="pl-1 text-xs md:text-sm text-gray-600">{{ $campaign->lokasi }}</p>
            </div>
            <div class="mt-1">
                <div class="mb-2 h-1 md:h-2 bg-gray-200 rounded-full">
                    <div class="h-1 md:h-2 bg-green-500 rounded-full" style="width: {{$campaign->progress}}%;"></div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-xs md:text-lg text-left">
                        <p class="md:mt-2 text-gray-700">Raised</p>
                        <p class="md:mt-2 text-green-600">Rp. {{ $campaign->raised }}</p>
                    </div>
                    <div class="text-xs md:text-md text-left md:text-right">
                        <p class="md:mt-2 text-gray-700">90</p>
                        <p class="md:mt-2 text-gray-700">Hari lagi</p>
                    </div>
                </div>

            </div>
        </div>
    </a>
</div>
