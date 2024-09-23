<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col h-full pb-24 bg-white shadow-md" style="width: 414px">
        <div class="w-full p-6 ">
            <h2 class="text-[12px] text-gray-500 mb-4">Anda Akan Melakukan Pembayaran Untuk Fidyah</h2>
            <form wire:submit="bayarFidyah">
                <div class="flex items-center mb-2">
                    <div class="w-40 text-gray-500">Atas nama</div>
                    <div class="w-4 text-gray-500text-center">:</div>
                    <div>{{ $atasNama }}</div>
                </div>
                <label class="block text-sm font-bold ">Nominal</label>

                <div class="flex items-center w-full mr-2 text-green-500 bg-white border rounded-md">
                    <p class=" text-[12px] text-center italic mx-2 w-8">Rp</p>
                    <input type="text" 
                        class="text-[12px] w-full p-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        wire:model="nominal"
                        onload="formatInput(this)">
                </div>
                <h3 class="text-[16px] font-semibold  mb-2">Mohon Lengkapi Data Berikut</h3>
                @if (!Auth::check())
                    <p class="text-[12px]  mb-4">Sudah Punya Akun? <a href="/login"
                            class="text-green-500 hover:underline">Login</a></p>
                @endif
                <div class="mb-4">
                    <label class="block text-sm font-bold ">Nama Anda *</label>
                    <input type="text" wire:model="username"
                        class="mt-1 text-[12px] block w-full p-2 border border-border rounded-md bg-input text-foreground"
                        placeholder="Isikan nama anda" />
                    @error('username')
                        <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold ">No Telepon (WhatsApp Aktif) *</label>
                    <input type="tel" wire:model="no_telp"
                        class="mt-1 text-[12px] block w-full p-2 border border-border rounded-md bg-input text-foreground"
                        placeholder="Isikan no whatsapp anda" />
                    @error('no_telp')
                        <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold ">Email (opsional)</label>
                    <input type="email" wire:model="email"
                        class="mt-1 text-[12px] block w-full p-2 border border-border rounded-md bg-input text-foreground"
                        placeholder="Isikan Email Anda" />
                    @error('email')
                        <span class="mt-2 text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <p class="text-[10px]  mb-4">
                    Data pribadi Anda akan digunakan untuk memproses pesanan Anda, menunjang pengalaman Anda di seluruh
                    situs web ini, dan untuk tujuan lain yang dijelaskan dalam
                    <a href="#" class="text-blue-500 hover:underline">kebijakan privasi</a> kami.
                </p>
                <button type="submit" class="w-full p-2 text-white bg-green-500 rounded-md">Bayar fidyah
                    Sekarang</button>
            </form>
        </div>
    </div>
</div>
<script>
    function formatInput(input) {
        let value = input.value.replace(/\D/g, ''); // Remove any non-digit characters
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Add dot every 3 digits
        input.value = value;
    }
</script>