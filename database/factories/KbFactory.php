<?php

namespace Database\Factories;

use DateTime;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kb>
 */
class KbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $id_suami = Pasien::inRandomOrder()->first()->id;
        $id_ibu = Pasien::inRandomOrder()->first()->id;

        $now = new DateTime();
        $startOfMonth = new DateTime($now->format('Y-m-01'));
        $endOfMonth = (clone $startOfMonth)->modify('last day of this month');
        
        // Generate random date in this month
        $randomTimestamp = mt_rand($startOfMonth->getTimestamp(), $endOfMonth->getTimestamp());
        $randomDateThisMonth = date('Y-m-d', $randomTimestamp);
        return [
            'tgl_kb' => $randomDateThisMonth,
            'jmlh_anak' => $this->faker->numberBetween(0, 10),
            'umur_anak_terkecil' => $this->faker->numberBetween(0, 18),
            'jaminan' => $this->faker->word,
            'alki' => $this->faker->word,
            'pasca_plasenta' => $this->faker->word,
            'pasca_salin' => $this->faker->word,
            'do' => $this->faker->word,
            'gc_dari' => $this->faker->word,
            'metode_kb' => $this->faker->randomElement(['IUD', 'STK', 'PIL', 'CO']),
            'berat_badan' => $this->faker->numberBetween(40, 100),
            'tinggi_badan' => $this->faker->numberBetween(140, 200),
            'tensi' => $this->faker->randomNumber(3),
            'lila' => $this->faker->numberBetween(20, 40),
            'tgl_kembali' => $this->faker->date(),
            'kegagalan' => $this->faker->word,
            'inform_consent' => $this->faker->word,
            'keterangan' => $this->faker->sentence,
            'id_suami' => $id_suami,
            'id_ibu' => $id_ibu,
        ];
    }
}
