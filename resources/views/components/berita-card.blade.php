<div class="h-full bg-white rounded-md shadow-2xl z-5 md:flex-col">
    <a href="{{ route('detail-berita', $berita->title_berita) }}" class="flex flex-grow text-sm text-green-500 md:flex-col md:flex md:text-base hover:text-green-600 hover:cursor-pointer">
    <div class="relative z-0 flex items-center group w-44 h-28 md:h-80 md:w-auto">

        <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture"
            class="object-cover w-full h-full rounded-md md:h-80 hover:cursor-pointer">
    </div>
    <div class="w-4/5 px-3 py-2 md:p-4 md:w-full">
        <h2 class="text-sm font-semibold text-gray-800 md:text-xl">{{ $berita->title_berita }}</h2>
        <div class="flex items-center mt-1">
            <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
            <p class="pl-1 text-xs text-gray-600 md:text-sm">{{$berita->tanggal}}</p>
        </div>
            Baca Selengkapnya ...
        </div>
    </a>
</div>
