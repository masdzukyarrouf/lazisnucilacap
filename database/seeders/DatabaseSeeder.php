<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\User;
use App\Models\Doa;
use App\Models\Like;
use App\Models\Berita;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();
        Donasi::factory(150)->create();
        Like::factory(300)->create();
        Campaign::factory(50)->create();
        Doa::factory(150)->create();
        Berita::factory(50)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
