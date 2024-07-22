<?php

namespace Database\Seeders;

use App\Models\Imunisasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imunisasi::factory()->count(50)->create();
    }
}
