<div class="flex flex-col items-center justify-center">
    <!-- Navigation Component -->
    <x-nav-mobile2 title="NU Care Cerdas" />
    
    <!-- Main Content Wrapper -->
    <div class="flex flex-col h-full min-h-screen bg-white shadow-md" style="width: 414px;">
        
        <!-- Main Image and Description Section -->
        <div class="flex flex-col shadow-lg">
            <div class="flex py-4">
                <!-- Main Image -->
                <img src="{{ asset('images/cerdas.png') }}" alt="" class="h-56">
                <!-- Title and Description -->
                <div class="flex flex-col">
                    <h1 class="text-sm font-semibold text-green-500">
                        NU Care Cerdas (Pendidikan)
                    </h1>
                    <p x-data="{ expanded: false }" class="text-xs text-gray-700">
                        <span x-show="!expanded">
                            program untuk meningkatkan kualitas sumber daya manusia (SDM) melalui penyediaan beasiswa, pelatihan, dan memperkuat fasilitas pend...
                        </span>
                        <span x-show="expanded">
                            program untuk meningkatkan kualitas sumber daya manusia (SDM) melalui penyediaan beasiswa, pelatihan, dan memperkuat fasilitas pendidikan untuk masyarakat kurang mampu di daerah terpencil, tertinggal, dan terdepan.
                        </span>
                        <a href="#" @click.prevent="expanded = !expanded" class="text-green-600">
                            <span x-show="!expanded">Baca Selengkapnya...</span>
                            <span x-show="expanded">Sembunyikan</span>
                        </a>
                    </p>
                    <!-- Additional Icon/Image -->
                    <img src="{{ asset('images/0.png') }}" alt="" class="w-6 mt-1">
                </div>
            </div>
        </div>
        
        <!-- Campaigns Section -->
        <div class="flex flex-col px-4 py-4 shadow-lg">
            <div class="flex items-center justify-between">
                <h2 class="text-sm font-semibold text-green-500">Campaign Lazisnu Cilacap</h2>
                <a href="{{ route('campaign') }}" class="text-sm font-semibold text-green-500">
                    selengkapnya>
                </a>
            </div>
            <!-- Loop Through Campaigns -->
            @foreach ($campaigns as $campaign)
                <div class="py-2 border-b border-gray-300"
                    wire:key="{{ $campaign->id_campaign }}">
                    <livewire:campaigns.card :campaign="$campaign" wire:key="{{ $campaign->id_campaign }}" />
                </div>
            @endforeach
        </div>
        
        <!-- Latest News Section -->
        <div class="flex flex-col px-4 py-4 mt-2 shadow-lg">
            <div class="flex items-center justify-between">
                <h2 class="text-sm font-semibold text-green-500">Berita Lazisnu Cilacap</h2>
                <a href="{{ route('berita') }}" class="text-sm font-semibold text-green-500">
                    selengkapnya>
                </a>
            </div>
            <!-- Loop Through Latest News -->
            @foreach ($latestBerita->take(3) as $berita)
                            <a href="{{ route('detail-berita', ['id_berita' => $berita->id_berita]) }}">
                                <div class="flex items-center py-2 bg-white rounded-lg shadow-md">
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
            <div class="mb-16"></div>
        </div>
    </div>
</div>
