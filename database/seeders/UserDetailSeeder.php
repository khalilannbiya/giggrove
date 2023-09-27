<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userDetails = [
            [
                "user_id" => "1",
                "photo" => null,
                "role" => "UI Designer",
                "contact_number" => null,
                "biography" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "user_id" => "2",
                "photo" => null,
                "role" => "Software Engineer",
                "contact_number" => null,
                "biography" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ];

        UserDetail::insert($userDetails);
    }
}
