<div class="w-full max-w-[414px] mx-auto bg-white">
    <x-nav-mobile2 title="Kategori" />


    <!-- Section 1: Yang Paling Banyak Dicari -->
    <div class="mt-4 p-4">
        <h2 class="text-sm font-semibold font-semibold mb-2">Yang Paling Banyak Dicari</h2>
        <div class="grid grid-cols-3 gap-4 mt-8">
            <div class="flex flex-col items-center">
                <a class="flex flex-col items-center" wire:click="kategori('Bencana Alam')">
                    <!-- Placeholder for Icon -->
                    <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                    <span class="text-sm font-semibold text-center">Bencana Alam</span>
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
                <a class="flex flex-col items-center" wire:click="kategori('Ramadhan')">
                    <!-- Placeholder for Icon -->
                    <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                    <span class="text-sm font-semibold text-center">Ramadhan</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Section 2: Kategori Lainnya -->
    <div class="mt-6 p-4">
        <h2 class="text-sm font-semibold font-semibold mb-2">Kategori Lainnya</h2>
        <div class="grid grid-cols-3 gap-4 mt-8">
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
            <div class="flex flex-col items-center">
                <a class="flex flex-col items-center" wire:click="kategori()">
                    <!-- Placeholder for Icon -->
                    <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                    <span class="text-sm font-semibold text-center">Kategori</span>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a class="flex flex-col items-center" wire:click="kategori()">
                    <!-- Placeholder for Icon -->
                    <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                    <span class="text-sm font-semibold text-center">Kategori</span>
                </a>
            </div>
            <div class="flex flex-col items-center">
                <a class="flex flex-col items-center" wire:click="kategori()">
                    <!-- Placeholder for Icon -->
                    <div class="w-10 h-10 bg-green-500 rounded-full mb-2"></div>
                    <span class="text-sm font-semibold text-center">Kategori</span>
                </a>
            </div>
        </div>
    </div>
    <div style="height: 67px">

    </div>
</div>
