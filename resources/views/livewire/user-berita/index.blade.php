<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Berita Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen bg-white shadow-md" style="width: 414px;">
        <div class="flex">
            <livewire:user-berita.kategori />
            <input type="text" placeholder="Search Berita..." wire:model.live="search"
                class="w-full px-4 py-2 border border-gray-300" />
        </div>

        <div class="flex flex-col ">
            @if($Beritas->isEmpty())
                <p class="text-center text-gray-600">Tidak ada berita untuk kategori ini.</p>
            @else
                @if($kategori === 'all')
                    @foreach($Beritas->take(3) as $berita)
                    <div class="px-4 py-2">
                        <a href="{{ route('user-berita.show', $berita->title_berita) }}">
                            <div class="flex flex-col bg-white rounded-lg shadow-xl">
                                <div class="px-3 py-2">
                                    <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-full h-full rounded-md">
                                </div>
                                <div class="px-3 py-2">
                                    <h2 class="text-sm font-semibold text-gray-800 md:text-xl">
                                        {{ $berita->title_berita }}
                                    </h2>
                                    <div class="flex items-center mt-1">
                                        <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                                        <p class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal }}</p>
                                    </div>
                                    <div class="text-sm text-green-500 md:text-base hover:text-green-600 hover:cursor-pointer">
                                        Baca Selengkapnya ...
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                    <div class="mt-5">
                        <div class="ml-4">
                            <p class="font-semibold text-green-500 text-md">Berita NU Care-LAZISNU Cilacap</p>
                            <p class="mb-3 text-sm">Baca Berita Terbaru</p>
                        </div>
                        <div class="flex flex-col">
                            @foreach ($Beritas->skip(3) as $berita)
                            <a href="{{ route('user-berita.show',$berita->title_berita )}}">
                                <div class="flex items-center px-4 py-2 bg-white border-b border-gray-500">
                                    <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-40">
                                    <div class="flex flex-col pl-2">
                                        <h2 class="text-sm font-semibold text-gray-800">
                                            {{ \Illuminate\Support\Str::limit($berita->title_berita, 30, '...') }}
                                        </h2>
                                        <div class="flex items-center justify-between pt-4">
                                            <div class="flex items-center">
                                                <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                                                <h1 class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal }}</h1>
                                            </div>
                                            <h1 class="pl-4 text-xs text-green-500 md:text-sm">{{ $berita->kategori }}</h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Display berita for specific category -->
                    <div class="flex flex-col gap-3">
                            @foreach ($Beritas as $berita)
                            <a href="{{ route('user-berita.show',$berita->title_berita) }}">
                                <div class="flex items-center bg-white rounded-lg shadow-md">
                                    <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="object-cover w-24 h-24 rounded-md">
                                    <div class="flex flex-col pl-2">
                                        <h2 class="text-sm font-semibold text-gray-800">
                                            {{ \Illuminate\Support\Str::limit($berita->title_berita, 30, '...') }}
                                        </h2>
                                        <div class="flex items-center justify-between pt-4">
                                            <div class="flex items-center">
                                                <img src="{{ asset('images/clock.png') }}" alt="pinpoint" class="w-3 h-3">
                                                <h1 class="pl-1 text-xs text-gray-600 md:text-sm">{{ $berita->tanggal }}</h1>
                                            </div>
                                            <h1 class="pl-4 text-xs text-green-500 md:text-sm">{{ $berita->kategori }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                @endif
            @endif
        </div>
    </div>
    <div class="mb-16"></div>
</div>
<script>
    document.getElementById('openModal').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('modalOverlay').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modalOverlay').classList.add('hidden');
    });

    document.getElementById('modalOverlay').addEventListener('click', function(event) {
        if (event.target === event.currentTarget) {
            document.getElementById('modalOverlay').classList.add('hidden');
        }
    });
</script>
