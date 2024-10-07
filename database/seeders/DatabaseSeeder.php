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
        User::factory(50)->create();
        kategori::factory(6)->create();
        // Donasi::factory(300)->create();
        // Like::factory(300)->create();
        Campaign::factory(50)->create();
        // Doa::factory(150)->create();
        Berita::factory(50)->create();
        Mitra::factory(20)->create();
        gambar_landing::factory(3)->create();
        visi::factory(5)->create();
        misi::factory(5)->create();

        User::factory()->create([
            'username' => '123',
            'password' => '123',
            'role' => 'admin',
        ]);
    }
}
