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

        input:checked~.dot {
            transform: translateX(100%);
            background-color: #ffffff;
            /* Change the color when checked */
        }

        input:checked~.block {
            background-color: #4F46E5;
            /* Change the background color when checked */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="env('MIDTRANS_CLIENT_KEY')"></script>
</head>

<body class="flex flex-col h-screen bg-gray-200">
    {{ $slot }}
    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
