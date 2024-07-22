<?php

namespace Database\Factories;

use DateTime;
use App\Models\Pasien;
use App\Models\Imunisasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imunisasi>
 */
class ImunisasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
        protected $model = Imunisasi::class;
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_ortu = Pasien::inRandomOrder()->first()->id;
        $id_anak = Pasien::inRandomOrder()->first()->id;
        $now = new DateTime();
        $startOfMonth = new DateTime($now->format('Y-m-01'));
        $endOfMonth = (clone $startOfMonth)->modify('last day of this month');
        
        // Generate random date in this month
        $randomTimestamp = mt_rand($startOfMonth->getTimestamp(), $endOfMonth->getTimestamp());
        $randomDateThisMonth = date('Y-m-d', $randomTimestamp);
        return [
            'tanggal' => $randomDateThisMonth,
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
