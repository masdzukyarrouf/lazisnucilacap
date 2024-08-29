<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Penghargaan" />
    <div class="flex flex-col h-full min-h-screen bg-white shadow-md" style="width: 414px;">
        <div class="flex h-56 bg-green-100 shadow-lg">
            <div class="flex px-4 pt-4 pb-6">
                <img src="{{ asset('images/penghargaan.png') }}" alt="" class="pr-4">
                <div class="flex flex-col">
                    <h1 class="text-xs">
                        Terima kasih kami ucapkan kepada seluruh pihak yang telah mendukung kami
                    </h1>
                    <h1 class="mt-2 text-xs">
                        NU Care LAZISNU kembali Meraih Predikat 
                    </h1>
                    <h1 class="mt-2 text-sm font-semibold text-green-500">
                        Opini Wajar Tanpa Pengecualian (WTP) 
                    </h1>
                    <h1 class="mt-2 text-xs">
                        Dari Kantor Akuntan Publik
                        Pada pelaporan keuangan tahun 2022 
                    </h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-4 py-4 shadow-lg">
            <div id="details-container" class="relative max-h-[1000px] overflow-hidden transition-all duration-300">
                <p class="text-[16px] font-semibold text-green-500 items-center flex">Sekilas Penghargaan NU-Care Lazisnu Cilacap</p>
                <ol class="mt-2 text-sm list-decimal list-inside">
                    <li class="mb-2">Penghargaan dari Kantor Kementerian Agama Kab. Cilacap sebagai LAZ terbaik dan responsif terhadap kebutuhan layanan ambulan untuk umat</li>
                    <li class="mb-2">Penghargaan dari Kepala Dinas Kesehatan Kabupaten Cilacap sebagai LAZ dengan program layanan ambulan rujukan teraktif</li>
                    <li class="mb-2">Penghargaan dari Kantor Kementerian Agama Kabupaten Cilacap sebagai LAZ progresif dan dinamis Kabupaten Cilacap</li>
                    <li class="mb-2">Penghargaan dari Dinas Kesehatan Kabupaten Cilacap sebagai LAZ teraktif dalam pencegahan dan penanganan pandemi Covid-19 di Kabupaten Cilacap</li>
                    <li class="mb-2">Penghargaan dari Kodim 0703 Cilacap sebagai LAZ Mitra TNI</li>
                </ol>
                <a href="#" id="details-expand-link"
                    class="absolute bottom-0 left-0 w-full px-3 pt-4 text-left bg-gradient-to-t from-white via-white to-transparent">
                        <livewire:penghargaan-popup />
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center px-4 pt-6 shadow-lg">
            <div class="flex flex-col gap-3">
                <div class="flex items-center">
                    <h2 class="text-sm font-semibold text-green-500">Berita Lazisnu Cilacap</h2>
                    <a href="{{ route('berita') }}" class="ml-24 text-sm font-semibold text-green-500">
                            selengkapnya>
                        </a>
                </div>
                @foreach ($latestBerita->take(3) as $berita)
                    <a href="{{ route('detail-berita', ['id_berita' => $berita->id_berita]) }}">
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
                 <div class="mb-16"></div>
            </div>
        </div>
    </div>
</div>
