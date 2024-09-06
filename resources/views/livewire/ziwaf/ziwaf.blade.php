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
                    <label class="font-semibold">Jumlah Emas (Dalam gram)</label>
                    <input 
                        type="text" 
                        id="gram" 
                        wire:model.lazy="gram" 
                        wire:input="calculateZakat" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Masukkan nilai" 
                    />

                    <label class="font-semibold">Nisab 1 Bulan</label>
                    <div class="relative flex flex-col mb-2">
                            <div class="flex items-center justify-center">
                                <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-500 rounded h-9">Rp. </span>
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


                    <label class="font-semibold">Nominal Zakat Kamu</label>
                    @if($zakatEmas == 0)
                    <input 
                        type="text" 
                        value="Belum memenuhi Nisab" 
                        class="w-full px-2 py-1 text-red-500 border border-gray-300 rounded" 
                        placeholder="Rp. 0" 
                        readonly 
                    />
                    <div class="flex mt-4">
                        <span class="text-green-500">baca niat zakat</span>
                    </div>
                    <div class="mt-4 mb-2">
                        <span class="font-semibold">
                            Silahkan Lengkapi Data Dibawah
                        </span>
                        <div class="flex flex-col justify-center py-4">
                            <h1 class="pb-2 font-semibold">Nama Lengkap</h1>
                            <div class="relative flex items-center">
                                <!-- Dropdown -->
                                <div class="relative w-1/3">
                                    <select wire:model="selectedOption3" wire:change="handleDropdownChange" class="block w-full h-12 px-4 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                                        <option value="" disabled selected>Panggilan</option>
                                        <option value="Bapak">Bapak</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Kak">Kak</option>
                                    </select>
                                    <!-- SVG Icon -->
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M7 10l5 5 5-5H7z"/>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Input Field -->
                                <input 
                                    type="text" 
                                    id="nama_lengkap" 
                                    wire:model.lazy="nama_lengkap" 
                                    wire:input="calculateZakat" 
                                    class="w-2/3 h-12 px-4 py-2 pr-8 border border-gray-300 rounded" 
                                />
                            </div>
                        </div>
                        <label class="font-semibold">No Telepon (WA Aktif)</label>
                        <input 
                            type="text" 
                            id="wa" 
                            wire:model.lazy="wa" 
                            wire:input="calculateZakat" 
                            class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                            placeholder="Isikan No WA Anda" 
                        />
                        <label class="font-semibold">Alamat Lengkap</label>
                        <textarea 
                            type="text" 
                            id="gram" 
                            wire:model.lazy="gram" 
                            wire:input="calculateZakat" 
                            class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                            placeholder="Isi dengan Alamat Lengkap"
                            rows="3">
                        </textarea>
                    <div class="flex items-center justify-center mt-4">
                        <button wire:click="submitZakat" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                            Zakat Sekarang
                        </button>
                    </div>
                    @else
                    <div class="relative flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-500 rounded h-9">Rp. </span>
                        <input 
                            type="text" 
                            value="{{ $zakatEmas !== '' ? number_format($zakatEmas, 0, ',', '.') : 'Rp. 0' }}" 
                            class="w-full py-1 pr-2 mb-2 border border-gray-300 rounded h-9 pl-14" 
                            placeholder="Rp. 0" 
                            readonly 
                        />
                    </div>
                    @endif
                </div>

            @elseif ($selectedOption2 === 'Perdagangan')
                <div class="px-4 py-2">
                    <!-- Form untuk input Zakat Maal -->
                    <label class="font-semibold">Asset Lancar</label>
                    <input 
                        type="text" 
                        id="gaji" 
                        wire:model.lazy="gaji" 
                        wire:input="calculateZakat" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan Jumlah Gaji Anda" 
                    />
                    
                    <label class="font-semibold">Laba</label>
                    <input 
                        type="text" 
                        id="laba" 
                        wire:model.lazy="laba" 
                        wire:input="calculateZakat" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan dengan Penghasilan anda yang lain" 
                    />

                    <label class="font-semibold">Jumlah</label>
                    <div class="relative flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-500 rounded h-9">Rp. </span>
                        <input 
                            type="text" 
                            value="{{ number_format($jumlahPerdagangan, 0, ',', '.') }}" 
                            class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                            readonly
                        />
                    </div>
                    <label class="font-semibold">Nisab 1 Bulan</label>
                    <div class="relative flex flex-col mb-2">
                        <div class="flex items-center justify-center">
                            <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($nisabbulan, 0, ',', '.') }}" 
                                class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                readonly 
                            />
                        </div>
                        <span class="text-xs font-semibold text-red-500">Sesuai SK Baznas No.1 Tahun 2024</span>
                    </div>


                    <label class="font-semibold">Nominal Zakat Kamu</label>
                    @if($zakatEmas == 0)
                    <input 
                        type="text" 
                        value="Belum memenuhi Nisab" 
                        class="w-full px-2 py-1 text-red-500 border border-gray-300 rounded" 
                        placeholder="Rp. 0" 
                        readonly 
                    />
                    @else
                    <div class="relative flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-500 rounded h-9">Rp. </span>
                        <input 
                            type="text" 
                            value="{{ $zakatEmas !== '' ? number_format($zakatEmas, 0, ',', '.') : 'Rp. 0' }}" 
                            class="w-full py-1 pr-2 mb-2 border border-gray-300 rounded h-9 pl-14" 
                            placeholder="Rp. 0" 
                            readonly 
                        />
                    </div>
                    @endif
                </div>
            @endif

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

                <label>Nisab 1 Bulan</label>
                <input 
                    type="text" 
                    value="{{ number_format($nisabbulan, 0, ',', '.') }}" 
                    class="w-full px-2 py-1 border border-gray-300 rounded" 
                    placeholder="Rp. 0" 
                    readonly 
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
