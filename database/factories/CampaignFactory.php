<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'goal' => fake()->numberBetween(7000000, 10000000),
            'raised' => fake()->numberBetween(1000000, 10000000),
            'start_date' => fake()->dateTimeBetween('-3 month', 'now'),
            'end_date' => fake()->dateTimeBetween('+3 month', '+6 month'),
            'min_donation' => fake()->numberBetween(5000, 10000),
            'lokasi' => fake()->city(),
            'main_picture' => 'campaign_1.png',
            'second_picture' => 'campaign_1.png',
            'last_picture' => 'campaign_1.png',

        ];
    }
}
