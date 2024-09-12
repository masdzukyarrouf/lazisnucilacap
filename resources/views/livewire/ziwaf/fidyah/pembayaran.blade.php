<div class="flex flex-col items-center justify-center ">
    <x-nav-mobile2 title="Pembayaran" />
    <div class=" w-full max-w-[414px] mx-auto bg-gray-100 py-4">
        <div class="w-full ">
            <div class="mx-4 mt-4">
                <div class="w-full flex-col items-center space-y-4">

                    <div class="w-full flex-col items-center space-y-2">
                        <h2 class="text-[12px] text-gray-500 mb-4">Anda Akan Melakukan Pembayaran Untuk Fidyah</h2>

                        <div>
                            <p class="text-[14px] font-semibold text-black">
                                Data Donatur
                            </p>
                        </div>
                        <div class="flex items-center w-full justify-start space-x-3">
                            <div class="flex-col items-center space-y-1">
                                <p class="text-[12px]  text-black">
                                    Nama
                                </p>

                                <p class="text-[12px]  text-black">
                                    No Telp
                                </p>

                                <p class="text-[12px]  text-black">
                                    Email
                                </p>
                            </div>
                            <div class="flex-col items-center space-y-1">
                                <p class="text-[12px]  text-black">
                                    : {{ $this->username }}
                                </p>
                                <p class="text-[12px]  text-black">
                                    : {{ $this->no_telp }}
                                </p>
                                @if ($this->email)
                                    <p class="text-[12px]  text-black">
                                        : {{ $this->email }}
                                    </p>
                                @else
                                    : -
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="flex-col items-center w-full space-y-2">
                        <div>
                            <p class="text-[14px] font-semibold text-black">
                                Rincian Pembayaran
                            </p>
                        </div>
                        <div class="flex items-center w-full">
                            <p class="text-[12px] text-black">
                                Total
                            </p>
                            <p class="ml-7 text-[12px] text-black">
                                : {{ $this->nominal }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 w-full">
                        <h2 class="font-semibold">
                            Metode Pembayaran
                        </h2>
                    </div>
                    <div id="snap-container" class="w-full"></div>
                    
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            window.snap.embed('{{ $this->token }}', {
                embedId: 'snap-container'
            });
        };
    </script>
