<div class="flex flex-col items-center justify-center min-w-fit">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" backUrl="{{ route('wakaf') }}"/>
    <div class="flex flex-col w-full min-h-screen bg-white rounded-lg shadow-md md:w-[414px]">
        <livewire:ziwaf.navigation/>
        <div class="flex justify-center p-4">
            <div class="flex flex-col">
                <h1 class="pb-2 font-semibold">Pilih Program Wakaf</h1>
                <div class="relative w-screen mb-2 md:w-96">
                    <select wire:model="selectedOption" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                        <option value="" disabled selected>Pilih Program Wakaf</option>
                        @foreach ($pilihan_wakafs as $item)
                            <option value="{{ $item->pil_wakaf }}">{{ $item->pil_wakaf }}</option>
                        @endforeach
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M7 10l5 5 5-5H7z"/>
                        </svg>
                    </div>
                </div>
                <label class="font-semibold">Atas Nama</label>
                    <input 
                        type="text" 
                        id="atasNama" 
                        wire:model="atasNama" 
                        class="w-screen px-2 py-1 mt-2 mb-3 border border-gray-300 rounded md:w-96" 
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
                <div class="relative w-screen md:w-96">
                    <label class="font-semibold">Nominal Wakaf Anda</label>
                    <div class="relative flex items-center justify-center mt-2 mb-3">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                        <input 
                            oninput="formatMoney(this)" 
                            id="wakaf" 
                            wire:model.lazy="wakaf" 
                            type="text" 
                            class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                            placeholder="0" 
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center mt-5">
            <button wire:click="submitwaif" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                wakaf Sekarang
            </button>
        </div>
    </div>
    <script>
        function formatMoney(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Add dots for thousands
            input.value = value;
        }
    </script>
</div>