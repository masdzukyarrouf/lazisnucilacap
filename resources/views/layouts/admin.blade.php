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
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        .spinner {
            border: 5px solid rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            border-top: 5px solid #3498db;
            width: 42px;
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
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            z-index: 1001;
        }

        .sidebar.open {
            transform: translateX(250px);
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
        }

        .sidebar ul li {
            padding: 10px 0;
        }

        .sidebar ul li a {
            color: #333;
            text-decoration: none;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .overlay.show {
            display: block;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireStyles
</head>

<body class="flex flex-col h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="/admin">Home</a></li>
            <li><a href="/user">User</a></li>
            <li><a href="/admin-donasi">Donasi</a></li>
            <li><a href="/admin-campaign">Campaign</a></li>
            <li><a href="/admin-konfirmasi">Konfirmasi</a></li>
            <li><a href="/admin-berita">Berita</a></li>
            <li><a href="/admin-mitra">Mitra</a></li>
            <li><a href="/gambar_landing">Gambar Landing</a></li>
            <li><a href="/misi">Misi</a></li>
            <li><a href="/visi">Visi</a></li>
            <li><a href="/update-campaign">Update</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" x-data>
                    @csrf
                    <button
                        @click.prevent="if (confirm('Apakah Anda yakin ingin keluar?')) { $el.closest('form').submit(); }">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay"></div>

    <!-- Navbar -->
    <nav class="z-10 p-4 shadow-xl bg-white-800 flex justify-between items-center">
        <button id="menu-toggle" class="text-black focus:outline-none">
            <!-- Hamburger Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
        <div>
            <a href="/">
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-30">
            </a>
        </div>
    </nav>

    <main class="flex flex-col h-screen">
        {{ $slot }}
    </main>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuToggle.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(250px)';
            overlay.classList.add('show');
        });

        overlay.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(-250px)';
            overlay.classList.remove('show');
        });
    </script>
    @livewireScripts
</body>

</html>
