<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
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
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make('admin123'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "name" => "Khalil Annbiya",
                "email" => "khalilannbiya@gmail.com",
                "password" => Hash::make('testing'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ];

        User::insert($users);
    }
}
