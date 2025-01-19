<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
{
    // Tambahkan data baru
    DB::table('users')->insert([
        [
            'name' => 'T. Amylia Safitri',
            'username' => 'amylia21',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Zayyan Hakim',
            'username' => 'zayyan11',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
