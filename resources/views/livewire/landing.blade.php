<div>
    <x-navbar></x-navbar>
    <div class="relative flex-grow flex items-center justify-center mt-1">
        <!-- Arrow  left -->
        <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Left" class="absolute z-10 left-0 h-8 w-8 object-cover">

        <div class="relative z-0 bg-white">
            <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
        </div>

        <!-- Arrow  right -->
        <img src="{{ asset('images/arrowX.png') }}" alt="Arrow Right"
            class="absolute right-0 h-8 w-8 object-cover transform -scale-x-100">
    </div>
    <div class="relative z-10">
        <div class="absolute top-0 left-0 right-0 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 rounded-3xl py-10 mx-20 bg-white shadow-lg"
            style="margin-top: -120px">
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
            <div class="flex flex-col items-center flex-1">
                <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="w-128 h-128 object-cover mb-4">
            </div>

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

    {{-- zakat --}}
    <div class="flex flex-col items-center py-10  bg-white mt-4 w-full bg-cover bg-center shadow-md"
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
    </div>

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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/campaign_1.png') }}" alt="Picture" class="w-full object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Title 1</h2>
                    <p class="text-gray-600 mt-1">Location 1</p>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="mt-2 text-gray-700">6.000</p>
                    </div>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Donate</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/campaign_1.png') }}" alt="Picture" class="w-full object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Title 1</h2>
                    <p class="text-gray-600 mt-1">Location 1</p>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="mt-2 text-gray-700">6.000</p>
                    </div>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Donate</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('images/campaign_1.png') }}" alt="Picture" class="w-full object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">Title 1</h2>
                    <p class="text-gray-600 mt-1">Location 1</p>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="mt-2 text-gray-700">6.000</p>
                    </div>
                    <button class="mt-4 w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Donate</button>
                </div>
            </div>
            
            
        </div>

    </div>



</div>
