<div >
    <x-navbar></x-navbar>


        <div class="relative flex items-center justify-center mt-1">
            <div class="relative z-0 w-full bg-white">
                <img src="{{ asset('images/anak_yatim.png') }}" alt="Anak Yatim" class="object-cover w-full h-full">
            </div>
        </div>

        <div class="relative z-12 w-screen flex flex-wrap items-center justify-center">
            <div
                class="relative flex flex-wrap items-center justify-center h-auto py-10 md:mx-20 -mt-24 md:-mt-32 space-x-2 md:space-x-16 rounded-3xl">
                <!-- Wrapper for Left Ornament and Item 1 -->
                <div class="relative flex items-center">
                    <img src="{{ asset('images/fknleaf.png') }}" alt="Left Ornament"
                        class="absolute z-0 object-cover w-16 h-auto md:w-auto md:h-auto mb-2 transform -translate-y-1/2 -scale-x-100 -scale-y-100 -left-8 md:-left-28 top-1/2">
                    <div
                        class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                        <img src="{{ asset('images/talk.png') }}" alt="Image 1"
                            class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                        <p class="relative text-sm md:text-lg text-gray-800 text-center">Konsultasi</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('images/mastercard.png') }}" alt="Image 2"
                        class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                    <p class="relative text-sm md:text-lg text-gray-800 text-center">Kalkulator Zakat</p>
                </div>

                <!-- Item 3 -->
                <div
                    class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('images/mastercard.png') }}" alt="Image 3"
                        class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                    <p class="relative text-sm md:text-lg text-gray-800 text-center">Rekenign Donasi</p>
                </div>

                <!-- Wrapper for Right Ornament and Item 4 -->
                <div class="relative flex items-center">
                    <img src="{{ asset('images/fknleaf.png') }}" alt="Right Ornament"
                        class="absolute z-0 object-cover w-16 h-auto md:w-auto md:h-auto mb-2 transform -translate-y-1/2 -right-8 md:-right-28 top-1/2">
                    <div
                        class="relative flex flex-col items-center w-24 h-28 p-4 md:w-auto md:h-auto md:p-8 bg-white rounded-lg shadow-2xl">
                        <img src="{{ asset('images/qr.png') }}" alt="Image 4"
                            class="relative object-cover w-8 h-8 md:w-24 md:h-24 mb-2">
                        <p class="relative text-sm md:text-lg text-gray-800 text-center">QR Donasi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campaign Section -->
        <div class="flex flex-col items-center py-10 bg-white">
            <!-- Title -->
            <div class="mb-8 w-full flex items-center justify-between">
                <div class="relative px-12 flex flex-col justify-between">
                    <h2 class="text-lg font-semibold text-green-600">Campaign Lazisnu Cilacap</h2>
                    <h2 class="text-sm text-black">Berikut merupakan campaign terbaru Lazisnu Cilacap</h2>
                </div>
                <button class="relative px-4 mr-12 py-2 text-white rounded-md bg-green-500 hover:bg-green-600">
                    Campaign Lainya
                </button>
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
        </div>

        <!-- Berita Section -->
        <div class="flex flex-col items-center w-full py-10 mt-4 bg-gray-50 bg-opacity-90 bg-center bg-cover shadow-md">
            <!-- Title -->
            <div class="mb-8 w-full flex items-center justify-between">
                <div class="relative px-12 flex flex-col justify-between">
                    <h2 class="text-lg font-semibold text-green-600">Berita Lazisnu Cilacap</h2>
                    <h2 class="text-sm text-black">Berikut merupakan berita terbaru Lazisnu Cilacap</h2>
                </div>
                <button class="relative px-4 mr-12 py-2 text-white rounded-md bg-green-500 hover:bg-green-600">
                    Berita Lainya
                </button>
            </div>

            <div class="grid grid-cols-1 gap-6 mx-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <x-berita-card />
                <x-berita-card />
                <x-berita-card />
            </div>
        </div>

        <!-- Tentang Section -->
        <div class="flex flex-col items-center py-10 bg-white mt-28">
            <!-- Title -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-black">Tentang</h2>
                <div class="relative px-8 pt-4 mt-2">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-white via-green-700 to-white">
                    </div>
                </div>
            </div>

            <!-- Container for items left -->
            <div class="flex items-start justify-between w-full max-w-4xl mx-20 space-x-20">
                <!-- Item 1 -->
                <div class="flex flex-col items-center flex-1">
                    <img src="{{ asset('images/tentang.png') }}" alt="Image 1" class="object-cover mb-4 w-128 h-128">
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-start flex-1 text-justify">
                    <div>
                        <p class="mb-4 text-xl font-extrabold text-green-600">Sekilas NU Care-LAZISNU Cilacap</p>
                        <p class="mb-4 text-md text-gray-700">
                            Terima kasih banyak kami ucapkan kepada para muzakki, munfiq, donatur atas semua zakat,
                            infaq,
                            sedekah atas donasinya yang telah diamanatkan melalui NU Care Lazisnu Cilacap.
                        </p>
                    </div>
                    <div class="w-full flex flex-col justify-center">
                        <p class="mb-4 text-lg font-semibold text-black text-center">Terima kasih kepada Sejumlah</p>
                        <div class="flex flex-row justify-center">
                            <div class="relative flex flex-col items-center w-24 h-24 p-4 md:w-60 md:h-auto md:p-8">
                                <img src="{{ asset('images/talk.png') }}" alt="Image 1"
                                    class="relative w-8 h-8 md:w-16 md:h-16 mb-2">
                                <p class="relative text-sm md:text-md font-semibold text-green-600 text-center">41.124
                                    muzakki<br>NU Care Lazisnu Cilacap</p>
                            </div>
                            <div class="relative flex flex-col items-center w-24 h-24 p-4 md:w-60 md:h-auto md:p-8">
                                <img src="{{ asset('images/talk.png') }}" alt="Image 1"
                                    class="relative w-8 h-8 md:w-16 md:h-16 mb-2">
                                <p class="relative text-sm md:text-md font-semibold text-green-600 text-center">64.712
                                    Munfiq<br>NU Care Lazisnu Cilacap</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mitra Section -->
        <div class="flex flex-col items-center w-full py-10 mt-4 bg-white bg-center bg-cover shadow-md">
            <!-- Title -->
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-green-600">Mitra Kami</h2>
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
                <button class="px-4 py-2 text-white bg-green-500 rounded-md">Berita Lainnya</button>
            </div>
        </div>
        <!-- Sticky Bottom -->
        <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center md:hidden">
            <div class="inline-flex px-8 py-4 bg-white shadow-2xl rounded-3xl">
                <div class="flex items-center justify-center space-x-5">
                    <div class="items-center w-16 h-16 bg-gray-100 rounded-full">
                        <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                    </div>
                    <div class="items-center w-16 h-16 bg-gray-100 rounded-full">
                        <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                    </div>
                    <div class="items-center w-16 h-16 bg-gray-100 rounded-full">
                        <img src="{{ asset('images/logo_pnc.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
</div>
