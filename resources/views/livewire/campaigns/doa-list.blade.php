<div class="w-full max-w-[414px] mx-auto bg-white h-full">
    <x-nav-mobile2 title="List Doa Campaign" />
    @if ($doas->isEmpty())
        <div class="px-4 py-40  text-center ">
            <p>
                Belum Ada Doa
            </p>
            <a href="{{ route('donasi.index', $campaign->id_campaign) }}" class="text-green-500 text-sm">Donasi
                Sekarang</a>
        </div>
    @else
        @foreach ($doas as $doa)
            <div>
                <livewire:campaigns.card-doa :id_doa="$doa->id_doa" wire:key="{{ $doa->id_doa }}" />
            </div>
        @endforeach
    @endif

</div>
