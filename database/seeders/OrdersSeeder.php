<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Define available status options
                $statusOptions = ['pending', 'processing', 'shipped', 'delivered'];

                // Generate 10 orders with random data
                for ($i = 1; $i <= 10; $i++) {
                    DB::table('orders')->insert([
                        'customer_id' => rand(1, 4),
                        'total_amount' => rand(50, 500),
                        'status' => $statusOptions[rand(0, 3)],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
    }
}
