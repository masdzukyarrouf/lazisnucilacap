<div class="z-5 flex flex-grow bg-white h-[130px] md:h-auto md:flex-col">
    <a href="{{ route('user-berita.show', $berita->title_berita) }}" class="flex flex-grow w-[280px] h-[130px] md:w-auto md:h-[500px] md:flex-col">
        <!-- Image Section -->
        <div class="z-0 relative group flex justify-center items-center w-[280px] h-[130px] md:w-full md:h-[430px] overflow-hidden">
            <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture"
                class="object-cover w-full h-full hover:cursor-pointer">
        </div>
        
        <!-- Text Section -->
        <div class="py-2 px-3 w-4/5 flex flex-col justify-between md:w-full">
            <h2 class="text-[14px] md:text-lg font-semibold text-gray-800">
                {{ \Illuminate\Support\Str::limit($berita->title_berita, 35, '...') }}
            </h2>
            <div class="flex justify-between items-center mt-2 md:text-lg">
                <div class="flex items-center">
                    <img src="{{ asset('images/clock.png') }}" alt="clock" class="w-3 h-3">
                    <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal }}</p>
                </div>
            </div>
            <p class="pl-1 text-[12px] md:text-lg text-left text-green-600">{{ $berita->kategori->nama_kategori ?? '' }}</p>
            <div class="mt-3">
                <p class="text-[12px]  md:text-lg text-green-600"> Baca Selengkapnya...</p>
            </div>
        </div>
    </a>
</div>
