<?php

namespace Database\Factories;

use App\Models\Heroe;
use App\Models\Skill;
use App\Models\Universe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heroe>
 */
class HeroeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name() . fake()->firstName(),
            'gender' => fake()->name(),
            'race' => fake()->name(),
            'description' => $this->faker->paragraph(),
            'image' => 'default_picture_' .rand(1,5) . '.jpg',
            'user_id' => rand(1, User::count()),
            'skill_id' => rand(1, Skill::count()),
            'universe_id' => rand(1, Universe::count()),
        ];
    }
}
