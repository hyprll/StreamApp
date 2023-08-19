<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //  ini tambhaan
use Illuminate\Support\Facades\Hash; //  ini untuk pw terenskripsi

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'adminStream@gmail.com',
            'password' => Hash::make('adminstream'),
            'phone_number' => '08829223332',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
