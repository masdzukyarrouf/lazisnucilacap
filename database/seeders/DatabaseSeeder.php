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


        User::factory(50)->create();
        kategori::factory(6)->create();
        // Donasi::factory(300)->create();
        // Like::factory(300)->create();
        Campaign::factory(50)->create();
        // Doa::factory(150)->create();
        Berita::factory(50)->create();
        gambar_landing::factory(3)->create();
        visi::factory(5)->create();
        misi::factory(5)->create();
        pilar_program::factory(4)->create();

    }
}
