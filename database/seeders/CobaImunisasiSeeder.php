<?php

namespace Database\Seeders;

use App\Models\CobaImunisasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CobaImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CobaImunisasi::factory()->count(50)->create();
    }
}
