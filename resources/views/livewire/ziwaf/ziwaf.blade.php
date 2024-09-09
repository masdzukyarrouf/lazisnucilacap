<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen pb-24 bg-white rounded-lg shadow-md" style="width: 414px">
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
        <div class="flex flex-col justify-center p-4">
            <h1 class="pb-2 font-semibold">Pilih Kategori Zakat</h1>
            <div class="relative w-96">
                <select wire:model="selectedOption" wire:change="handleDropdownChange" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                    <option value="">Pilih Kategori Zakat</option>
                    <option value="maal">Zakat Maal</option>
                    <option value="Fitrah">Zakat Fitrah</option>
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
            <div class="flex flex-col justify-center p-4">
            <h1 class="pb-2 font-semibold">Perhitungan Zakat</h1>
                <div class="relative w-96">
                    <a href="#">
                        <img src="{{ asset ('images/zakat.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center p-4">
            <h1 class="pb-2 font-semibold">Pilih Kategori Zakat Maal</h1>
                <div class="relative w-96">
                    <select wire:model="selectedOption2" wire:change="handleDropdownChange" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                        <option value="">Pilih Kategori Zakat Maal</option>
                        <option value="Emas">Emas</option>
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Penghasilan">Penghasilan</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M7 10l5 5 5-5H7z"/>
                        </svg>
                    </div>
                </div>
            </div>
            @if ($selectedOption2 === 'Emas')
                <div class="px-4 py-2">
                    <!-- Form untuk input Zakat Maal -->
                    <label class="font-semibold">Jumlah Emas (Dalam Rupiah)</label>
                    <a href="https://www.lakuemas.com/" class="border border-green-500">Lakuemas.com</a>
                    <input
                        oninput="formatMoney(this)" 
                        type="text" 
                        id="gram" 
                        wire:model="gram" 
                        wire:input.lazy="gramtoidr" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Masukkan nilai" 
                    />

                    {{-- <label class="font-semibold">Jumlah Emas (Dalam Rupiah)</label>
                    <div class="relative flex flex-col mb-3">
                            <div class="flex items-center justify-center">
                                <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                <input 
                                    type="text" 
                                    value="{{ number_format($nilaiemas, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                />
                            </div>
                        </div> --}}

                    <label class="font-semibold">Nisab per Tahun</label>
                    <div class="relative flex flex-col mb-3">
                            <div class="flex items-center justify-center">
                                <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                <input 
                                    type="text" 
                                    value="{{ number_format($nisab, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                />
                            </div>
                            <span class="text-xs font-semibold text-red-500">Sesuai SK Baznas No.1 Tahun 2024</span>
                        </div>

                        @if ($zakatEmas === 0)
                        <div class="flex items-center justify-center my-4">                          
                            <span class="text-gray-400">jumlah emas anda belum memenuhi nisab</span>
                        </div>
                        @elseif ($zakatEmas != 0)
                            <label class="font-semibold">Jumlah Wajib Zakat Yang Harus Dibayarkan (2,5% Dari Nilai Emas)</label>
                            <div class="relative flex flex-col mb-3">
                                <div class="flex items-center justify-center">
                                    <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                    <input 
                                    type="text" 
                                    value="{{ number_format($zakatEmas, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                    />
                                </div>
                            </div>
                        @endif
                        @if ($zakatEmas === 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalEmas" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @elseif ($zakatEmas != 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Zakat Sekarang
                                </button>
                            </div>
                        @else
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalEmas" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @endif
                </div>
                
                
            @elseif ($selectedOption2 === 'Perdagangan')
                <div class="px-4 py-2">
                    <!-- Form untuk input Zakat Maal -->
                    <label class="font-semibold">Asset Lancar</label>
                    <input 
                        oninput="formatMoney(this)"
                        type="text" 
                        id="asset" 
                        wire:model.lazy="asset" 
                        wire:input="assetlaba" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan dengan jumlah asset dalam 1 tahun" 
                    />
                    
                    <label class="font-semibold">Laba</label>
                    <input 
                        oninput="formatMoney(this)"
                        type="text" 
                        id="laba" 
                        wire:model.lazy="laba" 
                        wire:input="assetlaba" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan dengan jumlah laba dalam 1 tahun" 
                    />

                    <label class="font-semibold">Jumlah</label>
                    <div class="relative flex items-center justify-center mb-3">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                        <input 
                            type="text" 
                            value="{{ number_format($totalassetlaba, 0, ',', '.') }}" 
                            class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                            readonly
                        />
                    </div>
                    <label class="font-semibold">Nisab per Tahun</label>
                    <div class="relative flex flex-col mb-3">
                            <div class="flex items-center justify-center">
                                <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                <input 
                                    type="text" 
                                    value="{{ number_format($nisab, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                />
                            </div>
                            <span class="text-xs font-semibold text-red-500">Sesuai SK Baznas No.1 Tahun 2024</span>
                        </div>

                        @if ($zakatPerdagangan === 0)
                        <div class="flex items-center justify-center my-4">                          
                            <span class="text-gray-400">Harta anda belum masuk nisab</span>
                        </div>
                        @elseif ($zakatPerdagangan != 0)
                            <label class="font-semibold">Jumlah Wajib Zakat Yang Harus Dibayarkan (2,5% Dari jumlah )</label>
                            <div class="relative flex flex-col mb-3">
                                <div class="flex items-center justify-center">
                                    <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                    <input 
                                    type="text" 
                                    value="{{ number_format($zakatPerdagangan, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                    />
                                </div>
                            </div>
                        @endif
                        @if ($zakatPerdagangan === 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalPerdagangan" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @elseif ($zakatPerdagangan != 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Zakat Sekarang
                                </button>
                            </div>
                        @else
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalPerdagangan" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @endif
                </div>
                
                
                @elseif ($selectedOption2 === 'Penghasilan')
                <div class="px-4 py-2">
                    <!-- Form untuk input Zakat Maal -->
                    <label class="font-semibold">Gaji Perbulan</label>
                    <input 
                        oninput="formatMoney(this)"
                        type="text" 
                        id="gaji" 
                        wire:model.lazy="gaji" 
                        wire:input="penghasilan" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan dengan gaji anda" 
                    />
                    
                    <label class="font-semibold">Penghasilan Lain Perbulan</label>
                    <input 
                        oninput="formatMoney(this)"
                        type="text" 
                        id="gaji2" 
                        wire:model.lazy="gaji2" 
                        wire:input="penghasilan" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan dengan penghasilan anda yang lain" 
                    />

                    <label class="font-semibold">Total Penghasilan Perbulan</label>
                    <div class="relative flex items-center justify-center mb-3">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                        <input 
                            type="text" 
                            value="{{ number_format($totalpenghasilan, 0, ',', '.') }}" 
                            class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                            readonly
                        />
                    </div>
                    <label class="font-semibold">Nisab per Bulan</label>
                    <div class="relative flex flex-col mb-3">
                            <div class="flex items-center justify-center">
                                <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                <input 
                                    type="text" 
                                    value="{{ number_format($nisabbulan, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                />
                            </div>
                            <span class="text-xs font-semibold text-red-500">Sesuai SK Baznas No.1 Tahun 2024</span>
                        </div>

                        @if ($zakatPenghasilan === 0)
                        <div class="flex items-center justify-center my-4">                          
                            <span class="text-gray-400">Harta anda belum masuk nisab</span>
                        </div>
                        @elseif ($zakatPenghasilan != 0)
                            <label class="font-semibold">Jumlah Wajib Zakat Yang Harus Dibayarkan (2,5% Dari Jumlah Penghasilan)</label>
                            <div class="relative flex flex-col mb-3">
                                <div class="flex items-center justify-center">
                                    <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                    <input 
                                    type="text" 
                                    value="{{ number_format($zakatPenghasilan, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                    />
                                </div>
                            </div>
                        @endif
                        @if ($zakatPenghasilan === 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalPenghasilan" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @elseif ($zakatPenghasilan != 0)
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Zakat Sekarang
                                </button>
                            </div>
                        @else
                            <livewire:ziwaf.niat-zakat>
                            <div class="flex items-center justify-center mt-4">
                                <button wire:click="maalPenghasilan" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                                    Hitung Zakat
                                </button>
                            </div>
                        @endif
                </div>
            @endif

        @elseif($selectedOption === 'profesi')
            
        @endif
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
