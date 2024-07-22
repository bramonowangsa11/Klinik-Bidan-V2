<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasien User',
                'email' => 'pasien@gmail.com',
                'role' => 'pasien',
                'email_verified_at' => now(),
                'password' => Hash::make('pasien'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Memasukkan data ke dalam tabel menggunakan DB::table('users')->insert()
        DB::table('users')->insert($users);
    }
}
