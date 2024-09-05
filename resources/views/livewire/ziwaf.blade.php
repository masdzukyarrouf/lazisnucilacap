<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col bg-white rounded-lg shadow-md" style="width: 414px; height: 736px">
        <div class="flex py-4 bg-white">
            <div class="rounded-lg">
                <a wire:navigate.hover href="{{ route('zakat') }}">
                    <img src="{{ $selectedOption === '' || $selectedOption === 'maal' || $selectedOption === 'profesi' ? asset('images/zakat on.png') : asset('images/zakat off.png') }}" alt="" style="width: 138px; height: 38px">
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
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="deposito" 
                    wire:model.lazy="deposito" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Nilai Properti & Kendaraan</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="properti" 
                    wire:model.lazy="properti" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Saham, piutang, dan surat-surat berharga lainnya</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="saham" 
                    wire:model.lazy="saham" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Hutang pribadi yang jatuh tempo tahun ini</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="hutang" 
                    wire:model.lazy="hutang" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Nominal Zakat Kamu</label>
                @if($zakatNominal == 0)
                <input 
                    type="text" 
                    value="Belum memenuhi Nisab" 
                    class="w-full px-2 py-1 text-red-500 border border-gray-300 rounded" 
                    placeholder="Rp. 0" 
                    readonly 
                />
                @else
                <input 
                    type="text" 
                    value="{{ $zakatNominal !== '' ? number_format($zakatNominal, 0, ',', '.') : 'Rp. 0' }}" 
                    class="w-full px-2 py-1 border border-gray-300 rounded" 
                    placeholder="Rp. 0" 
                    readonly 
                />
                @endif
            </div>

        @elseif($selectedOption === 'profesi')
            <div class="p-4">
                <!-- Form untuk input Zakat Maal -->
                <label>Penghasilan Perbulan</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="gaji" 
                    wire:model.lazy="gaji" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Pednapatan Perbulan Lainnya</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="gaji2" 
                    wire:model.lazy="gaji2" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Hutang/Cicilan</label>
                <input 
                    oninput="formatMoney(this)"
                    type="text" 
                    id="cicilan" 
                    wire:model.lazy="cicilan" 
                    wire:input="calculateZakat" 
                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                    placeholder="Masukkan nilai" 
                />

                <label>Nominal Zakat Kamu</label>
                @if($zakatProfesi == 0)
                <input 
                    type="text" 
                    value="Belum memenuhi Nisab" 
                    class="w-full px-2 py-1 text-red-500 border border-gray-300 rounded" 
                    placeholder="Rp. 0" 
                    readonly 
                />
                @else
                <input 
                    type="text" 
                    value="{{ $zakatProfesi !== '' ? number_format($zakatProfesi, 0, ',', '.') : 'Rp. 0' }}" 
                    class="w-full px-2 py-1 border border-gray-300 rounded" 
                    placeholder="Rp. 0" 
                    readonly 
                />
                @endif


            </div>
        @endif
        <div class="flex items-center justify-center mt-5">
            <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                Zakat Sekarang
            </button>
        </div>
    </div>
    <!-- Tambahkan script untuk format angka dengan titik setiap 3 digit -->
    <script>
        function formatMoney(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Add dots for thousands
            input.value = value;
        }
    </script>
</div>
