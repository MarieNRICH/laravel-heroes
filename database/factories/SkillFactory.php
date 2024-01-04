<?php

namespace Database\Factories;
use App\Models\User;

use App\Models\Heroe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
            // 'heroe_id' => rand(1, Heroe::count()),
        ];
    }
}
