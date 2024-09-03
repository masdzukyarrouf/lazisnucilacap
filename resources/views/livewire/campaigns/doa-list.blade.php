<div class="w-full max-w-[414px] mx-auto bg-white h-auto">
    <x-nav-mobile2 title="List Doa Campaign" />
    <div x-data="{ load: false }" x-init="load = true" x-show="load" wire:init="loadDoas">

        @if ($doas && $doas->isEmpty())
            <div class="px-4 py-60  text-center ">
                <p>
                    Belum Ada Doa
                </p>
                <a href="{{ route('donasi.index', $campaign->title) }}" class="text-green-500 text-sm">Donasi
                    Sekarang</a>
            </div>
        @elseif($doas)
            @foreach ($doas as $doa)
                <div>
                    <livewire:campaigns.card-doa :id_doa="$doa->id_doa" wire:key="{{ $doa->id_doa }}" />
                </div>
            @endforeach
        @endif
        @for ($i = 0; $i < 4; $i++)
        <div wire:loading
            class="w-full flex-col items-center py-2 px-4 shadow-[0_4px_4px_rgba(0,0,0,0.1)] animate-pulse">
            <!-- Placeholder for the username and date -->
            <div class="flex flex-col text-left w-full">
                <div class="bg-gray-200 dark:bg-gray-700 h-4 w-24 mb-1"></div>
                <div class="bg-gray-200 dark:bg-gray-700 h-3 w-20"></div>
            </div>

            <!-- Placeholder for the doa text -->
            <div class="w-full bg-gray-200 dark:bg-gray-700 mt-4 text-black flex flex-col p-2">
                <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-full mb-1"></div>
                <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>

                <!-- Placeholder for like count and description -->
                <div class="flex justify-start space-x-1 mt-4">
                    <div class="bg-gray-200 dark:bg-gray-700 h-3 w-12"></div>
                    <div class="bg-gray-200 dark:bg-gray-700 h-3 w-24"></div>
                </div>
            </div>

            <!-- Placeholder for the like button -->
            <div
                class="w-full bg-gray-200 dark:bg-gray-700 mt-2 text-black border-t flex justify-center py-2 space-x-1 items-center">
                <div class="bg-gray-200 dark:bg-gray-700 h-5 w-5 rounded-full"></div>
                <div class="bg-gray-200 dark:bg-gray-700 h-3 w-12"></div>
            </div>


        </div>
    @endfor
    </div>
</div>
