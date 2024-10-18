<div class="w-1/2">
    <a href="#" id="openModal"
        class="flex items-center justify-center py-2 space-x-2 border border-transparent border-b-gray-200 border-r-gray-200 hover:cursor-pointer">
        <img src="{{ asset('images/folder.png') }}" alt="Kategori" class="w-auto h-4">
        <h1 class="text-base">{{$nama_kategori ?? 'Kategori'}}</h1>
    </a>

    <!-- The Popup Modal -->
    <div id="modalOverlay" class="fixed inset-0 z-50 flex items-end justify-center hidden bg-black bg-opacity-50">
        <!-- Modal Content -->
        <div id="categoryModal" class="w-full max-w-[414px] bg-white shadow-lg rounded-t-lg pb-[67px]">
            <div class="p-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold text-gray-900">Pilih Kategori Campaign</h2>
                    <button type="button" id="closeModal" class="font-extrabold text-gray-400 hover:text-gray-500">
                        X
                    </button>
                </div>
            </div>

            <div class="p-4">
                <div class="grid grid-cols-3 gap-4 mt-2">
                    <div class="flex flex-col items-center">
                        <a class="flex flex-col items-center" wire:click="kategori('Kategori')">
                            <div class="w-8 h-8 mb-2 rounded-full"> <img src="{{ asset('images/all.png') }}" alt=""></div>
                            @if ($nama_kategori === 'Kategori')
                                <span class="text-sm font-semibold text-center text-green-500">Semua</span>
                                @else
                                <span class="text-sm font-semibold text-center">Semua</span>
                                @endif
                        </a>
                    </div>
                    @foreach($kategoris as $kategori)
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('{{ $kategori->nama_kategori }}')">
                                <div class="w-8 h-8 mb-2 rounded-full"> <img src="{{ asset('storage/images/kategori/' . $kategori->image) }}" alt="" class="flex items-center w-8 h-8 mb-2"></div>
                                @if ($nama_kategori === $kategori->nama_kategori)
                                <span class="text-sm font-semibold text-center text-green-500">{{ $kategori->nama_kategori }}</span>
                                @else
                                <span class="text-sm font-semibold text-center">{{ $kategori->nama_kategori }}</span>
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
