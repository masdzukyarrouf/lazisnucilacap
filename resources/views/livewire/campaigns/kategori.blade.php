<div class="w-1/2">
    <a href="#" id="openModal"
        class="flex items-center justify-center py-2 space-x-2 border border-transparent border-b-gray-200 border-r-gray-200 hover:cursor-pointer">
        <img src="{{ asset('images/folder.png') }}" alt="Kategori" class="w-auto h-4">
        <h1 class="text-base">{{$nama_kategori ?? 'Kategori'}}</h1>
    </a>

    <!-- The Popup Modal -->
    <div id="modalOverlay" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex justify-center items-end">
        <!-- Modal Content -->
        <div id="categoryModal" class="w-full max-w-[414px] bg-white shadow-lg rounded-t-lg pb-[67px]">
            <div class="p-4 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-bold text-gray-900">Pilih Kategori Campaign</h2>
                    <button type="button" id="closeModal" class="text-gray-400 font-extrabold hover:text-gray-500">
                        X
                    </button>
                </div>
            </div>

            <div class="p-4">
                <div class="grid grid-cols-3 gap-4 mt-2">
                    <div class="flex flex-col items-center">
                        <a class="flex flex-col items-center" wire:click="kategori('Kategori')">
                            <div class="w-10 h-10 bg-green-500 rounded-full mb-2"> <img src="" alt=""></div>
                            <span class="text-sm font-semibold text-center">Semua</span>
                        </a>
                    </div>
                    @foreach($kategoris as $kategori)
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('{{ $kategori->nama_kategori }}')">
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"> <img src="{{ asset('storage/images/kategori/' . $kategori->image) }}" alt=""></div>
                                <span class="text-sm font-semibold text-center">{{ $kategori->nama_kategori }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
