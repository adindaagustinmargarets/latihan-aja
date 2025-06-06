<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Akun Demo',
            'email' => 'demo@demo.com',
            'password' => Hash::make('demo'),
            'level' => 'Admin',
            'api_key' => bin2hex(random_bytes(32))
        ]);
    }
}
