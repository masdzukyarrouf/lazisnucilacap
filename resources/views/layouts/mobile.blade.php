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


        /* Custom radio button */
        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 1rem; /* Custom size */
            height: 1rem; /* Custom size */
            border: 2px solid #d1d5db; /* Default border color */
            border-radius: 50%;
            display: inline-block;
            position: relative;
            outline: none;
        }

        input[type="radio"]:checked {
            border-color: #22c55e; /* Green border when checked */
        }

        input[type="radio"]:checked::before {
            content: '';
            width: 0.50rem;
            height: 0.50rem;
            border-radius: 50%;
            background-color: #22c55e; /* Green inner circle */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
       
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="flex flex-col h-screen bg-gray-200">
    {{ $slot }}
    @livewireScripts
</body>
<footer>
    <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center">
        <div class="flex items-center justify-center w-full px-4 py-2 space-x-8 bg-white" style="height: 70px; box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 -2px 4px -2px rgba(0, 0, 0, 0.1);">
            <div class="items-center w-16 rounded-lg h-11">
                <a wire:navigate.hover href="{{ route('landing') }}">
                    <img class="w-full h-auto" src="{{ Request::is('landing') ? asset('images/Frame 1-active.png') : asset('images/Frame 1.png') }}" alt="">
                </a>
            </div>
            <div class="items-center w-16 rounded-lg h-11">
                <a wire:navigate.hover href="{{ route('campaign') }}">
                    <img class="w-full h-auto" src="{{ Request::is('campaigns') ? asset('images/Frame 2-active.png') : asset('images/Frame 2.png') }}" alt="">
                </a>
            </div>
            <div class="items-center w-16 rounded-lg h-11">
                <a wire:navigate.hover href="{{ route('berita') }}">
                    <img class="w-full h-auto" src="{{ Request::is('berita') || Request::is('detail-berita/*') ? asset('images/Frame 3-active.png') : asset('images/Frame 3.png') }}" alt="">
                </a>
            </div>
            <div class="items-center w-16 rounded-lg h-11">
                <a wire:navigate.hover href="{{ route('zakat') }}">
                    <img class="w-full h-auto" src="{{ request()->is('zakat') || request()->is('infak') || request()->is('wakaf') ? asset('images/Frame 5-active.png') : asset('images/Frame 5.png') }}" alt="">
                </a>
            </div> 
            <div class="items-center w-16 rounded-lg h-11">
                <a wire:navigate.hover href="{{ route('profile.index') }}">
                    <img class="w-full h-auto" src="{{ request()->is('profile') || request()->is('account') || request()->is('history') || request()->is('transaction') ? asset('images/Frame 4-active.png') : asset('images/Frame 4.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
</html>
