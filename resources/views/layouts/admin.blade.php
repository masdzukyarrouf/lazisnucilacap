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
            height: 80px;
            /* Adjust as needed */
            background-color: rgba(0, 0, 0, 0.1);
            /* Light gray background for contrast */
            border-radius: 8px;
            /* Rounded corners */
            padding: 20px;
            position: fixed;
            /* Fixed position to cover the entire viewport */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Center the spinner */
            z-index: 1000;
            /* Ensure it appears above other content */
        }

        .spinner {
            border: 5px solid rgba(0, 0, 0, 0.2);
            /* Light border for background */
            border-radius: 50%;
            border-top: 5px solid #3498db;
            /* Blue border for spinner */
            width: 42px;
            /* Increased size for visibility */
            height: 42px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .spinner-text {
            margin-top: 15px;
            /* Spacing between spinner and text */
            font-size: 18px;
            /* Larger text for better readability */
            font-weight: bold;
            /* Bold text for emphasis */
            color: #333;
            /* Dark color for high contrast */
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body class="flex flex-col h-screen ">
    <nav class="z-10 p-4 shadow-xl bg-white-800">
        <!-- Modal -->
        <div id="logoutModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
            <div class="w-1/3 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="mb-4 text-lg font-semibold">Confirm Logout</h2>
                <p class="mb-4">Apakah Kamu Yakin ingin keluar?</p>
                <div class="flex justify-end">
                    <button id="cancelButton" class="px-4 py-2 mr-2 bg-gray-300 rounded-lg">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-white bg-green-600 rounded-lg">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container flex items-center justify-between">
            <div>
                <a href="/">
                    <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-30">
                </a>
            </div>
            <div class="">
                <ul class="flex space-x-1 ">
                    {{-- Remove Home in Navbar --}}
                    {{-- <x-navlink title="Home" url="/" class="rounded-lg md:px-3 md:py-1 sm:hover:text-green" /> --}}
                    {{-- Change Admin to Home --}}
                    <x-navlink 
                        title="Home" 
                        url="/admin" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('admin') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="User" 
                        url="/user" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('user') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Donasi" 
                        url="/admin-donasi" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('admin-donasi') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Campaign" 
                        url="/admin-campaign" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('admin-campaign') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Berita" 
                        url="/admin-berita" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('admin-berita') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Mitra" 
                        url="/admin-mitra" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('admin-mitra') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Gambar Landing" 
                        url="/gambar_landing" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('gambar_landing') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Misi" 
                        url="/misi" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('/misi') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />
                    <x-navlink 
                        title="Visi" 
                        url="/visi" 
                        class="rounded-lg md:px-3 md:py-1 {{ request()->is('/visi') ? 'text-green-500' : '' }} sm:hover:text-green" 
                    />

                    {{-- alalal --}}
                    <button id="logoutButton" class="px-3 py-1 rounded-lg sm:hover:text-green">Logout</button>
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
        const logoutButton = document.getElementById('logoutButton');
        const logoutModal = document.getElementById('logoutModal');
        const cancelButton = document.getElementById('cancelButton');
        // Show the modal when the logout button is clicked
        logoutButton.addEventListener('click', () => {
            logoutModal.classList.remove('hidden');
        });

        // Hide the modal when the cancel button is clicked
        cancelButton.addEventListener('click', () => {
            logoutModal.classList.add('hidden');
        });
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
