<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_berita' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'tanggal' => fake()->dateTimeBetween('-3 month', 'now'),
            'picture' => '2lNcAJLKMgQSJpdbEPL72LN3EwvAlEDqkFGjglKb.png',
        ];
    }
}
