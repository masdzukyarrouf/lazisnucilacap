<div class="flex flex-col items-center justify-center ">
    <x-nav-mobile2 title="Nominal Donasi" :backUrl="route('campaign')"/>
    <div class=" w-full max-w-[414px] mx-auto bg-gray-100 py-4">
        <div class="w-full ">
            <!-- Kategori and Filter Buttons -->
            <div class="flex items-center justify-between">
                <!-- Campaign Cards -->
                <div class="flex grid items-center justify-center w-full h-auto grid-cols-1" wire:loading.remove>
                    <div class="z-5 flex flex-grow h-[100px] px-4">
                        <div
                            class="z-0 relative group flex justify-center items-center w-[220px] h-full overflow-hidden">
                            <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="Picture"
                                class="object-cover w-full h-full hover:cursor-pointer">
                            <div
                                class="hover:cursor-pointer absolute inset-0 flex items-center justify-center bg-green-600 bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <p class="text-white text-lg text-center">View Campaign</p>
                            </div>
                        </div>
                        <div class="px-3  w-4/5 ">
                            <p class="text-[12px] text-gray-400">
                                Anda akan berdonasi untuk campaign
                            </p>
                            <p class="text-[14px] font-semibold text-gray-800">
                                {{ \Illuminate\Support\Str::limit($campaign->title, 40, '...') }}
                            </p>
                            <div class="flex items-center mt-1">
                                <img src="{{ asset('images/icon_location.png') }}" alt="pinpoint" class="w-3 h-3">
                                <p class="pl-1 text-[10px]  text-gray-600">{{ $campaign->lokasi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-4">
                <p class="text-[12px] font-semibold text-green-500">
                    Pilih Nominal Donasi
                </p>


                <!-- Donation Options -->
                <div class="space-y-4 mt-4">
                    <!-- Option Buttons -->
                    <button wire:click="bayar(25000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 25.000
                        <span class="text-black">></span>
                    </button>
                    <button wire:click="bayar(50000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 50.000
                        <span class="text-black">></span>
                    </button>
                    <button wire:click="bayar(100000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 100.000
                        <span class="text-black">></span>
                    </button>
                    <button wire:click="bayar(200000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 200.000
                        <span class="text-black">></span>
                    </button>
                    <button wire:click="bayar(500000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 500.000
                        <span class="text-black">></span>
                    </button>
                    <button wire:click="bayar(1000000)"
                        class="w-full text-left h-9 px-4 border rounded-lg flex justify-between items-center bg-white">
                        Rp. 1.000.000
                        <span class="text-black">></span>
                    </button>

                </div>
                <form wire:submit="bayarCustom">
                    <div class="mt-2 w-full ">
                        <label class="text-[12px] font-semibold text-green-500 mx-2">Nominal Donasi Lainnya</label>
                        <div class="flex items-center pl-4 w-full bg-white rounded-lg border-2">
                            <span class="text-gray-600">Rp.</span>
                            <input type="number"
                                class="ml-2 w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                                wire:model="nominal" placeholder="Minimal donasi {{$this->campaign->min_donation}}">
                        </div>
                        @error('nominal')
                            <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                        @enderror
                        <div class="flex items-center justify-center py-4 space-x-4 w-full">
                            <button type="submit"
                                class="text-[12px] bg-green-600 px-16 py-2 items-center text-white rounded-lg w-full">
                                Donasi Sekarang
                            </button>
                        </div>
                    </div>



                </form>

            </div>


        </div>
        <script>
            document.getElementById('openModal').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('modalOverlay').classList.remove('hidden');
            });

            document.getElementById('closeModal').addEventListener('click', function() {
                document.getElementById('modalOverlay').classList.add('hidden');
            });

            document.getElementById('modalOverlay').addEventListener('click', function(event) {
                if (event.target === event.currentTarget) {
                    document.getElementById('modalOverlay').classList.add('hidden');
                }
            });
        </script>
