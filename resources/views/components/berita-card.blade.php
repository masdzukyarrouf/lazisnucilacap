<div class="flex bg-white rounded-lg shadow-lg md:flex-col">
    <div class="relative flex items-center px-3 py-2 group md:h-auto md:w-auto w-44 h-28">
        <a href="{{ route('detail-berita', $berita->id_berita) }}">
            <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture" class="object-cover w-full h-full rounded-md">
        </a>
    </div>
    <div class="px-3 py-2 md:p-4">
        <h2 class="text-sm font-semibold text-gray-800 md:text-xl">
            {{ $berita->title_berita }}
        </h2>
        <div class="flex items-center mt-1">
            <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
            <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal }}</p>
        </div>
        <a href="{{ route('detail-berita', $berita->id_berita) }}" class="text-sm text-green-500 md:text-base hover:text-green-600 hover:cursor-pointer">
            Baca Selengkapnya ...
        </a>
    </div>
</div>
