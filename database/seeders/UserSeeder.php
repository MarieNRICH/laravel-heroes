<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // création de l'admin
        User::create([
            'name' => 'administrateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'admin@niceplaces.fr',
            'email_verified_at' => now(),
            // 'departement_id' => '80',
            'remember_token' => Str::random(10),
            'role_id' => 2
        ]);

        // création d'un utilisateur de test
        User::create([
            'name' => 'utilisateur',
            'password' => Hash::make('Azerty88@'),
            'email' => 'utilisateur@niceplaces.fr',
            'email_verified_at' => now(),
            // 'departement_id' => '86',
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);

        User::factory(8)->create();
    }
}
