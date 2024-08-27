
    <div class="flex flex-col items-center justify-center">
        <x-nav-mobile2 title="Berita Lazisnu Cilacap" />
        <div class="min-h-screen bg-white shadow-md" style="width: 414px">
            <div class="mx-5 mb-10">
                <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-full h-full mt-4 rounded-md">
                <div class="flex flex-col justify-between px-5">
                    <p class="pt-3 font-bold">{{ $berita->title_berita }}</p>
                    <div class="flex items-center mt-3">
                        <img src="{{ asset('images/clock.png')}}" alt="jam" class="w-4 h-4">
                        <p class="pl-1 text-sm">{{ $berita->tanggal }}</p>
                    </div>
                    <p class="pt-10">
                        {!! nl2br(e($berita->description)) !!}
                    </p>
                </div>
                <div class="pt-20">
                    <p class="px-8 pb-3 text-xl font-bold">Berita lainnya</p>
                   <div class="flex flex-col gap-3">
                    @foreach ($otherBerita as $berita)
                        <a href="{{ route('detail-berita', ['id_berita' => $berita->id_berita]) }}">
                            <div class="flex items-center bg-white rounded-lg shadow-md">
                                <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-24 h-24 rounded-md">
                                <div class="flex flex-col pl-2">
                                    <h2 class="text-sm font-semibold text-gray-800">
                                        {{ \Illuminate\Support\Str::limit($berita->title_berita, 30, '...') }}
                                    </h2>
                                    <div class="flex items-center">
                                    <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                                    <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal}}</p>
                                    <h1 class="pl-4 text-xs text-green-500 md:text-sm">{{ $berita->kategori }}</h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <div class="mb-16">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
