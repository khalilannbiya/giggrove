<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderStatuses = [
            [
                "status" => "Approved",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "status" => "Progress",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "status" => "Rejected",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "status" => "Waiting",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        OrderStatus::insert($orderStatuses);
    }
}
