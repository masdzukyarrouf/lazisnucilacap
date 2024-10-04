<div class="flex flex-col items-center justify-center min-w-fit">
    <x-nav-mobile2 title="Qurban Lazisnu Cilacap" />
    <div class="flex flex-col w-full min-h-screen pb-24 bg-white shadow-md md:w-[414px]">
        <livewire:ziwaf.navigation/>
        <div class="flex flex-col p-4">
            <h1 class="pb-2 font-semibold">Harga Hewan Qurban</h1>
                <div class="relative w-96">
                    <a href="{{ asset('storage/table_harga_hewan_qurban_2024.pdf') }}">
                        <button class="flex items-center w-full px-4 py-2 border border-gray-300 rounded">
                            <img src="{{ asset ('images/paper.png') }}" alt="logo" class="w-6">
                            <span class="pl-2 text-sm font-semibold">Tabel Harga Hewan Qurban 2024.pdf</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center p-4">
            <h1 class="pb-2 font-semibold">Jenis Hewan</h1>
                <div class="relative w-96">
                    <select wire:model="selectedOption"class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded appearance-none focus:outline-none focus:border-blue-500">
                        <option value="" disabled selected>Jenis Hewan</option>
                        <option value="Sapi">1/7 Sapi (250 - 300kg)</option>
                        <option value="Kambing">Kambing Standar (25 - 28kg)</option>
                        <option value="Kambing+">Kambing Premium (28 - 35kd)</option>
                        <option value="Domba">Domba Luar Negeri (45 - 60kg)</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M7 10l5 5 5-5H7z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="px-4 py-2">
                <label>Jumlah Mudhohi</label>
                <input
                type="text" 
                id="mudhohi" 
                wire:model="mudhohi"
                wire:input.lazy="price" 
                class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                placeholder="Isi dengan jumlah Mudhohi" 
                />
                
                <label>Daftar Mudhohi</label>
                <textarea
                type="text" 
                id="daftar" 
                wire:model="daftar" 
                wire:input.lazy="price" 
                class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                placeholder="Isi dengan daftar Mudhohi">
                </textarea>

                <label class="font-semibold">Total Nominal Qurban</label>
                            <div class="relative flex flex-col mb-3">
                                <div class="flex items-center justify-center">
                                    <span class="absolute inset-y-0 left-0 flex items-center px-3 bg-gray-300 rounded h-9">Rp. </span>
                                    <input 
                                    type="text" 
                                    value="{{ number_format($nominal, 0, ',', '.') }}" 
                                    class="w-full py-1 pr-2 border border-gray-300 rounded h-9 pl-14" 
                                    placeholder="Rp. 0" 
                                    readonly 
                                    />
                                </div>
                            </div>

                    <div class="flex items-center justify-center mt-4">
                        <button wire:click="submitqurban" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                            Qurban Sekarang
                        </button>
                    </div>
            </div>
    </div>
</div>