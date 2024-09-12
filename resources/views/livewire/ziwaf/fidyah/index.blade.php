<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen pb-24 bg-white rounded-lg shadow-md" style="width: 414px">
        <livewire:ziwaf.navigation/>
        <form wire:submit.prevent="bayarFidyah" class="mx-4">
            <div class="mt-2 w-full flex flex-col space-y-2">
                <label class="text-[12px] font-semibold text-black mx-2">Jumlah Hari</label>
                <div class="flex items-center mx-2 border bg-gray-400 bg-opacity-70">
                    <p class="text-black text-[12px] text-center italic mx-2 w-8">Hari</p>
                    <input type="text"
                        class="text-[12px] ml-2 w-full p-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        placeholder="Isi Dengan Jumlah Hari" onkeyup="formatAndSync(this)" id="formattedInput">
                    <input type="hidden" wire:model.live="nominal" id="rawInput">
                    
                </div>
                <label class="text-[12px] font-semibold text-black mx-2">Nominal Fidyah</label>
                <div class="flex items-center mx-2 border bg-gray-400 bg-opacity-70">
                    <p class="text-black text-[12px] text-center italic mx-2 w-8">Rp.</p>
                    <input type="text" disabled
                        class="text-[12px] ml-2 w-full p-2 focus:outline-none focus:ring-2 bg-white focus:ring-gray-500"
                        id="nominalFidyahDisplay" placeholder="Minimal donasi"
                        value="{{ number_format($nominal_fidyah, 0, ',', '.') }}">
                </div>
                <div class="flex items-center justify-center py-4 space-x-4 w-full">
                    <button type="submit"
                        class="text-[12px] bg-green-600 px-16 py-2 items-center text-white rounded-lg w-full">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function formatAndSync(input) {
        let rawValue = input.value.replace(/\D/g, ''); 
        let formattedValue = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); 
        input.value = formattedValue; 
        document.getElementById('rawInput').value = rawValue;
        Livewire.find(document.querySelector('[wire\\:id]').getAttribute('wire:id')).set('nominal', rawValue);
    }
    document.addEventListener('livewire:load', function () {
        Livewire.hook('message.processed', (message, component) => {
            let fidyahValue = @this.nominal_fidyah;
            let formattedFidyahValue = fidyahValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            document.getElementById('nominalFidyahDisplay').value = formattedFidyahValue;
        });
    });
</script>
