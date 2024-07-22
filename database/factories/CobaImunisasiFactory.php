<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CobaImunisasi>
 */
class CobaImunisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     protected $model = CobaImunisasi::class;
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_ortu = Pasien::inRandomOrder()->first()->id;
        $id_anak = Pasien::inRandomOrder()->first()->id;
        return [
            'tanggal' => $this->faker->date(),
            'berat_badan' => $this->faker->randomFloat(2, 2, 30),
            'panjang_badan' => $this->faker->randomFloat(2, 30, 80),
            'HBO' => $this->faker->boolean,
            'BCG' => $this->faker->boolean,
            'kipi' => $this->faker->word,
            'vaksin' =>$this->faker->word,
            'PENTA' => $this->faker->randomElement(['0', '1', '2', '3']),
            'IPV' => $this->faker->randomElement(['0', '1', '2', '3']),
            'PCV' => $this->faker->randomElement(['0', '1', '2', '3']),
            'ROTA_VIRUS' => $this->faker->randomElement(['0', '1', '2', '3']),
            'MK' => $this->faker->boolean,
            'booster' => $this->faker->randomElement(['PENTA', 'MK','0']),
            'id_ortu' => $id_ortu,
            'id_anak' => $id_anak,
        ];
    }
}
