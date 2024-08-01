<div class="relative flex items-center group">
    <a href="#" class="inline-flex items-center px-3 py-2 text-black rounded hover:text-black">
        {{ $title }}
        @if (!empty($links))
            <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
        @endif
    </a>
    @if (!empty($links))
        <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block mt-2">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" class="block px-4 py-2 hover:text-green-500">{{ $link['text'] }}</a>
            @endforeach
        </div>
    @endif
</div>
{{-- gaguna --}}