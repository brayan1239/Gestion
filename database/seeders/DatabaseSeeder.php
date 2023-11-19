<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $this->call(AlumnoSeeder::class);
        
        $this->call(CursosTableSeeder::class);

        \App\Models\User::create([
            'name' => 'Brayan',
            'email' => 'brayan@gmail.com',
            'password' => '1234',
            'escuela_academica' => 'Escuela A',
            'ciclo' => 'Primer Ciclo',
        ]);

        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
