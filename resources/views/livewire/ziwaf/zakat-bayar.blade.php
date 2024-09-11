<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Pembayaran" />
    <div class="flex flex-col bg-white shadow-md" style="width: 414px; height: 736px">
        <div class="mx-5 mt-5">
            <span class="text-sm text-gray-600">Anda Akan Melakukan Pembayaran Untuk Zakat</span>
            <div class="my-4">
                {{-- @if ($zakatEmas)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatEmas, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>
                
                @elseif ($zakatPerdagangan)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatPerdagangan, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>
                
                @elseif ($zakatPenghasilan)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatPenghasilan, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>

                @elseif ($zakatPertanian)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatPertanian, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>

                @elseif ($zakatUang)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatUang, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>

                @elseif ($zakatJasa)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatJasa, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>

                @elseif ($zakatDagang)
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($zakatDagang, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>
                @endif --}}
                
                <label class="font-semibold">Nominal Zakat</label>
                <div class="relative flex flex-col mb-3">
                    <div class="flex items-center justify-center">
                        <span class="absolute inset-y-0 left-0 flex items-center px-3 text-green-500 rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($this->nominal, 0, ',', '.') }}" 
                                class="w-full py-1 pl-10 pr-2 text-green-500 border border-gray-300 rounded h-9" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                    </div>
                </div>
                
                <div class="mt-4">
                    <span class="text-xl font-semibold">Mohon Lengkapi Data Berikut</span>
                    <div>
                        @if (!$users)
                            <span>sudah punya akun?</span>
                            <span wire:click="login" class="font-semibold text-green-500 cursor-pointer">Login</span>
                        @endif
                            <div>
                                <label class="font-semibold">Nama Anda</label>
                                <input 
                                    type="text" 
                                    id="nama" 
                                    wire:model.lazy="nama" 
                                    wire:input="datadiri"
                                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                                    placeholder="Isikan dengan jumlah asset dalam 1 tahun" 
                                />
                                
                                <label class="font-semibold">No Telepon (WA Aktif)</label>
                                <input 
                                    type="text" 
                                    id="no" 
                                    wire:model.lazy="no" 
                                    wire:input="datadiri" 
                                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                                    placeholder="Isikan dengan jumlah asset dalam 1 tahun" 
                                />

                                <label class="font-semibold">Email (Opsional)</label>
                                <input 
                                    type="text" 
                                    id="email" 
                                    wire:model.lazy="email" 
                                    wire:input="datadiri" 
                                    class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" 
                                    placeholder="Isikan dengan jumlah asset dalam 1 tahun" 
                                />
                            </div>
                    </div>
                </div> 
            </div>
            <button wire:click="co" class="w-full px-4 py-2 font-semibold text-white bg-green-500 rounded">
                Zakat Sekarang
            </button>
        </div>
    </div>
</div>
