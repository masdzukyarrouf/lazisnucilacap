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
        .spinner-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px; /* Adjust as needed */
        background-color: rgba(0, 0, 0, 0.1); /* Light gray background for contrast */
        border-radius: 8px; /* Rounded corners */
        padding: 20px;
        position: fixed; /* Fixed position to cover the entire viewport */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); /* Center the spinner */
        z-index: 1000; /* Ensure it appears above other content */
    }

    .spinner {
        border: 5px solid rgba(0, 0, 0, 0.2); /* Light border for background */
        border-radius: 50%;
        border-top: 5px solid #3498db; /* Blue border for spinner */
        width: 42px; /* Increased size for visibility */
        height: 42px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .spinner-text {
        margin-top: 15px; /* Spacing between spinner and text */
        font-size: 18px; /* Larger text for better readability */
        font-weight: bold; /* Bold text for emphasis */
        color: #333; /* Dark color for high contrast */
    }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body class="flex flex-col h-screen ">
    <nav class="z-10 p-4 bg-gray-800 shadow-2xl">
        <div class="container flex items-center justify-between">
            <div>
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt=""
                    class="w-30">
            </div>
            <div class="">
                <ul class="flex space-x-1 ">
                    <x-navlink title="Home" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Admin" url="/admin" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="User" url="/user" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Donasi" url="/admin-donasi" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Campaign" url="/admin-campaign" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Berita" url="/admin-berita" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Mitra" url="/admin-mitra" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Misi" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <x-navlink title="Visi" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-white" />
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-3 py-1 rounded-lg sm:hover:text-white">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
        <button id="menu-toggle" class="text-white md:hidden focus:outline-none">
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
