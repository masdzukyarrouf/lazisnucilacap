<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col bg-white rounded-lg shadow-md" style="width: 414px; height: 736px">
        <livewire:ziwaf.navigation/>
        <div class="flex justify-center py-4">
            <div class="flex flex-col">
                <h2 class="mb-2 font-semibold">Silahkan Isi Jumlah Infaq Kamu</h2>
                <div class="relative w-96">
                    <label class="font-semibold text-green-500">Nominal Infaq Kamu</label>
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
                Infaq Sekarang
            </button>
        </div>
    </div>
</div>
