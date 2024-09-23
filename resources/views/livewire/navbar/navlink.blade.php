<div class="relative flex items-center group navlink">
    <div class="font-semibold text-gray-900 w-full">
        @if ($isDropdown == 'true')
            <a wire:navigate.hover
                class="flex items-center justify-between py-2 text-gray-900 rounded hover:text-green-500">
                {{ $title }}
                @if ($isDropdown == 'true')
                    <img src="{{ asset('images/arrow_down.png') }}" alt="arrow down" class="w-4 h-4 ml-1">
                @endif
            </a>
        @else
            <a wire:navigate.hover href="{{ $url }}"
                class="inline-flex items-center py-2 text-black rounded hover:text-green-500">
                {{ $title }}
            </a>

        @endif
    </div>

    @if ($isDropdown == true && !empty($links))
        <div
            class="absolute z-10 hidden text-xs md:text-lg text-black bg-white md:bg-gray-100 rounded shadow-lg group-hover:block top-full right-3/4 -mt-8 md:mt-0 mr-10 md:mr-0 md:left-0 w-[240px]">
            <ul class="space-y-1">
                @foreach ($links as $link)
                    <li>
                        <a wire:navigate.hover href="{{ $link['href'] }}"
                            class="break-words block px-4 py-2 hover:text-green-500">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
