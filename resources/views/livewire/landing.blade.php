<div>
    <x-navbar></x-navbar>

    <div class="relative flex items-center justify-center flex-grow mt-1">
        <!-- Arrow  left -->
        {{-- <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Left" class="absolute left-0 z-10 object-cover w-8 h-8"> --}}

        <div class="relative z-0 w-full bg-white">
            <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
        </div>

        <!-- Arrow  right -->
        {{-- <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Right" class="absolute right-0 object-cover w-8 h-8 transform -scale-x-100"> --}}
    </div>

    <div class="relative z-12 w-screen flex flex-wrap items-center justify-center">
        <div class="relative flex flex-wrap items-center justify-center h-auto py-10 md:mx-20 -mt-24 md:-mt-32 space-x-2 md:space-x-16 rounded-3xl">
            
            <!-- Wrapper for Left Ornament and Item 1 -->
            <div class="relative flex items-center">
                <img src="{{ asset('images/fknleaf.png') }}" alt="Left Ornament" class="absolute z-0 object-cover w-16 h-auto md:w-auto md:h-auto mb-2 transform -translate-y-1/2 -scale-x-100 -scale-y-100 -left-8 md:-left-28 top-1/2">
                
                <div class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('images/talk.png') }}" alt="Image 1" class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                    <p class="relative text-sm md:text-lg text-gray-800 text-center">Konsultasi</p>
                </div>
            </div>
    
            <!-- Item 2 -->
            <div class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                <img src="{{ asset('images/mastercard.png') }}" alt="Image 2" class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                <p class="relative text-sm md:text-lg text-gray-800 text-center">Kalkulator Zakat</p>
            </div>
    
            <!-- Item 3 -->
            <div class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                <img src="{{ asset('images/mastercard.png') }}" alt="Image 3" class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                <p class="relative text-sm md:text-lg text-gray-800 text-center">Rekenign Donasi</p>
            </div>
    
            <!-- Wrapper for Right Ornament and Item 4 -->
            <div class="relative flex items-center">
                <img src="{{ asset('images/fknleaf.png') }}" alt="Right Ornament" class="absolute z-0 object-cover w-16 h-auto md:w-auto md:h-auto mb-2 transform -translate-y-1/2 -right-8 md:-right-28 top-1/2">
                
                <div class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('images/qr.png') }}" alt="Image 4" class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                    <p class="relative text-sm md:text-lg text-gray-800 text-center">QR Donasi</p>
                </div>
            </div>
        </div>
    </div>
    
    
    


    {{-- campaign --}}
    <div class="flex flex-col items-center py-10 bg-white">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Mari Mulai Berdonasi</h2>
            <div class="relative px-8 pt-4 mt-2">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mx-10 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
        </div>
        <div class="mt-12">
            <button class="px-4 py-2 text-white bg-green-500 rounded-md ">Campaign Lainnya</button>
        </div>
    </div>

    {{-- berita --}}
    <div class="flex flex-col items-center w-full py-10 mt-4 bg-white bg-center bg-cover shadow-md"
        style="background-image: url('{{ asset('images/berita_bg.png') }}');">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Berita</h2>
            <div class="relative px-8 pt-4 mt-2">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 mx-10 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <x-berita-card />
            <x-berita-card />
            <x-berita-card />

        </div>
        <div class="mt-12">
            <button class="px-4 py-2 text-white bg-green-500 rounded-md ">Berita Lainnya</button>
        </div>
    </div>
    {{-- tentang --}}
    <div class="flex flex-col items-center py-10 bg-white mt-28">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Tentang</h2>
            <div class="relative px-8 pt-4 mt-2">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>

        <!-- Container for items -->
        <div class="flex items-start justify-between w-full max-w-4xl mx-20 space-x-20">
            <!-- Item 1 -->
            {{-- <div class="flex flex-col items-center flex-1">
                <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="object-cover mb-4 w-128 h-128">
            </div> --}}

            <!-- Item 2 -->
            <div class="flex flex-col items-start flex-1 text-justify">
                <p class="mb-4 text-xl font-extrabold text-black">Sekilas NU Care-LAZISNU Cilacap</p>
                <p class="mb-4 text-sm text-gray-700">
                    NU Care-LAZISNU adalah rebranding dan/atau sebagai pintu masuk agar masyarakat global mengenal
                    Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU) sebagai lembaga filantropi NU. NU
                    Care-LAZISNU berdiri pada tahun 2004 sebagai sarana untuk membantu masyarakat, sesuai amanat
                    muktamar NU yang ke-31 di Asrama Haji Donohudan, Boyolali, Jawa Tengah. LAZISNU secara
                    yuridis-formal dikukuhkan oleh SK Menteri Agama RI No. 65/2005 untuk melakukan penghimpunan Zakat,
                    Infak, dan Sedekah (ZIS) kepada masyarakat luas.
                    <br><br>
                    NU Care-LAZISNU merupakan lembaga nirlaba milik perkumpulan Nahdlatul Ulama (NU) yang bertujuan
                    untuk berkhidmat dalam rangka membantu kesejahteraan dan kemandirian umat; mengangkat harkat sosial
                    dengan mendayagunakan dana Zakat, Infak, Sedekah (ZIS) dan dana sosial-keagamaan lainnya (DSKL).
                </p>
                <button class="px-4 py-2 text-white bg-green-500 rounded-lg ">Baca Selengkap</button>
            </div>
        </div>
    </div>
    {{-- mitra --}}
    <div class="flex flex-col items-center w-full py-10 mt-4 bg-white bg-center bg-cover shadow-md">
        <!-- Title -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-black">Mitra Kami</h2>
            <div class="relative px-8 pt-4 mt-2">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center block inline mt-4 space-x-8">
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />
            <x-mitra-logo />

        </div>
        <div class="mt-12">
            <button class="px-4 py-2 text-white bg-green-500 rounded-md ">Berita Lainnya</button>
        </div>
    </div>

    {{-- sticky bottom --}}
    <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center md:hidden">
        <div class="inline-flex px-8 py-4 bg-white shadow-2xl rounded-3xl">
            <!-- Item -->
            <div class="flex items-center justify-center space-x-5 ">
                <div class="items-center w-16 h-16 bg-gray-100 rounded-full ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
                <div class="items-center w-16 h-16 bg-gray-100 rounded-full ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
                <div class="items-center w-16 h-16 bg-gray-100 rounded-full ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
