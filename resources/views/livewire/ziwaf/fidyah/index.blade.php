<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col min-h-screen pb-24 bg-white rounded-lg shadow-md" style="width: 414px">
        <livewire:ziwaf.navigation/>
        <form wire:submit.prevent="bayarFidyah" class="mx-4">
            <div class="flex flex-col w-full mt-2 space-y-2">
                <label class="mx-2 font-semibold text-black ">Jumlah Hari</label>
                <div class="flex items-center mx-2 bg-gray-400 border bg-opacity-70">
                    <p class="w-8 mx-2 italic text-center text-black">Hari</p>
                    <input type="text"
                        class="w-full p-2 ml-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        placeholder="Isi Dengan Jumlah Hari" onkeyup="formatAndSync(this)" id="formattedInput">
                    <input type="hidden" wire:model.live="nominal" id="rawInput">
                    
                </div>
                <label class="font-semibold">Atas Nama</label>
                    <input 
                        type="text" 
                        id="atasNama" 
                        wire:model="atasNama" 
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                        placeholder="Isikan nama anda" 
                    />
                <label class="mx-2 font-semibold text-black ">Nominal Fidyah</label>
                <div class="flex items-center mx-2 bg-gray-400 border bg-opacity-70">
                    <p class="w-8 mx-2 italic text-center text-black">Rp.</p>
                    <input type="text"
                        class="w-full p-2 ml-2 bg-white focus:outline-none focus:ring-2 focus:ring-gray-500"
                        id="nominalFidyahDisplay" placeholder="Minimal donasi"
                        value="{{ number_format($nominal_fidyah, 0, ',', '.') }}">
                </div>
                <div class="flex items-center justify-center w-full py-4 space-x-4">
                    <button type="submit"
                        class="items-center w-full px-16 py-2 text-white bg-green-600 rounded-lg ">
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
