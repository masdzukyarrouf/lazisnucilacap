<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Kebijakan Mutu (MANTAP)" />
    <div class="flex flex-col h-full min-h-screen bg-white shadow-md" style="width: 414px;">
        <div class="px-4 py-4">
            <h1 class="mb-2 text-green-500">Kebijakan Mutu Manajemen</h1>
            <img src="{{ asset('images/123.png') }}" alt="">
            <div class="mt-4">
                @foreach ($Kebijakans as $Kebijakan)
                    <div class="flex items-center">
                         <img src="{{ asset('storage/' . $Kebijakan->kebijakan) }}" alt="Main Picture">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>