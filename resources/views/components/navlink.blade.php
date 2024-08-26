<div class="relative flex items-center group">
    <a wire:navigate.hover href="{{ $url }}" 
       class="inline-flex items-center py-2 text-black rounded hover:text-green-500 {{ $class ? $class : '' }}">
        {{ $title }}
        @if ($isDropdown)
            <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
        @endif
    </a>
    @if ($isDropdown && !empty($links))
        <div class="absolute z-10 hidden text-xs md:text-lg text-black bg-gray-100 rounded shadow-lg group-hover:block top-full right-3/4 mr-14 md:mr-0 md:left-0 w-[240px]">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" class=" break-words block px-4 py-2 hover:text-green-500 ">{{ $link['text'] }}</a>
            @endforeach
        </div>
    @endif
</div>
