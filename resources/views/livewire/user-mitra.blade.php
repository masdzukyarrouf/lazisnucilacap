<div class="flex justify-center">
    <div class="flex flex-col pb-20 mb-8 bg-gray-100 rounded-lg shadow-md" style="width: 414px;">
        <x-nav-mobile2 title="Mitra Lazisnu Cilacap" />
        <div class="grid grid-cols-1 gap-6 mx-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($mitras as $mitra)
                <div class="shadow-lg">
                    <div class="px-4 py-2">
                        <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Main Picture" class="block w-24 mx-auto mt-2 mb-2">
                    </div>
                    <div class="max-w-xs px-4 py-2 break-words">{{ $mitra->partner_name }}</div>
                </div>
                @endforeach
        </div>
    </div>
</div>
