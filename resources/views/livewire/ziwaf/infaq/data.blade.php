<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Ziwaf Lazisnu Cilacap" />
    <div class="flex flex-col h-full pb-24 bg-white shadow-md" style="width: 414px">
        <div class="w-full p-6 ">
            <h2 class="text-[12px] text-gray-500 mb-4">Anda Akan Melakukan Pembayaran Untuk {{$this->jenis_ziwaf}}</h2>
            <form wire:submit="bayarInfaq">
                <label class="block text-sm font-bold ">Nominal Infaq</label>

                <div class="flex items-center font-bold mr-2 border w-full rounded-md bg-white text-green-500">
                    <p class=" text-[12px] text-center italic mx-2 w-8">Rp</p>
                    <input type="text" disabled
                        class="text-[12px] w-full p-2 focus:outline-none focus:ring-2 focus:ring-gray-500"
                        wire:model="nominal_infaq"
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
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold ">No Telepon (WhatsApp Aktif) *</label>
                    <input type="tel" wire:model="no_telp"
                        class="mt-1 text-[12px] block w-full p-2 border border-border rounded-md bg-input text-foreground"
                        placeholder="Isikan no whatsapp anda" />
                    @error('no_telp')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold ">Email (opsional)</label>
                    <input type="email" wire:model="email"
                        class="mt-1 text-[12px] block w-full p-2 border border-border rounded-md bg-input text-foreground"
                        placeholder="Isikan Email Anda" />
                    @error('email')
                        <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <p class="text-[10px]  mb-4">
                    Data pribadi Anda akan digunakan untuk memproses pesanan Anda, menunjang pengalaman Anda di seluruh
                    situs web ini, dan untuk tujuan lain yang dijelaskan dalam
                    <a href="#" class="text-blue-500 hover:underline">kebijakan privasi</a> kami.
                </p>
                <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md">Bayar Infaq
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