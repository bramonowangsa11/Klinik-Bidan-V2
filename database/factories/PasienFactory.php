<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    protected $model = Pasien::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {     
        return [
            'nik' => $this->faker->unique()->numerify('##############'), // 16 digit unique number
            'name' => $this->faker->name,
            'alamat' => $this->faker->address,
            'ttl' => $this->faker->date(),
            'no_telp' => $this->faker->phoneNumber,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'user_id' => null,
        ];
    }
}
