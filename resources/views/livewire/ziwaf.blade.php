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
                <select wire:model="selectedOption" wire:change="handleDropdownChange" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                    <option value="">Pilih Kategori Zakat</option>
                    <option value="maal">Zakat Maal</option>
                    <option value="profesi">Zakat Profesi</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M7 10l5 5 5-5H7z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Konten tambahan jika Zakat Maal dipilih -->
        @if($selectedOption === 'maal')
            <div class="p-4">
                <!-- Form untuk input Zakat Maal -->
                <label>Nilai Deposito/Tabungan/Giro</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Nilai Properti & Kendaraan</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Saham, piutang, dan surat-surat berharga lainnya</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Hutang pribadi yang jatuh tempo tahun ini</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Nominal Zakat Kamu</label>
                <input type="text" class="w-full px-2 py-1 border border-gray-300 rounded" placeholder="Rp. 0" readonly />
            </div>
        @elseif($selectedOption === 'profesi')
            <div class="p-4">
                <!-- Form untuk input Zakat profesi -->
                <label>Penghasilan Perbulan</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Pendapatan Perbulan Lainnya</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Utang / Cicilan</label>
                <input type="text" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Rp." />

                <label>Nominal Zakat Kamu</label>
                <input type="text" class="w-full px-2 py-1 border border-gray-300 rounded" placeholder="Rp. 0" readonly />
            </div>
        @endif
        <div class="flex items-center justify-center mt-5">
            <button wire:click="submitZakat" class="px-4 py-2 text-white bg-green-500 rounded w-96">
                Zakat Sekarang
            </button>
        </div>
    </div>
</div>
