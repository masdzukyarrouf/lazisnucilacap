<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Riwayat" />
    <div class="flex flex-col bg-gray-200 shadow-md" style="width: 414px;">
        <div>
            @if ($donasis->isEmpty())
                <p>No donations found for this user.</p>
            @else
                <ul>
                    <div class="pt-4 bg-white">

                        @foreach ($donasis as $donasi)
                            <li class="px-4 bg-white" wire:click="{{ $donasi->id_donasi }}">
                                <div class="z-5 flex flex-grow py-4">
                                    <div
                                        class="z-0 relative group flex justify-center items-center w-[120px] h-[60px] overflow-hidden">
                                        <img src="{{ asset('storage/images/campaign/' . $donasi->image) }}" alt="Picture"
                                            class="object-cover w-full h-full hover:cursor-pointer">
                                    </div>
                                    <div class="px-3  w-4/5 ">
                                        <p class="text-[12px] font-semibold text-gray-800">
                                            {{ \Illuminate\Support\Str::limit($donasi->title, 35, '...') }}
                                        </p>
                                        <p class="text-[11px] text-gray-800">
                                            Berdonasi Sebesar
                                        </p>
                                        <div class="flex items-center justify-between">
                                            <p class="text-[11px] font-semibol text-green-500">
                                                Rp. {{$donasi->jumlah_donasi}}
                                            </p>
                                            <p class="text-[11px] text-black">
                                                {{$donasi->waktu_donasi}} Hari yang lalu
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div class="py-1 w-full bg-gray-200">
                                {{-- empty --}}
                            </div>
                        @endforeach
                    </div>
                </ul>
            @endif
            <div style="height: 67px "></div>

        </div>
    </div>
</div>
