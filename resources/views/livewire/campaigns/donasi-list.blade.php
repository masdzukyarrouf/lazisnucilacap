<div class="w-full max-w-[414px] mx-auto bg-white h-auto">
    <x-nav-mobile2 title="List Donasi Campaign" />
    <div x-data="{ load: false }" x-init="load = true" x-show="load" wire:init="loadDonasis">

        @if ($donasis && $donasis->isEmpty())
            <div class="px-4 py-60 text-center ">
                <p>
                    Belum Ada Donasi
                </p>
                <a href="#" class="text-green-500 text-sm">Donasi Sekarang</a>
            </div>
        @elseif($donasis)
            @foreach ($donasis as $donasi)
                <livewire:campaigns.card-donasi :id_donasi="$donasi->id_donasi" wire:key="{{ $donasi->id_donasi }}" />
            @endforeach
        @endif
        <div wire:loading class="w-full px-4  border border-transparent space-y-2">
            @for ($i = 0; $i < 8; $i++)
                <div class="w-full py-2 flex items-center border border-transparent border-b-gray-300 animate-pulse">
                    <div
                        class="w-16 h-16 rounded-lg bg-gray-200 dark:bg-gray-700 mx-2 flex justify-center items-center">
                        <div class="w-full h-full bg-gray-200 dark:bg-gray-700"></div>
                    </div>
                    <div class="w-full bg-white mx-2 text-black flex flex-col justify-center pl-2">
                        <div class="bg-gray-200 dark:bg-gray-700 h-5 w-20 -mt-2 mb-2"></div>
                        <div class="flex items-center text-[11px] -mt-1">
                            <div class="h-3 bg-gray-200 dark:bg-gray-700  w-24 mb-2">
                            </div>
                            <div class="h-3 bg-gray-200 dark:bg-gray-700  w-16 mb-2 ml-2"></div>
                        </div>
                        <div class="h-2 bg-gray-200 dark:bg-gray-700  w-16"></div>
                    </div>
                </div>
            @endfor
        </div>

    </div>
</div>
