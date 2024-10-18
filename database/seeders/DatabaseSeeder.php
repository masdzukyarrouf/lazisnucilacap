<?php

namespace Database\Seeders;

use App\Livewire\Landing;
use App\Models\Campaign;
use App\Models\gambar_landing;
use App\Models\visi;
use App\Models\misi;
use App\Models\Donasi;
use App\Models\User;
use App\Models\Doa;
use App\Models\Like;
use App\Models\Berita;
use App\Models\Mitra;
use App\Models\Kategori;
use App\Models\pilar_program;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\VisiFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => '123',
            'password' => '123',
            'role' => 'admin',
        ]);

        Mitra::factory()->create([
            'partner_name' => 'AL BAROKAH CILACAP',
            'logo' => 'images/mitra/AL BAROKAH CILACAP.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'AL MA\'WA NU',
            'logo' => 'images/mitra/AL MA\'WA NU.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'ALFAMART',
            'logo' => 'images/mitra/ALFAMART.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'AYAM PENYET SURABAYA',
            'logo' => 'images/mitra/AYAM PENYET SURABAYA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BADAN PANGAN NASIONAL',
            'logo' => 'images/mitra/BADAN PANGAN NASIONAL.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BANK JATENG',
            'logo' => 'images/mitra/BANK JATENG.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BANK MEGA SYARIAH',
            'logo' => 'images/mitra/BANK MEGA SYARIAH.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BANK SYARIAH',
            'logo' => 'images/mitra/BANK SYARIAH.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BAS',
            'logo' => 'images/mitra/BAS.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BAZNAS',
            'logo' => 'images/mitra/BAZNAS.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BEM UNUGHA',
            'logo' => 'images/mitra/BEM UNUGHA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BMT EL-SEJAHTERA',
            'logo' => 'images/mitra/BMT EL-SEJAHTERA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BMT NU CILACAP',
            'logo' => 'images/mitra/BMT NU CILACAP.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BNI',
            'logo' => 'images/mitra/BNI.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BPJS Kesehatan',
            'logo' => 'images/mitra/BPJS Kesehatan.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BPKH',
            'logo' => 'images/mitra/BPKH.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BRI',
            'logo' => 'images/mitra/BRI.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'BSI',
            'logo' => 'images/mitra/BSI.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'CV RISQI GROUP ABADI',
            'logo' => 'images/mitra/CV RISQI GROUP ABADI.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'DETASEMEN KHUSUS 88 ANTI TERROR',
            'logo' => 'images/mitra/DETASEMEN KHUSUS 88 ANTI TERROR.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'DINKES CILACAP',
            'logo' => 'images/mitra/DINKES CILACAP.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'IGRA',
            'logo' => 'images/mitra/IGRA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'IKATAN PROFESI OPTOMETRIS INDONESIA',
            'logo' => 'images/mitra/IKATAN PROFESI OPTOMETRIS INDONESIA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'IKHLAS BERAMAL',
            'logo' => 'images/mitra/IKHLAS BERAMAL.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'JADI BARU TOSERBA',
            'logo' => 'images/mitra/JADI BARU TOSERBA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'KIC',
            'logo' => 'images/mitra/KIC.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'Kita Bisa.com',
            'logo' => 'images/mitra/Kita Bisa.com.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'LEGGO',
            'logo' => 'images/mitra/LEGGO.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'NUCOM',
            'logo' => 'images/mitra/NUCOM.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'NUONLINE',
            'logo' => 'images/mitra/NUONLINE.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'OEMAH AMAL',
            'logo' => 'images/mitra/OEMAH AMAL.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'Paragon',
            'logo' => 'images/mitra/Paragon.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PERCETAKAN KELUD JAYA',
            'logo' => 'images/mitra/PERCETAKAN KELUD JAYA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PERSATUAN PERAWAT NASIONAL INDONESIA',
            'logo' => 'images/mitra/PERSATUAN PERAWAT NASIONAL INDONESIA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PLN PEDULI',
            'logo' => 'images/mitra/PLN PEDULI.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PLN',
            'logo' => 'images/mitra/PLN.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PNC',
            'logo' => 'images/mitra/PNC.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'POLRES JATENG',
            'logo' => 'images/mitra/POLRES JATENG.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'POROZ',
            'logo' => 'images/mitra/POROZ.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'PORTAL',
            'logo' => 'images/mitra/PORTAL.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'S2P',
            'logo' => 'images/mitra/S2P.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'SBm',
            'logo' => 'images/mitra/SBm.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'TOKOPEDIA SALAM',
            'logo' => 'images/mitra/TOKOPEDIA SALAM.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'UNUGHA CILACAP',
            'logo' => 'images/mitra/UNUGHA CILACAP.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'WIJAYA KUSUMA',
            'logo' => 'images/mitra/WIJAYA KUSUMA.png'
        ]);

        Mitra::factory()->create([
            'partner_name' => 'AL MA\'WA NU - Copy',
            'logo' => 'images/mitra/AL MA\'WA NU - Copy.png'
        ]);

        visi::factory()->create([
            'visi' => 'Menjadi Lembaga Filantropi Islam Terkemuka'
        ]);

        misi::factory()->create([
            'misi' => 'Menyediakan program-program untuk peningkatan kualitas sumber daya manusia sehingga 
                        mampu melahirkan intelektual, teknokrat dan wirausahawan yang Unggul dan handal serta 
                        memberikan akses lapangan kerja dan kesempatan berkarir disektor strategis selaras 
                        dengan bidang yang dibutuhkan pemerintah.'
        ]);

        misi::factory()->create([
            'misi' => 'Menjadi pilihan utama mitra strategis dalam berkolaborasi dan bersinergi menjalankan berbagai kegiatan/usaha sosial;'
        ]);

        misi::factory()->create([
            'misi' => 'Meliterasi dan menggalang dana infaq shadaqah dan dana abadi (Trust Fund) berbasis digital untuk kepentingan kegiatan yang berbasis Investasi Sosial;'
        ]);

        gambar_landing::factory()->create([
            'gambar' => 'images/gambar_landing/donasi.png',
            'link' => 'http://127.0.0.1:8000/campaigns'
        ]);

        gambar_landing::factory()->create([
            'gambar' => 'images/gambar_landing/berita.jpg',
            'link' => 'http://127.0.0.1:8000/berita'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Bencana Alam',
            'image' => 'Bencana Alam.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Pendidikan',
            'image' => 'Pendidikan.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Sosial & Keagamaan',
            'image' => 'Sosial & Keagamaan.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Ekonomi',
            'image' => 'Ekonomi.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Ramadhan',
            'image' => 'Ramadhan.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Kesehatan',
            'image' => 'Kesehatan.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Laporan & Publikasi',
            'image' => 'Laporan & Publikasi.png'
        ]);


        Berita::factory()->create([
            'title_berita' => 'Program Ramadhan 2024, Nu Care-Lazisnu Cilacap Berhasil Menyalurkan Kepada 54.000 Penerima Manfaat',
            'description' => 'NU Care-LAZISNU Cilacap telah berhasil menyalurkan dana zakat, infak, dan sedekah (ZIS) pada Ramadan 1445 H/2024 M kepada lebih dari 54.000 penerima manfaat. Dana ZIS tersebut disalurkan melalui 5 pilar program dan 12 program unggulan yang dilaksanakan selama bulan Ramadan 1445 H.

                                Program Ramadan yang telah dilaksanakan antara lain, Peningkatan Gizi dan Ketahanan Pangan, Beasiswa santri nusantara, Syiar quran, Beras santri nusantara, Belanja bersama adik juara anak yatim, Bantuan usaha untuk keluarga berdaya, Layanan Masjid Sehat, Warteg Gratis untuk Pejuang Nafkah, Sepeda Sekolah untuk yatim dhuafa, Bantuan usaha untuk difabel berdaya, Training guru Al-Quran, Gerai Ta’jil Gratis serta Bantuan Kemanusiaan untuk Palestina.

                                Selain program-program yang telah disebutkan, masih banyak puluhan program yang telah berjalan beriringan selama Ramadan 1445 H ini. Pelaksanaan-program Ramadan ini berlandaskan lima pilar NU Care-LAZISNU Cilacap, yaitu Pendidikan, Kesehatan, Kemanusiaan, Ekonomi dan Dakwah-Advokasi. Apabila dirinci terdapat sekitar 54 ribu lebih penerima manfaat tersebut terdiri dari 296 jiwa penerima manfaat bidang pendidikan, 518 penerima manfaat bidang kesehatan, 3.955 penerima manfaat bidang kemanusiaan, 83 penerima manfaat bidang Ekonomi dan 13.109 penerima manfaat bidang Dakwah-Advokasi dan 35.000 penerima manfaat bidang lainnya.
                                Data Program Ramadhan ini terangkum sejak awal bulan ramadhan 1445 H, tepatmya tanggal 12 maret 2024 hingga akhir ramadhan yakni tanggal 9 April 2024. Untuk persebaran wilayah pentasarufan NU Care-Lazisnu Cilacap telah berhasil menjangkau 24 kecamatan dan 269 desa di Kabupaten Cilacap.

                                Direktur NU Care-LAZISNU Cilacap, Ahmad Fauzi, S.Pdi mengatakan bahwasannya program Ramadhan ini merupakan program rutin NU Care-LAZISNU Cilacap setiap tahunnya, tahun ini kita mengusung tema Mahabbah Ramadhan dengan tujuan menyebarkan cinta dan kasih sayang kepada saudara kita yang membutuhkan. Alhamdulillah, capaian Ramadhan kali ini mengalami peningkatan dari tahun kemarin. Semua pencapaian ini tidak lepas dari peran serta munfiq, donatur, stakeholder serta mitra-mitra yang sudah turut serta dalam #kolaborasikankebaikan bersama NU Care-LAZSINU Cilacap.

                                “Terimakasih kepada munfiq, donatur, stakeholder serta mitra yang telah bersama-sama #kolaborasikankebaikan menyukseskan program ramadhan tahun ini, Alhamdulillah kita berhasil mentasarufkan program-program ramadhan di 24 kecamatan dan 269 desa mulai dari cilacap ujung barat hingga cilacap ujung timur. Harapan kita untuk tahun berikutnya kita mampu menjangkau lebih banyak penerima manfaat, karena senyum kebahagiaan penerima manfaat menjadi kebahagiaan kita semua” ungkapnya.',
            'picture' => 'images/berita/1.jpeg',
            'tanggal' => '2024-05-20',
            'id_kategori' => '3'
        ]);

        Berita::factory()->create([
            'title_berita' => 'Pemkab Beri Piagam Ambulance Teraktif kepada NU Care-LAZISNU Cilacap',
            'description' => 'Dinas Kesehatan Pengendalian Penduduk dan Keluarga Berencana (Dinkes PPKB) Kabupaten Cilacap memberikan Piagam Apresiasi kepada NU Care LAZISNU Cilacap sebagai Lembaga Amil Zakat dengan Program layanan ambulance rujukan kesehatan teraktif.

                                dr Pramesti Griana Dewi MKes MSi selaku Kepala Dinas melalui Kepala Bidang Farmasi, alat kesehatan dan makanan minuman, Hudaefah, SKM, MKes menyampaikan apresiasi atas peran serta mobil layanan umat NU Care LAZISNU Cilacap sebagai rujukan kesehatan teraktif.

                                Disampaikan bahwa NU Care LAZISNU Cilacap telah melayani sebanyak 3.842 penerima manfaat. Di antaranya meliputi mengantar jemput pasien yang berobat ke rumah sakit. Juga layanan mengantar jenazah.

                                Kepala Dinas berharap, ke depan mobil layanan umat LAZISNU Cilacap dapat lebih optimal lagi menjangkau seluruh masyarakat di Kabupten Cilacap yang membutuhkan.

                                Penghargaan diterima Ketua Tanfidziyah PCNU Cilacap Dr H Imam Tobroni pada kegiatan ‘Rapat Koordinasi Layanan Kesehatan’ di Gedung Pusdiklat PCNU Cilacap. Jalan Raya Kalisabuk KM 15 Cilacap Sabtu, (18/05/2024) kemarin.

                                Dr H Imam Tobroni melalui Direktur NU Care LAZISNU Cilacap Ahmad Fauzi melaporkan sepanjang 2023, mobil ambulance kemanusiaan NU Care LAZISNU Cilacap Jawa Tengah telah aktif melayani sebanyak 3.842 penerima manfaat.

                                Layanan tersebut berupa berbagai keperluan, mulai mengantar jemput pasien yang berobat ke rumah sakit, hingga mengantar jenazah.

                                “Total ada 2.811 layanan pasien dan 1.031 jenazah. Untuk jumlah seluruhnya 3.842 penerima manfaat,” kata Direktur
                                NU Care LAZISNU Cilacap Ahmad Fauzi.
                                Rincian Layanan Ambulance.

                                Fauzi merinci, layanan mobil ambulance kemanusiaan NU Care LAZISNU Cilacap tahun 2023 adalah sebagai berikut:

                                Januari, sebanyak 207 pasien, 113 jenazah dengan total 320 penerima manfaat,
                                2. Februari, sebanyak 147 pasien, 75 jenazah, dengan total 222 penerima manfaat,
                                3. Maret, sebanyak 178 pasien, 92 jenazah dengan total 270 penerima manfaat,
                                4. April, 185 pasien, 75 pasien dengan total 260 penerima manfaat
                                5. Mei, sebanyak 230 pasien, 109 jenazah dengan total 339 penerima manfaat,
                                6. Juni, sebanyak 228 pasien, 67 jenazah dengan total 295 penerima manfaat.
                                7. Juli, sebanyak 246 pasien, 78 jenazah dengan total 324 penerima manfaat,
                                8. Agustus, sebanyak 255 pasien, 78 jenazah dengan total 333 penerima manfaat,
                                9. September, sebanyak 259 pasien, 94 jenazah dengan total 353 penerima manfaat,
                                10. Oktober, sebanyak 290 pasien, 85 jeazah dengan total 375 penerima manfaat,
                                11. November, sebanyak 308 pasien, 82 Jenazah dengan total 390 penerima manfaat, dan
                                12. Desember sebanyak 278 pasien, 83 jenazah dengan total 361 penerima manfaat.
                                Total layanan ambulance
                                NU Care LAZISNU Cilacap LAZISNU Cilacap tersebut mencerminkan layanan teraktif. Fauzi mengatakan ini merupakan bentuk pengabdian NU Care LAZISNU Cilacap atas nama kemanusiaan.

                                “Bagi masyarakat luas terutama di Kabupaten Cilacap yang hendak menggunakan jasa ambulance kemanusiaan ini dipersilakan dengan menghubungi Nomo 081228221010 Call Center LAZISNU Cilacap.” tambahnya.

                                “Mohon doanya agar layanan mobil ambulance kemanusiaan NU Care LAZISNU Cilacap terus berkembang dan menjangkau sudut-sudut tempat tinggal masyarakat yang terisolir sekalipun,” tegasnya. (IHA)

                                Penulis : Imam Hamidi Antassalam

                                Sumber : pcnucilacap.com',
            'picture' => 'images/berita/2.jpeg',
            'tanggal' => '2024-05-20',
            'id_kategori' => '3'
        ]);

        Berita::factory()->create([
            'title_berita' => 'Khidmah LAZISNU, Bupati Cilacap Ganjar dengan Dua Penghargaan',
            'description' => 'Lembaga Amil Zakat dan Infaq dan Sedekah Nadlatul Ulama (LAZISNU) Cilacap mendapatkan penghargaan dari Bupati Cilacap Awaluddin Muuri saat pembukaan Konferensi Cabang (Konfercab) NU Cilacap pada Sabtu (20/4/2024) di Gedung Diklat NU setempat.


                                Direktur LAZISNU Cilacap Ahmad Fauzi mengatakan, penghargaan tersebut berupa dua kategori di antaranya terkait penanggulangan bencana dan responsif dalam peningkatan kesejahteraan masyarakat.

                                “Pertama, penghargaan penanggulangan bencana di Cilacap dan kedua sebagai Lembaga Amil Zakat dan Infaq responsif terhadap peningkatan kesejahteraan di bidang ekonomi dan sosial,” ujarnya kepada NU Online Jateng Jumat (26/4/2024).

                                Disampaikan, program-program pembinaan dan pendampingan maupun penggalangan pendanaan yang selama LAZISNU lakukan telah mendapat apresiasi dari pemerintah khususnya dalam penanggulangan bencana dan peningkatan kesejahteraan.

                                “Atas peran dan kontribusi, LAZISNU Cilacap juga mendapat penghargaan NU Cilacap Awad PCNU Cilacap melalui dua pemimpinnya yakni H Wasbah Samudra Fawaid, sebagai Ketua LAZISNU dan Ahmad Fauzi sebagai Sekretaris NU LAZISNU Cilacap,” terangnya.


                                Menurutnya, 2 penghargaan dari PCNU diberikan sebagai tokoh muda NU teladan yang memiliki kontribusi, pemikiran, dan karya yang berpengaruh luas dan berkontribusi kuat untuk menggerakkan filantropi NU Cilacap.


                                “Juga sekaligus menjadi inisiator digitalisasi pengelolaan LAZISNU. Penghargaan diberikan oleh Rais dan Ketua PCNU Cilacap,” ungkapnya.


                                Rais PCNU Cilacap KH Syu’ada Adzkiya mengaku salut atas kinerja LAZISNU. Mereka tiada lelah untuk berkhidmah menghimpun dan menyalurkan, memantau dan memonitor aktivitas LAZISNU di lapangan.


                                “Alhamdulillah, atas kiprah LAZISNU Cilacap, PWNU Jateng memberikan penghargaan pada kegiatan Muskerwil NU Jateng di Kabupaten Kendal beberapa waktu yang lalu,” terangnya. 


                                Diketahui, kiprah LAZISNU Cilacap sejak beberapa tahun terakhir ini khususnya dalam pengumpulan dana melalui Kotak Infaq (Koin) NU bisa terkumpul hingga miliaran rupiah setiap bulannya. Gerakan yang secara masif dilakukan mengundang berbagai cabang maupun MWC untuk belajar manajemen penghimpunan dan pengelolaannya.

                                Pengirim: Ahmad Solkan 
                                Sumber : jateng.nu.or.id',
            'picture' => 'images/berita/3.jpeg',
            'tanggal' => '2024-05-20',
            'id_kategori' => '7'
        ]);

        Berita::factory()->create([
            'title_berita' => 'NU Care-LAZISNU Salurkan Bantuan 3 Truk Kontainer Paket Pangan, Tepung dan Terpal untuk Warga Gaza',
            'description' => 'Jakarta, NU Care
                                Penyaluran bantuan kemanusiaan bagi rakyat Palestina terus dilakukan oleh NU Care-LAZISNU melalui sejumlah mitra, baik di dalam maupun luar negeri. Teranyar, NU Care-LAZISNU melalui Gazze Destek Dernegi (GDD) atau Asosiasi Dukungan Gaza yang bermarkas di Istanbul, Turki mengirimkan 3 (tiga) truk kontainer bantuan kemanusiaan berupa paket pangan, tepung dan terpal yang didistribusikan bagi warga Gaza, Palestina.

                                Direktur Eksekutif NU Care-LAZISNU PBNU, Qohari Cholil mengungkapkan bahwa hingga saat ini warga Gaza masih membutuhkan bantuan, maka itu pihaknya berkomitmen akan terus menyalurkan bantuan melalui berbagai mitra NU Care-LAZISNU, salah satunya GDD.

                                “Melalui GDD ini, proses pengiriman bantuan ke Gaza via Mesir sudah dilakukan, dengan bentuk bantuan berupa satu truk kontainer berisi paket pangan, satu truk tepung atau gandum, dan satu truk lagi berisi bantuan terpal,” kata Qohari di kantor NU Care-LAZISNU PBNU, Jakarta Pusat, Rabu (24/04/2024).

                                Qohari berharap bantuan tersebut dapat segera diterima oleh warga Gaza.

                                “Mudah-mudahan prosesnya berjalan lancar dan bantuan segera bisa diterima oleh warga Palestina di Gaza yang memang sangat membutuhkannya,” ucapnya.

                                Sementara itu, Manajer Kemitraan Wilayah Asia Tenggara GDD, Faqihussyari menjelaskan bantuan kemanusiaan dari NU Care-LAZISNU diberangkatkan dari Gudang Paket Pangan Ismailiyah, Mesir pada 30 Maret dan tiba di Rafah pada 13 April 2024.

                                “Alhamdulillah sebanyak 1.452 paket pangan bantuan dari NU Care-LAZISNU sudah masuk Gaza. Satu truk tepung atau gandum untuk bahan roti juga sudah masuk Gaza dan sudah didistribusikan oleh tim GDD di Gaza, tinggal truk terpal kami masih menunggu kabar,” papar Faqih dalam laporannya.

                                Adapun bantuan paket pangan berisikan kurma, beras Mesir, manisan, selai kacang, daging sapi kaleng, keju, saus tomat, spaghetti, pembalut wanita, keju kuning, tuna kaleng, teh, gula, hums, garam, dan tepung.

                                Pihaknya pun menyampaikan ucapan terima kasih kepada Nahdlatul Ulama dan rakyat Indonesia atas dukungan dan bantuan kemanusiaan bagi Palestina.

                                “Tim GDD berterima kasih dan memberikan apresiasi tertinggi untuk NU Care- LAZISNU dan rakyat Indonesia yang selalu men-support dan memberikan bantuan terbaik untuk rakyat Palestina, baik langsung di dalam Gaza maupun melalui truk-truk kemanusiaan dari Kairo Mesir. Jazakumullahu khairan wa barakallahu fikum,” tutur Faqih.

                                Ia berharap kemitraan NU Care-LAZISNU dengan GDD dapat berlanjut dan terus memberikan bantuan bagi rakyat Palestina yang mengungsi di Jalur Gaza.

                                “Harapan kami semoga kerja sama ini terus berlanjut antara LAZISNU dan GDD, agar bisa memberikan manfaat yang lebih luas kepada jutaan pengungsi yang ada di Jalur Gaza, yang masih membutuhkan bantuan dan doa dari kita semua,” pungkasnya.

                                Pewarta: Wahyu Noerhadi

                                Sumber : nucare.id',
            'picture' => 'images/berita/4.jpeg',
            'tanggal' => '2024-04-25',
            'id_kategori' => '3'
        ]);

        Berita::factory()->create([
            'title_berita' => 'NU Care-LAZISNU Cilacap Bentuk JPZIS Tingkat Masjid dan Mushala',
            'description' => 'Cilacap, NU Care
                                NU Care-LAZISNU Cilacap Jawa Tengah mengadakan sosialisasi mengenai amil zakat dan manajemen pengelolaan zakat fitrah di masjid dan mushala pada Jumat (5/04/2024). Kegiatan bertempat di Gedung Majelis Wakil Cabang Nahdlatul Ulama (MWCNU) Karangpucung dan Kawunganten, Cilacap Jawa Tengah.

                                Peserta kegiatan tersebut berasal dari utusan masjid dan mushala di wilayah Kecamatan Karangpucung, Majenang dan Kawunganten.

                                Direktur NU Care-LAZISNU Cilacap, Ahmad Fauzi menjelaskan pada sesi pertama sosialisai diisi tentang materi fiqih zakat. Pemateri, Kiai Ahmad Fatoni, Dewan Syariah NU Care-LAZISNU Cilacap menjelaskan terkait buku panduan zakat yang diterbitkan NU Care-LAZISNU Cilacap khususnya tentang zakat fitrah.

                                “Takmir masjid dan mushala selaku pengelola dan petugas penyalur zakat fitrah nantinya, akan ditetapkan sebagai Jaringan Pengelola Zakat, Infak, dan Sedekah (JPZIS) di bawah naungan NU Care-LAZISNU Cilacap,” ujarnya.

                                Disampaikan, ke depan ketika para takmir masjid dan mushala mendapat Surat Keputusan (SK), maka mereka dinyatakan sah dan resmi sebagai amil zakat fitrah.

                                “Artinya, sudah memenuhi persayaratan yang ditetapkan undang-undang tentang pengelolaan zakat. Mengingat tugas dan tanggung jawab yang besar itulah bimtek pada hari ini diselenggerakan,” tegas Fauzi.

                                Para peserta sosialisasi tampak antusias dan aktif dalam mengikuti kegiatan ini, dibuktikan dengan banyaknya pertanyaan dari mereka. Sosialisasi ini ditutup menjelang Maghrib dengan pelaksanaan simulasi interaktif pentasyarufan zakat fitrah.

                                “Sehingga ini memudahkan pemahaman peserta,” tutur Fauzi 

                                Saat ini sudah lebih dari 800 buah masjid dan mushala yang sidah ber-SK oleh NU Care-LAZISNU Cilacap.

                                Kontributor: Ahmad Solkan
                                Editor: Kendi Setiawan

                                Sumber : nucare.id',
            'picture' => 'images/berita/5.jpeg',
            'tanggal' => '2024-04-19',
            'id_kategori' => '3'
        ]);

        Berita::factory()->create([
            'title_berita' => 'Mahabbah Ramadhan, NU Care-LAZISNU Cilacap Gelar Pelatihan Baca Al-Qur’an Bahasa Isyarat dan Braille',
            'description' => 'NU Care-LAZISNU Cilacap meluncurkan program Training of Trainer (TOT) bagi pengajar Al-Qur’an bahasa isyarat dan Braille beserta para penyandang disabilitas pada rangkaian program Mahabbah Ramadhan 1445 H atau 2024 M.

                                “Kami meluncurkan program TOT bagi para pengajar yang akan mengajari dan belajar bahasa isyarat membaca Al-Qur’an dan Al-Qur’an Braille dan para difabel,” ujar Ahmad Fauzi, Direktur NU Care LAZISNU Cilacap, Selasa (03/04/2024).

                                Fauzi mengatakan, kelompok difabel perlu mendapatkan kesempatan yang sama dalam menjalani kehidupannya sehari-hari, termasuk belajar membaca Al-Qur’an lewat bahasa isyarat dan Braille.

                                “Tujuannya agar difabel tuli dan tunanetra ini, bisa membaca Al-Qur’an dengan bahasa isyarat ataupun Braille,” ujar Fauzi. 

                                Adapun kegiatan tersebut diluncukan pada Selasa (19/03/2024) dan berlangsung hingga Rabu (20/03/2024). Terdapat 60 peserta berkebutuhan khusus dari tunanetra dan tunarungu sebagai peserta. Selain peserta disabilitas, pelatihan juga diikuti guru agama dan utusan dari setiap Kecamatan di Kabupaten Cilacap.

                                Fauzi mengatakan ke depan, selain melatih pengajar Al-Qu’ran bahasa isyarat dan Braille, NU Care-LAZISNU Cilacap  juga akan mengirimkan pengajar untuk belajar lebih dalam tentang Al-Qur’an bahasa isyarat dan Braille di Lajnah Pentashihan Mushaf Al Quran (LPMQ) Balitbang Diklat Kemenag.

                                “Mushaf isyarat dan Braille ini bertujuan memberikan afirmasi layanan keagamaan kepada teman-teman tuli dan tuna netra,” katanya.

                                Pelatihan ini juga mencakup pengetahuan dasar tentang disabilitas dan bagaimana membantu individu dengan disabilitas dalam pembelajaran Al-Qur’an dengan narasumber ahli dalam bidangnya. 

                                “Peserta pelatihan mempelajari strategi komunikasi yang efektif, metode pengajaran yang inklusif, serta memahami kebutuhan dan tantangan yang dihadapi oleh individu dengan berbagai jenis disabilitas,” ujar Fauzi.

                                Lebih lanjut, Fauzi mengungkapkan mushaf Al-Qur’an Bahasa Isyarat ini diproduksi oleh Lajnah Pentashihan Mushaf Al-Qur’an (LPMQ) Kemenag RI. Mushaf ini merupakan yang pertama kali di Indonesia, bahkan dunia. Sebelumnya, LPMQ Kemenag RI juga telah mengeluarkan mushaf Al-Qur’an Braille yang diperuntukkan bagi kelompok difabel tuna netra.

                                “Program ini merupakan hasil kerja sama antara NU Care-LAZISNU Cilacap bersama BAZNAS Kabupaten Cilacap dan Lajnah Pentashihan Mushaf Al-Qur’an (LPMQ) Kemenag RI,” paparnya.

                                Hadir sebagai narasumber dari Lajnah Pentashihan Mushaf Al-Qur’an (LPMQ) Kemenag RI, Kepala LPMQ H Abdul Aziz Sidqi, tim mushaf Al-Qur’an Isyarat Deni Hudaeny A Arifin, Tuti Nurkhayati, Muhammad Zamroni Ahbab, dan tim mushaf Al-Qur’an Braille Ahmad Jaeni, Samiah, Imam Mutaqien.

                                Kontributor: Ahmad Solkan
                                Editor: Kendi Setiawan

                                Sumber : nucare.id',
            'picture' => 'images/berita/6.jpg',
            'tanggal' => '2024-04-03',
            'id_kategori' => '5'
        ]);

        Berita::factory()->create([
            'title_berita' => 'NU Care-LAZISNU Cilacap Salurkan Paket Buka Puasa kepada Ratusan Santri',
            'description' => 'NU Care-LAZISNU Cilacap Jawa Tengah menyalurkan paket berbuka puasa untuk santri yatim dan dhuafa di Pondok Pesantren Tarbiyatul Aulad Cilacap Selatan, Jumat (15/03/2024). 

                                Direktur NU Care-LAZISNU Cilacap mengatakan bulan Ramadhan selalu menjadi momentum untuk berlomba-lomba dalam kebaikan.

                                “Salah satu bentuk kebaikan tersebut adalah dengan berbagi kepada santri,anak yatim dan duafa,” katanya.

                                Penyaluran paket berbuka puasa tersebut berupa buka puasa super Duk Duk Berbagi dari KFC Indonesia menyasar 200 penerima.

                                “Kami mengucapakan terima kasih kepada KFC Indonesia yang telah mempercayai LAZISNU Cilacap untuk menjadi partner dalam kegiatan ini,” imbuh Fauzi.

                                Sesuai dengan tema Ramadhan tahun ini yakni Mahabbah Ramadhan, lanjut Fauzi, NU Care-LAZISNU Cilacap juga mengadakan berbagai program ramadhan lainnya.

                                “Di antaranya Paket buka puasa untuk pejuang nafkah dan iftar bersama santri.” ujarnya.

                                Pengasuh Pondok Pesantren Tarbiyatul Aulad  KH Amrin Aulawi mengucapkan terima kasih atas bantuan dan program yang diberikan.

                                “Semoga LAZISNU Cilacap semakin dipercaya oleh masyarakat semakin besar dan semakin bertambah manfaat untuk masyarakat,” harapnya.

                                Kegiatan tersebut diawali dengan serah terima secara simbolis oleh Ketua LAZISNU Cilacap H Wasbah Samudera Fawaid dan diterima oleh KH Amrin Aulawi, dilanjutkan dengan Tausiyah singkat dan buka bersama.

                                Ketua LAZISNU Cilacap, H Wasbah Samudera Fawaid mengatakan NU Care-LAZISNU Cilacap diberikan amanah untuk menyalurkan paket buka puasa Super Dukduk Berbagi sebanyak 200 paket setiap Jumat.

                                “Paket tersebut untuk diberikan kepada santri, yatim, dhuafa, pejuang nafkah,” kata Wasbah.

                                Pewarta: Kendi Setiawan

                                Sumber : nucare.id',
            'picture' => 'images/berita/7.jpg',
            'tanggal' => '2024-03-21',
            'id_kategori' => '5'
        ]);

        User::factory(50)->create();
        // Donasi::factory(300)->create();
        // Like::factory(300)->create();
        Campaign::factory(50)->create();
        // Doa::factory(150)->create();
        pilar_program::factory(4)->create();

    }
}
