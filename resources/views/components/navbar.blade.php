<nav class="bg-white p-4 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="h-8 w-auto">
        <div class="hidden sm:flex space-x-4">
            <div class="relative group flex items-center">
                <a href="#"
                    class="text-black  hover:text-black px-3 py-2 rounded inline-flex items-center">
                    Tentang
                    <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="ml-1 h-4 w-4">
                </a>
                <div class="absolute hidden group-hover:block bg-gray-100 text-black mt-44 rounded shadow-lg z-10">
                    <a href="#" class="block px-4 py-2  hover:text-green-500">Subitem 1</a>
                    <a href="#" class="block px-4 py-2  hover:text-green-500">Subitem 2</a>
                </div>
            </div>
            <div class="relative group">
                <a href="#" class="block text-black  hover:text-green-500 px-3 py-2 rounded">Campaign</a>
            </div>

            <div class="relative group">
                <a href="#" class="block text-black  hover:text-green-500 px-3 py-2 rounded">Berita</a>
            </div>

            <div class="hidden sm:flex space-x-4">
                <div class="relative group flex items-center">
                    <a href="#"
                        class="text-black  hover:text-black px-3 py-2 rounded inline-flex items-center">
                        layanan
                        <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="ml-1 h-4 w-4">
                    </a>
                    <div class="absolute hidden group-hover:block bg-gray-100 text-black mt-44 rounded shadow-lg z-10">
                        <a href="#" class="block px-4 py-2  hover:text-green-500">Subitem 1</a>
                        <a href="#" class="block px-4 py-2  hover:text-green-500">Subitem 2</a>
                    </div>
                </div>
                <div class="relative group">
                    <a href="#"
                        class="block text-white bg-green-500 hover:border-green-500 hover:bg-white hover:text-green-500 border px-3 py-2 rounded">Masuk</a>
                </div>
                <div class="relative group">
                    <a href="#"
                        class="block text-green-500 border border-green-500 hover:bg-green-500 hover:text-white px-3 py-2 rounded">Daftar</a>
                </div>
            </div>
            <div class="sm:hidden flex items-center">
                <button id="menu-btn" class="text-gray-300 hover:text-black focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
</nav>