<div class="w-full max-w-[414px] mx-auto bg-white h-full">
    <x-nav-mobile2 title="List Donasi Campaign" />
    @if ($donasis->isEmpty())
        <div class="px-4 py-40 text-center ">
            <p>
                Belum Ada Donasi
            </p>
            <a href="#" class="text-green-500 text-sm">Donasi Sekarang</a>
        </div>
    @else
        @foreach ($donasis as $donasi)
            <livewire:campaigns.card-donasi :id_donasi="$donasi->id_donasi" wire:key="{{ $donasi->id_donasi }}" />
        @endforeach
    @endif

</div>
