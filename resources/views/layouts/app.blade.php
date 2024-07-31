<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NU Cilacap</title>
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
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap ">
                <!-- Column 1 -->
                <div class="w-4/12  px-4 mb-4 md:mb-0">
                    <img src="{{ asset('images/cooler_logo_lazisnu.png') }}" alt="" class="w-auto h-12">
                    <p class="text-gray-700 text-sm mb-8">Lazisnucilacap.com adalah situs resmi Lembaga Amil Zakat, Infaq dan Shadaqah Nahdlatul Ulama (LAZISNU) Kabupaten Cilacap. Saran dan kritik : nucarelazisnukabupatencilacap@gmail.com</p>
                    <ul class="flex space-x-4">
                        <li><img src="{{ asset('images/phone.png') }}" alt=""></li>
                        <li><img src="{{ asset('images/youtube.png') }}" alt=""></li>
                        <li><img src="{{ asset('images/facebook.png') }}" alt=""></li>
                        <li><img src="{{ asset('images/instagram.png') }}" alt=""></li>
                    </ul>
                </div>
                <!-- Column 2 -->
                <div class="w-2/12  px-4 mb-4 md:mb-0">
                    <h2 class="text-lg font-semibold mb-4">Column 2</h2>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 1</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 2</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 3</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 4</a></li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div class="w-2/12  px-4 mb-4 md:mb-0">
                    <h2 class="text-lg font-semibold mb-4">Column 3</h2>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 1</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 2</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 3</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 4</a></li>
                    </ul>
                </div>
                <!-- Column 4 -->
                <div class="w-4/12  px-4">
                    <h2 class="text-lg font-semibold mb-4">Column 4</h2>
                    <ul>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 1</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 2</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 3</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</html>
