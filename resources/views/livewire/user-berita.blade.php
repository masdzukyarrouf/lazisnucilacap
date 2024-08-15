<div class="flex justify-center">
    <div class="flex justify-center p-2 space-y-8 bg-white rounded-lg shadow-md md:p-8 md:mx-5" style="width: 414px;">
        <x-nav-mobile2></x-nav-mobile2>
        <div class="flex flex-col gap-3">
            @foreach($latestBerita->take(3) as $berita)
            <a href="{{ route('detail-berita', ['id_berita' => $berita->id_berita]) }}">
                <div class="flex bg-white rounded-lg shadow-lg md:flex-col">
                    <div class="relative flex items-center px-3 py-2 group w-80 md:h-auto md:w-auto">
                        <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-full h-full rounded-md">
                    </div>
                    <div class="px-3 py-2 md:p-4">
                        <h2 class="text-sm font-semibold text-gray-800 md:text-xl">
                            {{ $berita->title_berita}}
                        </h2>
                        <div class="flex items-center mt-1">
                            <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                            <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal}}</p>
                        </div>
                        <a href="#" class="text-sm text-green-500 md:text-base hover:text-green-600 hover:cursor-pointer">
                            Baca Selengkapnya ...
                        </a>
                    </div>
                </div>
            </a>
            @endforeach
            <div class="mt-5">
                <p class="mb-3 font-semibold text-green-500 text-md">berita lainnya</p>
                <div class="flex flex-col gap-3">
                    @foreach ($otherBerita->skip(3) as $berita)
                    <a href="{{ route('detail-berita', ['id_berita' => $berita->id_berita]) }}">
                        <div class="flex items-center p-2 bg-white rounded-lg shadow-md md:p-5 md:mx-2">
                            <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-24 h-24 rounded-md">
                            <div class="flex flex-col pl-2">
                                <h2 class="text-sm font-semibold text-gray-800">
                                    {{ \Illuminate\Support\Str::limit($berita->title_berita, 30, '...') }}
                                </h2>
                                <div class="flex items-center">
                                <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                                <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="mb-20">
                    
                </div>
            </div>
        </div>
    </div>
</div>