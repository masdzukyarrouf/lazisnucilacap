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
            margin: 0;
        }

        nav {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
        }

       
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body class="flex flex-col h-screen">
    {{ $slot }}
    @livewireScripts
</body>
<footer>
    <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center">
        <div class="flex items-center justify-center px-8 py-4 space-x-8 bg-white shadow-2xl rounded-3xl"  style="width: 414px; height: 67px">
                        
            <div class="items-center w-16 h-auto rounded-lg">
                <img src="{{ asset('images/Frame 1.png') }}" alt="">
            </div>
            <div class="items-center w-16 h-auto rounded-lg">
                <img src="{{ asset('images/Frame 2.png') }}" alt="">
            </div>
            <div class="items-center w-16 h-auto rounded-lg">
                <img src="{{ asset('images/Frame 3.png') }}" alt="">
            </div>
            <div class="items-center w-16 h-auto rounded-lg">
                <img src="{{ asset('images/Frame 5.png') }}" alt="">
            </div>
            <div class="items-center w-16 h-auto rounded-lg">
                <img src="{{ asset('images/Frame 4.png') }}" alt="">
            </div>
        </div>
    </div>
</footer>

</html>
