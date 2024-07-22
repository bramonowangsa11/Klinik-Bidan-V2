<?php

namespace Database\Seeders;

use App\Models\anc;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        anc::factory()->count(10)->create();
    }
}
