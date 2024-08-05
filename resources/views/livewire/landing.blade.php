<div>
    <x-navbar></x-navbar>

    <div class="relative flex-grow flex items-center justify-center mt-1">
        <!-- Arrow  left -->
        {{-- <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Left" class="absolute z-10 left-0 h-8 w-8 object-cover"> --}}

        <div class="relative z-0 bg-white w-full">
            <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
        </div>

        <!-- Arrow  right -->
        {{-- <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Right" class="absolute right-0 h-8 w-8 object-cover transform -scale-x-100"> --}}
    </div>

    <div class="relative z-12">
        <div class="h-auto relative flex flex-wrap space-x-16 items-center justify-center -mt-32 rounded-3xl py-10 mx-20">
            
            <!-- Wrapper for Left Ornament and Item 1 -->
            <div class="relative flex items-center">
                <img src="{{ asset('images/fknleaf.png') }}" alt="Left Ornament" class="z-0 transform -scale-x-100 -scale-y-100 w-auto h-auto object-cover absolute -left-28 top-1/2 transform -translate-y-1/2 z-0 mb-2">
                
                <div class="flex flex-col items-center bg-white rounded-lg shadow-2xl p-8 relative ">
                    <img src="{{ asset('images/talk.png') }}" alt="Image 1" class="w-24 h-24 object-cover mb-2 relative ">
                    <p class="text-gray-800 font-semibold relative ">Konsultasi</p>
                </div>
            </div>
    
            <!-- Item 2 -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-2xl p-8 relative ">
                <img src="{{ asset('images/calculator.png') }}" alt="Image 2" class="w-24 h-24 object-cover mb-2 relative ">
                <p class="text-gray-800 font-semibold relative ">Kalkulator Zakat</p>
            </div>
    
            <!-- Item 3 -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-2xl p-8 relative ">
                <img src="{{ asset('images/mastercard.png') }}" alt="Image 3" class="w-24 h-24 object-cover mb-2 relative ">
                <p class="text-gray-800 font-semibold relative ">Rekenign Donasi</p>
            </div>
    
            <!-- Wrapper for Right Ornament and Item 4 -->
            <div class="relative flex items-center">
                <img src="{{ asset('images/fknleaf.png') }}" alt="Right Ornament" class="z-0 w-auto h-auto object-cover absolute -right-28 top-1/2 transform -translate-y-1/2 z-0 mb-2">
                
                <div class="flex flex-col items-center bg-white rounded-lg shadow-2xl p-8 relative ">
                    <img src="{{ asset('images/qr.png') }}" alt="Image 4" class="w-24 h-24 object-cover mb-2 relative ">
                    <p class="text-gray-800 font-semibold relative ">QR Donasi</p>
                </div>
            </div>
        </div>
    </div>
    
    
    

    {{-- <div class="relative z-10">
        <div class="absolute top-0 left-0 right-0 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 -mt-32 rounded-3xl py-10 mx-20 bg-white shadow-lg"
            >
            <!-- Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/penerima_manfaat.png') }}" alt="Image 1"
                    class="w-24 h-24 object-cover mb-2">
                <p class="text-green-500 font-semibold mb-1">5000</p>
                <p class="text-gray-700">Penerima Manfaat</p>
            </div>
            <!-- Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/penghimpunan.png') }}" alt="Image 2" class="w-24 h-24 object-cover mb-2">
                <p class="text-green-500 font-semibold mb-1">Rp 2.000.000.000.000</p>
                <p class="text-gray-700">Penghimpunan</p>
            </div>
            <!-- Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/penyaluran.png') }}" alt="Image 3" class="w-24 h-24 object-cover mb-2">
                <p class="text-green-500 font-semibold mb-1">Rp 2.000.000.000.000</p>
                <p class="text-gray-700">Penyaluran</p>
            </div>
            <!-- Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/donatur.png') }}" alt="Image 4" class="w-24 h-24 object-cover mb-2">
                <p class="text-green-500 font-semibold mb-1">5000</p>
                <p class="text-gray-700">Donatur</p>
            </div>
        </div>
    </div> --}}



    

    {{-- zakat --}}
    {{-- <div class="flex flex-col items-center py-10  bg-white mt-4 w-full bg-cover bg-center shadow-md"
        style="background-image: url('{{ asset('images/zakat_bg.png') }}');">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-green-500">Apakah Anda masih bingung dengan cara berzakat?</h2>
        </div>

        <!-- Container for items -->
        <div class="flex items-start justify-around w-full max-w-4xl mx-20 space-x-20 relative"
            style="margin-top: -20px;">

            <!-- Overlay container for content -->
            <div class=" flex items-start justify-center w-full  mx-14">
                <!-- Item 1 -->
                <div class="  items-center p-4 rounded-lg">
                    <a href="" class="text-white bg-green-500 px-4 py-2 rounded-lg"> Konsultasi Zakat</a>
                </div>

                <!-- Item 2 -->
                <div class="  items-center p-4 rounded-lg">
                    <a href="" class="text-white bg-green-500 px-4 py-2 rounded-lg"> Kalkulator Zakat</a>
                </div>

                <!-- Item 3 -->
                <div class="  items-center p-4 rounded-lg">
                    <a href="" class="text-white bg-green-500 px-4 py-2 rounded-lg"> Konfirmasii Zakat</a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- campaign --}}
    <div class="flex flex-col items-center py-10 bg-white">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Mari Mulai Berdonasi</h2>
            <div class="relative pt-4 mt-2 px-8">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-10">
            <!-- Card 1 -->
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
            <x-campaign-card />
        </div>
        <div class="mt-12">
            <button class="rounded-md text-white bg-green-500 px-4 py-2 ">Campaign Lainnya</button>
        </div>
    </div>

    {{-- berita --}}
    <div class="flex flex-col items-center py-10  bg-white mt-4 w-full bg-cover bg-center shadow-md"
        style="background-image: url('{{ asset('images/berita_bg.png') }}');">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Berita</h2>
            <div class="relative pt-4 mt-2 px-8">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-10">
            <!-- Card 1 -->
            <x-berita-card />
            <x-berita-card />
            <x-berita-card />

        </div>
        <div class="mt-12">
            <button class="rounded-md text-white bg-green-500 px-4 py-2 ">Berita Lainnya</button>
        </div>
    </div>
    {{-- tentang --}}
    <div class="flex flex-col items-center py-10 bg-white mt-28">
        <!-- Title -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-black">Tentang</h2>
            <div class="relative pt-4 mt-2 px-8">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>

        <!-- Container for items -->
        <div class="flex items-start justify-between w-full max-w-4xl mx-20 space-x-20">
            <!-- Item 1 -->
            {{-- <div class="flex flex-col items-center flex-1">
                <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="w-128 h-128 object-cover mb-4">
            </div> --}}

            <!-- Item 2 -->
            <div class="flex flex-col flex-1 items-start text-justify">
                <p class="text-black font-extrabold text-xl mb-4">Sekilas NU Care-LAZISNU Cilacap</p>
                <p class="text-gray-700 text-sm mb-4">
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
                <button class="rounded-lg text-white bg-green-500 px-4 py-2 ">Baca Selengkap</button>
            </div>
        </div>
    </div>
    {{-- mitra --}}
    <div class="flex flex-col items-center py-10  bg-white mt-4 w-full bg-cover bg-center shadow-md">
        <!-- Title -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-black">Mitra Kami</h2>
            <div class="relative pt-4 mt-2 px-8">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                </div>
            </div>
        </div>
        <div class="space-x-8 mt-4  flex flex-wrap justify-center block inline">
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
            <button class="rounded-md text-white bg-green-500 px-4 py-2 ">Berita Lainnya</button>
        </div>
    </div>

    {{-- sticky bottom --}}
    <div class="flex justify-center fixed bottom-0 left-0 right-0 z-40 md:hidden">
        <div class="rounded-3xl bg-white shadow-2xl inline-flex px-8 py-4">
            <!-- Item -->
            <div class="flex justify-center items-center space-x-5 ">
                <div class="w-16 h-16 bg-gray-100 rounded-full items-center ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
                <div class="w-16 h-16 bg-gray-100 rounded-full items-center ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
                <div class="w-16 h-16 bg-gray-100 rounded-full items-center ">
                    <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
