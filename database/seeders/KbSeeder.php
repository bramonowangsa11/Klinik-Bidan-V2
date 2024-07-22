<?php

namespace Database\Seeders;

use App\Models\Kb;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kb::factory()->count(10)->create();
    }
}
