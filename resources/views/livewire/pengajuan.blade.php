<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Pengajuan" />
    <div class="flex flex-col bg-white shadow-md h-full" style="width: 414px;">
        <div class="mx-[24px] bg-white ">
            <h2 class="text-[14px] font-semibold text-green-600 mt-4">FORMULIR PENGAJUAN UMUM</h2>

            <form>
                <!-- Nama Anda -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="nama-anda">
                        Nama Anda
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama-anda" type="text" placeholder="Isikan nama anda">
                </div>

                <!-- No Telepon -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="no-telepon">
                        No Telepon
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="no-telepon" type="text" placeholder="Isikan no WhatsApp anda">
                </div>

                <!-- Jenis Pemohon -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="jenis-pemohon">
                            Jenis Pemohon
                    </label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="jenis-pemohon">
                        <option>Jenis Pemohon</option>
                        <option>Entitas</option>
                        <option>Perseorangan</option>
                    </select>
                </div>

                <!-- Keterangan -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="keterangan">
                        Keterangan
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="keterangan" rows="4" placeholder="Keterangan"></textarea>
                </div>

                <!-- Tanggal Pelaksanaan -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="tanggal-pelaksanaan">
                        Tanggal Pelaksanaan
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="tanggal-pelaksanaan" type="date">
                </div>

                <!-- Nominal Pengajuan -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="nominal-pengajuan">
                        nominal pengajuan
                    </label>
                    <div class="relative">
                        <span
                            class="absolute inset-y-0 left-0 flex items-center ml-3 pointer-events-none text-gray-500">Rp.</span>
                        <input
                            class="pl-10 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="nominal-pengajuan" type="numbe" placeholder="Isikan dengan nominal pengajuan">
                    </div>
                </div>

                <!-- Jumlah Penerima -->
                <div class="mt-3">
                    <label class="block text-gray-700  font-bold mb-2 text-[12px]" for="jumlah-penerima">
                        Jumlah Penerima
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="jumlah-penerima" type="text" placeholder="Isikan dengan nama program">
                </div>

                <!-- Kirim Button -->
                <div class="mt-3">
                    <button
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        kirim
                    </button>
                </div>
            </form>
        </div>
        <div style="height: 67px "></div>
    </div>
</div>
