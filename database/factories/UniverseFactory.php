<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Heroe;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universe>
 */
class UniverseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'content' => $this->faker->paragraph(),
            // 'heroe_id' => rand(1, Heroe::count()),
        ];
    }
}
