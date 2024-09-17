<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Profil & Jajaran Pengurus" />
    <div class="flex flex-col h-full min-h-screen bg-white shadow-md" style="width: 414px;">
        <div id="details-container" class="relative max-h-[1000px] overflow-hidden transition-all duration-300 shadow-lg px-4 py-4">
            <img src="{{ asset('images/profil.png')}}" alt="" class="mb-4">
            <p class=" text-[16px] font-semibold z-50 text-green-500 items-center flex">Sekilas NU-Care Lazisnu Cilacap</p>
            <div id="details-content" class="w-full py-2">
                <p class="mb-2 text-sm">NU Care-LAZISNU adalah rebranding dari Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU)  milik perkumpulan Nadhlatul Ulama (NU).</p>
                <p class="text-sm">NU Care-LAZISNU adalah rebranding dan / atau sebagai pintu masuk agar masyarakat global mengenal Lembaga Amil Zakat, Infak</p>
            </div>
            <a href="#" id="details-expand-link"
                class="absolute bottom-0 left-0 w-full px-4 pt-4 mb-2 text-left bg-gradient-to-t from-white via-white to-transparent">
                    <livewire:sekilas />
            </a>
        </div>
                
        <div id="details-container" class="relative max-h-[325px] overflow-hidden transition-all duration-300  shadow-lg px-4 py-4">
            <p class="text-[16px] font-semibold text-green-500 items-center flex">Visi & Misi NU Care Lazisnu Cilacap</p>
            <div id="details-content" class="w-full py-2">
                <h2 class="font-semibold text-left text-green-500">Visi</h2>
                @foreach($visis as $visi)
                    <p>{!! nl2br(e($visi->visi)) !!}</p>
                @endforeach
                <h2 class="mt-4 font-semibold text-left text-green-500">Misi</h2>
                @php
                    $index = 1;
                @endphp

                @foreach ($misis as $Misi)
                    <div class="flex mt-4">
                        <h1 class="pr-2 text-sm">{{ $index }}.</h1>
                        <p class="text-sm">
                            {!! nl2br(e(\Illuminate\Support\Str::limit($Misi->misi, 300, '...'))) !!}
                        </p>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </div>
            <a id="details-expand-link"
                class="absolute bottom-0 left-0 w-full px-3 pt-4 text-left bg-gradient-to-t from-white via-white to-transparent">
                <livewire:visi-misi />
            </a>
        </div>
            <div class="px-4 py-4 shadow-lg">
                <h1 class=" text-[16px] font-semibold text-green-500 items-center flex">Jajaran Pengurus  NU Care Lazisnu Cilacap</h1>
                <img src="{{ asset('images/jajaran.png')}}" alt="">
            </div>
        </div>
        <div class="mb-16"></div>
</div>
