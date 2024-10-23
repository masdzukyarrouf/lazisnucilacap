<div class="flex flex-col items-center justify-center min-w-fit">
    <x-nav-mobile2 title="Qurban Lazisnu Cilacap" backUrl="{{ route('landing') }}"/>
    <div class="flex flex-col w-screen min-h-screen mt-12 pb-24 bg-white shadow-md md:w-[414px]">
        <livewire:ziwaf.navigation/>
        <div class="flex flex-col p-4">
            <h1 class="pb-2 font-semibold">Harga Hewan Qurban</h1>
                <div class="relative w-full md:w-96">
                    <a href="{{ asset('storage/table_harga_hewan_qurban_2024.pdf') }}">
                        <button class="flex items-center w-full px-4 py-2 border border-gray-300 rounded">
                            <img src="{{ asset ('images/paper.png') }}" alt="logo" class="w-6">
                            <span class="pl-2 text-sm font-semibold">Tabel Harga Hewan Qurban 2024.pdf</span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center px-4">
                <h1 class="pb-2 font-semibold">Jenis Hewan</h1>
                    <div class="relative w-full mb-4 md:w-96">
                        <select wire:model.lazy="selectedOption"class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                            <option value="" disabled selected>Pilih Jenis Hewan</option>
                            @foreach ($pilihan_qurbans as $x)
                                <option value="{{ $x->nama }}">{{ $x->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="font-semibold">Jumlah Mudhohi</label>
                    <input
                    type="number" 
                    id="mudhohi" 
                    wire:model="mudhohi"
                    wire:input.lazy="price" 
                    class="w-full px-2 py-1 mt-2 mb-4 border border-gray-300 rounded" 
                    placeholder="Isi dengan jumlah Mudhohi" 
                    />
                    
                    @if ($mudhohi > 0)
                        <label class="font-semibold">Daftar Mudhohi</label>
                            @for ($i = 0; $i < $mudhohi; $i++)
                                <input
                                    type="text"
                                    wire:model="daftar.{{ $i }}" 
                                    class="w-full px-2 py-1 mt-2 mb-4 border border-gray-300 rounded" 
                                    placeholder="Nama Mudhohi ke-{{ $i + 1 }}"
                                />
                            @endfor
                    @endif
                    
        
                <label class="font-semibold">Total Nominal Qurban</label>
                    <div class="relative flex flex-col mb-4">
                        <div class="flex items-center justify-center">
                            <span class="absolute inset-y-0 left-0 flex items-center px-3 mt-2 bg-gray-300 border border-black rounded h-9">Rp. </span>
                            <input 
                                type="text" 
                                value="{{ number_format($nominal, 0, ',', '.') }}" 
                                class="w-full py-1 pr-2 mt-2 bg-gray-300 border border-black rounded h-9 pl-14 md:w-96" 
                                placeholder="Rp. 0" 
                                readonly 
                            />
                        </div>
                    </div>
            </div>
            
                    <div class="flex items-center justify-center mt-4">
                        <button wire:click="submitqurban" class="px-4 py-2 font-semibold text-white bg-green-500 rounded w-96">
                            Qurban Sekarang
                        </button>
                    </div>
    </div>
</div>