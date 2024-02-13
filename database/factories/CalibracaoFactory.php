<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calibracao>
 */
class CalibracaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'laboratorio' => $this->faker->company,
            'certificado' => $this->faker->uuid,
            'norma' => $this->faker->randomElement(['ISO 9001', 'ISO 17025', 'ISO 14001']),
            'dtcalibracao' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'prazocalibracao' => $this->faker->numberBetween(6, 12),
            'proxcalibracao' => $this->faker->dateTimeBetween('now', '+6 months'),
            'arquivo' => $this->faker->randomElement([
                'assets/files/certificado_01.jpg',
                'assets/files/certificado_02.jpg',
                'assets/files/certificado_03.jpg',
                'assets/files/certificado_04.jpg',
                'assets/files/certificado_05.jpg'
            ]),
        ];
    }
}
