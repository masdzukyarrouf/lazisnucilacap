<div class="z-5 flex flex-grow  bg-white  h-[100px]">
    <a href="{{ route('campaigns.show', $campaign->id_campaign) }}" class="flex flex-grow">
        <div class="z-0 relative group flex justify-center items-center w-[220px] h-full overflow-hidden">
            <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="Picture"
                class="object-cover w-full h-full hover:cursor-pointer">
            <div
                class="hover:cursor-pointer absolute inset-0 flex items-center justify-center bg-green-600 bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-lg text-center">View Campaign</p>
            </div>
        </div>
        <div class="py-2 px-3  w-4/5 ">
            <h2 class="text-[12px]  font-semibold text-gray-800">
                {{ \Illuminate\Support\Str::limit($campaign->title, 25, '...') }}
            </h2>
            <div class="flex justify-between items-center mt-2">
                <div class="flex items-center">
                    <img src="{{ asset('images/icon_location.png') }}" alt="pinpoint" class="w-3 h-3">
                    <p class="pl-1 text-[10px]  text-gray-600">{{ $campaign->lokasi }}</p>
                </div>
                <p class="pl-1 text-[10px]  text-green-600">{{ $campaign->kategori }}</p>

            </div>
            <div class="mt-3">
                <div class="mb-2 h-1  bg-gray-200 rounded-full">
                    <div class="h-1  bg-green-500 rounded-full" style="width: {{ $progress }}%;"></div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="text-[10px] text-left">
                        <p class=" text-gray-700 ">Raised</p>
                        <p class=" text-green-600  font-bold">Rp.
                            {{ number_format($campaign->raised, 0, ',', '.') }}</p>
                    </div>
                    <div class="text-[10px] text-left">
                        <p class=" text-gray-700 ">Sisa Hari</p>
                        <p class=" text-gray-700  font-bold text-right">{{ $dayLeft }}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>

</div>
