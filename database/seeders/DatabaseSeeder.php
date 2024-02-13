<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Calibracao;
use App\Models\Equipamento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Cria 5 equipamentos fixos
        Equipamento::factory()->count(5)->create();

        // Para cada equipamento, cria 3 calibrações fixas
        Equipamento::all()->each(function ($equipamento) {
            Calibracao::factory()->count(3)->create([
                'equipamento_id' => $equipamento->id,
            ]);
        });



    }
}
