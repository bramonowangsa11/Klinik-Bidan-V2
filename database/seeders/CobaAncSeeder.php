<?php

namespace Database\Seeders;

use App\Models\CobaAnc;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CobaAncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CobaAnc::factory()->count(10)->create();
    }
}
