    <div>
        <nav class="bg-green-400 p-4 shadow-2xl z-10">
            <div class="container mx-auto flex items-center justify-end">
                <div class=" hidden md:flex space-x-4">
                    <x-navlink title="Home" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-black rounded-lg py-2 px-4 hover:text-green-500">Logout</button>
                    </form>
                </div>

            </div>
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </nav>

        <!-- Sidebar and Main Content -->
        <div class="flex z-0">
            <!-- Sidebar -->
            <aside id="sidebar"
                class="flex flex-col fixed inset-y-0 left-0 w-64 bg-green-400 tex shadow-2xlt-white transform -translate-x-full md:translate-x-0 transition-transform duration-200">
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-45 mt-8 ml-4 shadow-2xl">
                <div class="p-4 mt-8">
                    <ul class="mt-4">
                        <x-navlink title="User" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Donasi" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Campaign" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Berita" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Mitra" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Misi" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />
                        <x-navlink title="Visi" url="/" class=" rounded-lg py-2 px-4 sm:hover:text-white" />

                        
                    </ul>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6 ml-64">
                <h1 class="text-2xl font-bold">Main Content</h1>
                <p>Here is the main content area.</p>
            </main>
        </div>
    </div>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
