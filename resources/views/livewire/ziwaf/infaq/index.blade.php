<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col bg-white rounded-lg shadow-md" style="width: 414px; height: 736px">
        <livewire:ziwaf.navigation />
        <form wire:submit.prevent="bayarInfaq">
            <div class="flex justify-center py-4">
                <div class="flex flex-col">
                    <div class="relative w-96">
                        <label class="font-semibold">Pilih Program Infaq</label>
                        <select wire:model="jenis_ziwaf" class="w-full px-2 py-1 mb-3 border border-gray-300 rounded">
                            <option value={{ null }}>Pilih Program Infaq</option>
                            <option value="Infaq / Sedekah Umum">Infaq / Sedekah Umum</option>
                            <option value="Sedekah Palestina">Sedekah Palestina</option>
                            <option value="Sedekah Nu Care Lazisnu Cilacap">Sedekah Nu Care Lazisnu Cilacap</option>
                            <option value="Infaq Dakwah & Kemanusiaan">Infaq Dakwah & Kemanusiaan</option>
                            <option value="Infaq Pendidikan">Infaq Pendidikan</option>
                            <option value="Infaq Kesehatan">Infaq Kesehatan</option>
                            <option value="Infaq Ekonomi">Infaq Ekonomi</option>
                            <option value="Infaq Lingkungan Hidup dan Kebencanaan">Infaq Lingkungan Hidup dan
                                Kebencanaan
                            </option>
                        </select>
                        @error('jenis_ziwaf')
                            <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <label class="font-semibold">Atas Nama</label>
                    <input 
                        type="text" 
                        id="atasNama" 
                        wire:model="atasNama" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan nama anda" 
                    />

                    <div class="flex flex-col space-x-4">
                        <label class="font-semibold">Jenis</label>
                        <div class="flex py-4 space-x-6">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="jenis3" value="pribadi" wire:model='jenis3'>
                                <span>Pribadi</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="jenis3" value="entitas" wire:model='jenis3'>
                                <span>Entitas</span>
                            </label>
                        </div>
                    </div>

                    <div class="relative w-96">
                        <label class="font-semibold">Nominal Infaq Kamu</label>
                        <input 
                            data-input="nominal_infaq" 
                            type="text" 
                            class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                            placeholder="Rp." 
                            oninput="formatNumberInput(this)" 
                        />
                        <input 
                            type="hidden" 
                            name="nominal_infaq_raw" 
                            wire:model="nominal_infaq" 
                        />
                        @error('nominal_infaq')
                            <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-5">
                <button class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                    Infaq Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function formatNumberInput(input) {
        let value = input.value.replace(/\D/g, ''); // Remove all non-numeric characters
        let formattedValue = new Intl.NumberFormat('id-ID').format(value); // Format the number with dots
        
        // Update the displayed value
        input.value = formattedValue;

        // Update the raw value without the dots in Livewire
        let rawInput = document.querySelector('input[name="nominal_infaq_raw"]'); // Reference the hidden input
        rawInput.value = value;
        rawInput.dispatchEvent(new Event('input')); // Trigger Livewire's input update
    }
</script>

