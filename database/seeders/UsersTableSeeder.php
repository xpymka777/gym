<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Генерация 8 записей пользователей
        for ($i = 0; $i < 8; $i++) {
            DB::table('users')->insert([
                'FirstName' => Str::random(10),
                'LastName' => Str::random(10),
                'Email' => Str::random(10) . '@example.com',
                'Password' => Hash::make('password'),
                'Birthdate' => now(),
                'Role' => 'user',
            ]);
        }
        // Генерация 8 записей админов
        for ($i = 0; $i < 8; $i++) {
            DB::table('users')->insert([
                'FirstName' => Str::random(10),
                'LastName' => Str::random(10),
                'Email' => Str::random(10) . '@example.com',
                'Password' => Hash::make('password'),
                'Birthdate' => now(),
                'Role' => 'admin',
            ]);
        }
    }
}
