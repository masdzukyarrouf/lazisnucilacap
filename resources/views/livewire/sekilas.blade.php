<div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
    <!-- Button to open the modal -->
    <span @click="isOpen=true" class="text-green-500 cursor-pointer hover:underline">Baca Selengkapnya...</span>

    <!-- Modal Background -->
    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-600 bg-opacity-75">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-[414px]">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 bg-gray-200 rounded-t-lg">
                <h3 class="text-xl font-semibold text-green-500">Sekilas NU-Care Lazisnu Cilacap</h3>
                <div @click="isOpen=false" class="px-3 rounded-sm shadow hover:bg-red-500">
                    <button class="text-gray-900">&times;</button>
                </div>
            </div>
            <div class="p-4">
                <p class="mb-2 text-sm">NU Care-LAZISNU adalah rebranding dari Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU)  milik perkumpulan Nadhlatul Ulama (NU).</p>
                <p class="mb-2 text-sm">NU Care-LAZISNU adalah rebranding dan / atau sebagai pintu masuk agar masyarakat global mengenal Lembaga Amil Zakat, Infak, dan Sedekah Nahdlatul Ulama (LAZISNU) sebagai lembaga filantropi NU. LAZISNU secara yuridis-formal dikukuhkan oleh SK  Menteri Agama RI No. 65/2005 dan terbaru melalui Keputusan Menteri Agama no.89 tahun 2022 untuk melakukan penghimpunan, pendistribusian dan pendayagunaan Zakat, Infak, dan Sedekah (ZIS) dan dana  sosial keagamaan lainnya (DSKL)  kepada masyarakat luas sesuai dengan ketentuan syariat islam dan peraturan perundang – undangan </p>
                <p class="text-sm">NU Care-LAZISNU Cilacap merupakan lembaga nirlaba milik Pengurus Cabang Nahdlatul Ulama Cilacap yang bertujuan untuk berkhidmat dalam rangka membantu kesejahteraan dan kemandirian umat; mengangkat harkat sosial dengan mendayagunakan dana Zakat, Infak, Sedekah (ZIS) dan dana sosial-keagamaan lainnya (DSKL). NU Care Lazisnu Cilacap juga telah mendapatkan ijijn operasional dari LAZISNU PBNU berdasarkan SK LAZISNU PBNU nomor : 159/SK/PP-LAZISNU/IX/2018, nomor : 333/SK/PP-LAZISNU/X/2020 dan nomor : 062/SK/A.II/LAZISNU-PBNU/IX/2022 tentang pengesahan dan pemberian ijin  operasional kepada NUCARE LAZISNU Cilacap.</p>
            </div>
        </div>
    </div>
</div>
