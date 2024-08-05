<div class="relative flex items-center group">
    <a wire:navigate.hover href="{{ $url }}" 
       class="inline-flex items-center px-2 py-2 text-black rounded hover:text-green-500 {{ $class ? $class : '' }}">
        {{ $title }}
        @if ($isDropdown)
            <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
        @endif
    </a>
    @if ($isDropdown && !empty($links))
        <div class="absolute z-10 hidden text-black bg-gray-100 rounded shadow-lg group-hover:block top-full left-0 w-max">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" class="block px-4 py-2 hover:text-green-500">{{ $link['text'] }}</a>
            @endforeach
        </div>
    @endif
</div>
