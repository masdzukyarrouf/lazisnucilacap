<div class="flex flex-col items-center justify-center ">
    <x-nav-mobile2 title="Nominal Donasi" />
    <div class=" w-full max-w-[414px] mx-auto bg-gray-100 py-4">
        <div class="w-full ">
            <!-- Kategori and Filter Buttons -->
            <div class="flex items-center justify-between">
                <!-- Campaign Cards -->
                <div class="flex grid items-center justify-center w-full h-auto grid-cols-1" wire:loading.remove>
                    <div class="z-5 flex flex-grow h-[100px] px-4 ">
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
            <div class="mx-4 mt-4">
                <!-- Donation Options -->
                <form wire:submit="bayarCustom">
                    <div class="w-full flex-col items-center space-y-4">
                        <div class="flex-col items-center pt-2 w-full">
                            <p class="text-[12px] font-semibold text-black">
                                Nominal Donasi
                            </p>
                            <input type="number"
                                class=" w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                                wire:model="nominal">
                            @error('nominal')
                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <p class="text-[14px] font-semibold text-black">
                                Mohon Lengkapi Data Di Bawah
                            </p>
                        </div>
                        <div class="flex-col items-center w-full">
                            <p class="text-[12px] font-semibold text-black">
                                Nama Anda
                            </p>
                            <input type="number"
                                class=" w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                                wire:model="nama" >
                            @error('nominal')
                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="fixed bottom-0 left-0 right-0 z-40 flex justify-center">
                            <div class="flex items-center justify-center px-4 py-4 space-x-4 bg-white"
                                style="width: 414px; height: 67px; box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 -2px 4px -2px rgba(0, 0, 0, 0.1);">
                                <button type="submit"
                                    class="text-[12px] bg-green-600 px-16 py-2 items-center text-white rounded-lg">
                                    Donasi Sekarang
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
