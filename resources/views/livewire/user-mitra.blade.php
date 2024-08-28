<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Mitra Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen px-4 py-4 pb-20 mb-8 bg-gray-100 shadow-md" style="width: 414px;">
        <h2 class="pb-5 font-semibold text-green-500">Mitra Kami</h2>
        <div class="border-4 border-green-500 rounded-xl ">
            <div class="grid grid-cols-1 gap-2 mx-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($mitras as $mitra)
                    <div class="flex items-center">
                        <div class="px-2 py-2">
                            <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Main Picture" class="block w-24 mx-auto mt-2 mb-2">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
