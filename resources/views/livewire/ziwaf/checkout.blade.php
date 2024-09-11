<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Pembayaran" />
    <div class="flex flex-col bg-white shadow-md" style="width: 414px; height: 736px">
        <div class="shadow ">
            <div class="mx-5 mt-2">
                <span class="text-sm text-gray-600">Anda Akan Melakukan Pembayaran Untuk Zakat</span>
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($nominal, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow">
            <div class="mx-5 mt-4">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm font-semibold text-green-500">Data Diri</span>
                    <span wire:click="back" class="flex items-center text-sm font-semibold text-green-500 cursor-pointer">
                        Edit
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18l6-6-6-6" />
                        </svg>
                    </span>
                </div>
                <div class="mt-2">
                        <div class="flex flex-col">
                            <div class="flex items-center mb-2">
                                <span class="w-24 text-sm font-semibold text-gray-600">Nama</span>
                                <span class="w-4 text-sm font-semibold text-center">:</span>
                                <span class="text-sm font-semibold">{{ $nama }}</span>
                            </div>
                            
                            <div class="flex items-center mb-2">
                                <span class="w-24 text-sm font-semibold text-gray-600">Telepon</span>
                                <span class="w-4 text-sm font-semibold text-center">:</span>
                                <span class="text-sm font-semibold">{{ $no }}</span>
                            </div>
                            
                            <div class="flex items-center mb-2">
                                <span class="w-24 text-sm font-semibold text-gray-600">Email</span>
                                <span class="w-4 text-sm font-semibold text-center">:</span>
                                <span class="text-sm font-semibold">{{ $email }}</span>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
            </div>
        </div>
    </div>
</div>
