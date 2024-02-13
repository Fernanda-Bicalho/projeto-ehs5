<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipamento>
 */
class EquipamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagens = [
            'Multímetro' => 'assets/images/multimetro.jpg',
            'Balança de Precisão' => 'assets/images/balanca_precisao.jpg',
            'Termômetro Digital' => 'assets/images/termometro_digital_infravermelho.jpg',
            'Micropipeta' => 'assets/images/micropipeta.jpg',
            'Espectrofotômetro' => 'assets/images/Espectrofotometro.jpg',
        ];

        $nome = $this->faker->unique()->randomElement(array_keys($imagens));

        return [
            'nome' => $nome,
            'modelo' => $this->faker->word,
            'serie' => $this->faker->unique()->randomNumber,
            'tipo' => $this->faker->word,
            'fabricante' => $this->faker->company,
            'mincapac' => '10',
            'maxcapac' => '100',
            'escala' => $this->faker->word,
            'localizacao' => $this->faker->word,
            'situacao' => $this->faker->randomElement(['Ativo', 'Inativo']),
            'imagem' => $imagens[$nome], // Atribui o caminho da imagem com base no nome do equipamento
        ];
    }
}
