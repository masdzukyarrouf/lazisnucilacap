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
            'image' => 'images/kategori/Bencana Alam.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Pendidikan',
            'image' => 'images/kategori/Pendidikan.png'
        ]);

        kategori::factory()->create([
            'nama_kategori' => 'Sosial & Keagamaan',
            'image' => 'images/kategori/Sosial & Keagamaan.png'
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

        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);
        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);

        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);

        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);

        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);

        // Berita::factory()->create([
        //     'title' => '',
        //     'description' => '',
        //     'picture' => 'images/berita/',
        //     'tanggal' => '',
        //     'id_kategori' => ''
        // ]);

        User::factory(50)->create();
        // Donasi::factory(300)->create();
        // Like::factory(300)->create();
        Campaign::factory(50)->create();
        // Doa::factory(150)->create();
        pilar_program::factory(4)->create();

    }
}
