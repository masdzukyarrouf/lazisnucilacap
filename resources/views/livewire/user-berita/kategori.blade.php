<div class="w-full ">
    <a id="openModal"
        class="flex items-center justify-center py-2 space-x-2 border border-transparent border-b-gray-200 border-r-gray-200 hover:cursor-pointer">
        <img src="{{ asset('images/kategori.png') }}" alt="Kategori" class="w-auto h-4">
        <h1 class="text-base">Kategori</h1>
    </a>

    <!-- The Popup Modal -->
    <div id="modalOverlay" class="fixed inset-0 z-50 flex items-end justify-center hidden bg-black bg-opacity-50">
        <!-- Modal Content -->
        <div id="categoryModal" class="w-full max-w-[414px] bg-white shadow-lg rounded-t-lg pb-[67px]">
            <div class="p-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-bold text-gray-900">Pilih Kategori Campaign</h2>
                    <button type="button" id="closeModal" class="font-extrabold text-gray-400 hover:text-gray-500">
                        <!-- Close icon -->
                        X
                    </button>
                </div>
            </div>

            <!-- Modal content (categories) -->
            <div class="">
                <div class="p-4">
                    <div class="grid grid-cols-3 gap-4 mt-2">
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('all')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Semua</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Bencana Alam')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Bencana Alam</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Pendidikan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Pendidikan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Sosial & Keagamaan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Sosial & Keagamaan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Ekonomi')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Ekonomi</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Ramadhan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Ramadhan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Kesehatan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Kesehatan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Penghargaan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Penghargaan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Laporan & Publikasi')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 mb-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-center">Laporan & Publikasi</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
