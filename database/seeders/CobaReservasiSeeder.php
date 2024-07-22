<?php

namespace Database\Seeders;

use App\Models\CobaReservasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CobaReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CobaReservasi::factory(5)->create();
    }
}
