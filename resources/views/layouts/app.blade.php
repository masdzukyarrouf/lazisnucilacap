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
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .sidebar-open {
            transform: translateX(0);
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        nav {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="flex flex-col h-screen">
    {{ $slot }}
</body>
<footer class="bg-gray-200 text-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap ">
            <!-- Column 1 -->
            <div class="w-4/12   mb-4 md:mb-0">
                <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-auto h-12">
                <p class="text-gray-700 text-sm mb-8">Lazisnucilacap.com adalah situs resmi Lembaga Amil Zakat, Infaq
                    dan Shadaqah Nahdlatul Ulama (LAZISNU) Kabupaten Cilacap. Saran dan kritik :
                    nucarelazisnukabupatencilacap@gmail.com</p>
                <ul class="flex space-x-8">
                    <li><a href="/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="" class="hover:scale-125">
                        </a>
                    </li>
                    <li><a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/youtube.png') }}" alt="" class="hover:scale-125">
                        </a>
                    </li>
                    <li><a href="/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/facebook.png') }}" alt="" class="hover:scale-125">
                        </a>
                    </li>
                    <li><a href="/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('images/instagram.png') }}" alt="" class="hover:scale-125">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Column 2 -->
            <div class="w-2/12   mb-4 md:mb-0">
                <h2 class="text-gray-800 text-xl font-semibold mb-4">Informasi</h2>
                <ul class="text-sm">
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Lazisnu Cilacap</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Pilar & Program</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Layanan</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Ziswaf</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Campaign</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-lg ">Berita</a></li>
                </ul>
            </div>
            <!-- Column 3 -->
            <div class="w-3/12   mb-4 md:mb-0">
                <h2 class="text-lg text-gray-800 font-semibold mb-4">Alamat</h2>
                <p class="text-gray-700 text-sm mb-4">Jl. Masjid No. 09 Sidanegara
                    <br>
                    Cilacap Tengah-Cilacap
                    <br>
                    Kode pos : 53223
                    <br>
                    Telp : (0282) 539 5195
                    <br>
                    Hp/WA : 081228221010
                </p>

                <div class="">
                    <button class="rounded-md text-white bg-green-500 px-4 py-2 ">Berita Lainnya</button>
                </div>

            </div>
            <!-- Column 4 -->
            <div class="w-3/12 mb-4 md:mb-0">
                <h2 class="text-lg text-gray-800 font-semibold mb-4">NU Care-Lazisnu Cilacap</h2>
                <div class="w-40 bg-white h-40 rounded-lg">
                    map
                </div>
            </div>
            <div class="w-full h-px bg-gray-300 mt-8 ">
            </div>
            <div class="w-full mt-4">
                <h2 class="text-sm text-gray-600 text-center">Copyright © 2024 - NU Care Lazisnu Cilacap</h2>
            </div>

        </div>
    </div>
</footer>

</html>
