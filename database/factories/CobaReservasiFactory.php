<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CobaReservasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CobaReservasi>
 */
class CobaReservasiFactory extends Factory
{
    protected $model = CobaReservasi::class; // Sesuaikan dengan model yang benar

    public function definition()
    {
        $user_id = User::inRandomOrder()->first()->id;
        $tgl_reservasi = $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d');
        
        $sesi = $this->getUniqueSesi($tgl_reservasi);

        return [
            'tgl_reservasi' => $tgl_reservasi,
            'sesi' => $sesi,
            'layanan' => $this->faker->randomElement(['Bumil', 'KB', 'Imunisasi']),
            'keterangan' => $this->faker->sentence,
            'user_id' => $user_id,
        ];
    }

    private function getUniqueSesi($tgl_reservasi)
    {
        // Ambil semua sesi yang tersedia dari ENUM kolom 'sesi'
        $availableSessions = ['06:00','06:30','07:00','07:30','08:00','08:30','16:00','16:30',
            '17:00','17:30','18:00','18:30','19:00','19:30'];

        // Ambil sesi yang sudah digunakan pada tanggal tertentu
        $existingSessions = CobaReservasi::whereDate('tgl_reservasi', $tgl_reservasi)->pluck('sesi')->toArray();

        // Cari sesi yang masih tersedia
        $availableSessions = array_diff($availableSessions, $existingSessions);

        // Jika tidak ada sesi yang tersedia, lempar exception
        if (empty($availableSessions)) {
            throw new \Exception("No available sessions for the date: $tgl_reservasi");
        } else {
            // Ambil sesi acak yang tersedia
            return $this->faker->randomElement($availableSessions);
        }
    }
}
