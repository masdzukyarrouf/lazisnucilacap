<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Pembayaran" />
    <div class="flex flex-col bg-white shadow-md" style="width: 414px; height: 736px">
        <div class="mx-5 mt-5">
            <h2 class="font-semibold">
                Rincian Zakat
            </h2>
            <div class="flex flex-col mt-2">
                <div class="flex items-center my-4">
                    <h2 style="padding-right: 123px">Total Kekayaan</h2> <h2 class="pr-2">:</h2>
                    <h2>
                        @if($totalHarta1 !== '0')
                            {{ $totalHarta1 }}
                        @elseif($totalPendapatan1 !== '0')
                            {{ $totalPendapatan1 }}
                        @else
                            0
                        @endif
                    </h2>
                </div>
                    <h2>Hutang Pribadi Yang Jatuh</h2>
                    <div class="flex items-center">
                        <h2 style="padding-right: 113px">Tempo Tahun Ini</h2>
                        <h2 class="pr-2">:</h2>
                        <h2>
                            @if($hutang !== '')
                                {{ $hutang }}
                            @elseif($cicilan !== '')
                                {{ $cicilan }}
                            @else
                                0
                            @endif
                        </h2>
                    </div>
                <div class="flex my-4">
                    <h2 style="padding-right: 80px">Perhitungan Zakat</h2> <h2 class="pr-2">:</h2>
                    <h2>
                        @if($hutang !== '')
                            <h2>{{ $totalHarta1 }} - {{ $hutang }} X 2.5%</h2>
                        @elseif($cicilan !== '')
                            <h2>{{ $totalPendapatan1 }} - {{ $cicilan }} X 2.5%</h2>
                        @else
                            0
                        @endif
                    </h2>
                </div>

                <div class="mt-5">
                    <h2 class="font-semibold">
                        Pembayaran Zakat
                    </h2>
                    <div class="flex mt-2">
                        <h2 class="pr-16">Total</h2>
                        <h2 class="pr-2">:</h2>
                        <h2 class="font-semibold text-green-500">Rp. </h2>
                        <h2 class="font-semibold text-green-500">
                            @if($zakatNominal !== '0')
                                {{ $zakatNominal !== '' ? number_format($zakatNominal, 0, ',', '.') : 'Rp. 0' }}
                            @elseif($zakatProfesi !== '0')
                                {{ $zakatProfesi !== '' ? number_format($zakatProfesi, 0, ',', '.') : 'Rp. 0' }}
                            @else
                                0
                            @endif
                        </h2>
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="font-semibold">
                        Metode Pembayaran
                    </h2>
                    <div>
                        <img src="{{ asset('images/gopay.png') }}" alt="gopay" class="my-2">
                        <img src="{{ asset('images/shopee.png') }}" alt="shopee" class="my-2">
                        <img src="{{ asset('images/VA bni.png') }}" alt="bni" class="my-2">
                        <img src="{{ asset('images/VA permatabank.png') }}" alt="permatabank" class="my-2">
                        <img src="{{ asset('images/mandiri.png') }}" alt="mandiri" class="my-2">
                        <img src="{{ asset('images/tf.png') }}" alt="transfer" class="my-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
