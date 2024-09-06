<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen pb-24 bg-white rounded-lg shadow-md" style="width: 414px">
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
    </div>
</div>