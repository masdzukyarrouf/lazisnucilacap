<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
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
</html>
