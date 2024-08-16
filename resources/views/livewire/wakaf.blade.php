<div class="flex justify-center">
    <div class="flex flex-col bg-white rounded-lg shadow-md" style="width: 414px; height: 736px">
        <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
        <div class="flex py-4 bg-white">
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('zakat') }}">
                    <img src="{{ Request::is('zakat') ? asset('images/zakat on.png') : asset('images/zakat off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('infak') }}">
                    <img src="{{ Request::is('infak') ? asset('images/infak on.png') : asset('images/infak off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('wakaf') }}">
                    <img src="{{ Request::is('wakaf') ? asset('images/wakaf on.png') : asset('images/wakaf off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <div class="flex flex-col">
                <h2 class="mb-2 font-semibold">Mari Wakaf Tunai Bersama Kami</h2>
                <div class="relative w-96">
                    <label class="font-semibold text-green-500">Nominal Wakaf Kamu</label>
                    <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-5">
            <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                Infaq Sekarang
            </button>
        </div>
    </div>
</div>
