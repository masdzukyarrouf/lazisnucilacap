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
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @livewireStyles
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="env('MIDTRANS_CLIENT_KEY')"></script>
</head>

<body class="flex flex-col h-screen bg-gray-200">
    {{ $slot }}
    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
            function handleLike(doaId) {
        // Get elements
        const likeCountElem = document.getElementById(`like-count-${doaId}`);
        const likeButtonElem = document.getElementById(`like-button-${doaId}`);

        // Toggle like state and update UI immediately
        const liked = likeButtonElem.classList.toggle('text-rose-600');
        likeButtonElem.querySelector('svg').classList.toggle('text-red-400');

        // Update the like count
        let likeCount = parseInt(likeCountElem.textContent);
        likeCountElem.textContent = liked ? `${likeCount + 1} orang` : `${likeCount - 1} orang`;

        // Trigger Livewire like function
        // Livewire.dispatch('like', doaId);
    }
    document.getElementById('no_telp').addEventListener('input', function (e) {
        let value = e.target.value;
        value = value.replace(/[^0-9+]/g, '');
        e.target.value = value;
    });
    </script>

</body>

</html>
