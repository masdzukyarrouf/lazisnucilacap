<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col bg-white rounded-lg shadow-md" style="width: 414px; height: 736px">
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
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('fidyah') }}">
                    <img src="{{ Request::is('fidyah') ? asset('images/fidyah on.png') : asset('images/fidyah off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('qurban') }}">
                    <img src="{{ Request::is('qurban') ? asset('images/qurban on.png') : asset('images/qurban off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <div class="flex flex-col">
                <h2 class="mb-2 font-semibold">Mari Wakaf Tunai Bersama Kami</h2>
                <div class="relative w-96">
                    <label class="font-semibold text-green-500">Nominal Wakaf Kamu</label>
                    <input 
                        oninput="formatMoney(this)" 
                        id="waif" 
                        wire:model.lazy="waif" 
                        type="text" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Rp." 
                    />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-5">
            <button wire:click="submitwaif" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                wakaf Sekarang
            </button>
        </div>
    </div>
    <script>
        function formatMoney(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Add dots for thousands
            input.value = value;
        }
    </script>
</div>