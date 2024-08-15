<div class="flex justify-center">
    <div class="flex flex-col justify-center bg-white rounded-lg shadow-md" style="width: 414px;">
        <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
        <div class="flex items-center py-4 bg-white">
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('ziwaf') }}">
                    <img src="{{ Request::is('ziwaf') ? asset('images/zakat on.png') : asset('images/zakat off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('campaign') }}">
                    <img src="{{ Request::is('campaigns') ? asset('images/infak on.png') : asset('images/infak off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('berita') }}">
                    <img src="{{ Request::is('berita') ? asset('images/wakaf on.png') : asset('images/wakaf off.png') }}" alt="" style="width: 138px; height: 38px">
                </a>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <div class="relative w-96">
                <select class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                    <option>Pilih Kategori Zakat</option>
                    <option>Zakat Maal</option>
                    <option>Zakat Profesi</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M7 10l5 5 5-5H7z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="mb-16"></div>
    </div>
</div>
