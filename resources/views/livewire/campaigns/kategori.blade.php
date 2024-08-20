<div class="w-1/2 ">
    <a href="#" id="openModal"
        class="flex items-center justify-center py-2 space-x-2 border border-transparent border-b-gray-200 border-r-gray-200 hover:cursor-pointer">
        <img src="{{ asset('images/kategori.png') }}" alt="Kategori" class="w-auto h-4">
        <h1 class="text-base">Kategori</h1>
    </a>

    <!-- The Popup Modal -->
    <div id="modalOverlay" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex justify-center items-end">
        <!-- Modal Content -->
        <div id="categoryModal" class="w-full max-w-[414px] bg-white shadow-lg rounded-t-lg">
            <div class="p-4 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-bold text-gray-900">Pilih Kategori Campaign</h2>
                    <button type="button" id="closeModal" class="text-gray-400 font-extrabold hover:text-gray-500">
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
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Semua</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Bencana Alam')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Bencana Alam</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Pendidikan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Pendidikan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Sosial & Keagamaan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Sosial & Keagamaan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Ekonomi')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Ekonomi</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Ramadhan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Ramadhan</span>
                            </a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a class="flex flex-col items-center" wire:click="kategori('Kesehatan')">
                                <!-- Placeholder for Icon -->
                                <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                                <span class="text-sm font-semibold text-center">Kesehatan</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
