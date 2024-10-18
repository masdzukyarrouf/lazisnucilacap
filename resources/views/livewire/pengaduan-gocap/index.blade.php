<div class="flex flex-col items-center justify-center min-w-fit">
    <x-nav-mobile2 title="Form konfirmasi Donasi" />
    <div class="flex flex-col h-full min-h-screen bg-white shadow-md md:w-[414px] w-screen">
        <div class="flex flex-col py-4 px-[24px]">
            <div>
                @if (session()->has('message'))
                    <div id="flash-message"
                        class="flex items-center justify-between p-4 mx-12 mt-8 mb-4 text-white bg-green-500 rounded">
                        <span>{{ session('message') }}</span>
                        <button class="p-1" onclick="document.getElementById('flash-message').style.display='none'"
                            class="font-bold text-white">
                            &times;
                        </button>
                    </div>
                @endif
            </div>
            <h1 class="font-semibold text-green-500 ">
                Formulir Bantuan Teknis
            </h1>
            <small class="text-[11px] ">
                Halaman ini ditujukan kepada para petugas yang mengalami kendala, harap diisi dengan data yang benar dan
                dapat dipertanggungjawabkan
            </small>
            <form wire:submit="save">
                <div class="flex flex-col pt-2">
                    <h1 class="py-2 text-sm font-semibold">
                        Nama Anda
                    </h1>
                    <input type="text" id="username" wire:model="username"
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded" placeholder="Isikan nama anda" />
                    @error('username')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <h1 class="py-2 text-sm font-semibold">
                        No Telepon
                    </h1>
                    <input type="text" id="no_telp" wire:model="no_telp"
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded"
                        placeholder="Isikan No Telepon anda" />
                    @error('no_telp')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <h1 class="py-2 text-sm font-semibold">
                        Jabatan
                    </h1>
                    <input type="text" id="jabatan" wire:model="jabatan"
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded"
                        placeholder="Isikan jabatan anda" />
                    @error('jabatan')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="kendala">
                        Kendala
                    </label>
                    <textarea wire:model="kendala"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        id="kendala" rows="4" placeholder="kendala"></textarea>
                    @error('kendala')
                        <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col pt-2">
                    <h1 class="py-2 text-sm font-semibold">
                        Kendala Gambar
                    </h1>
                    <input type="file" id="image" wire:model="image"
                        class="w-full px-2 py-1 mb-3 border border-gray-300 rounded"
                        placeholder="Isikan No Telepon anda" />
                    @error('image')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-4">
                    <button type="submit"
                        class="px-4 py-2 ml-64 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="h-[67px]"></div>
    </div>
</div>
