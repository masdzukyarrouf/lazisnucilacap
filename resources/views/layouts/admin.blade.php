<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- kirim title lewat class, default app name di env --}}
    <title>{{ str_replace('_', ' ', $title ?? config('app.name')) }}</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body class="flex flex-col h-screen ">
    <nav class="bg-gray-800 p-4 shadow-2xl z-10">
        <div class="container flex items-center justify-between">
            <div>
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt=""
                    class="w-30">
            </div>
            <div class="">
                <ul class=" flex  space-x-1">
                    <x-navlink title="Home" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Admin" url="/admin" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="User" url="/user" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Donasi" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Campaign" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Berita" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Mitra" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Misi" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <x-navlink title="Visi" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-black sm:hover:bg-green-600 bg-green-400" />
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-green-400 bg-black rounded-lg px-3 py-1 hover:bg-green-600">Logout</button>
                    </form>
                </ul>
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

        <main class="flex flex-col h-screen">
            {{ $slot }}

        </main>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    
        document.getElementById('close-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.add('-translate-x-full');
        });
    </script>
    @livewireScripts
</body>

</html>
