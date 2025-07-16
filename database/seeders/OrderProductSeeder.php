<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderProductData = [
            [
                'order_id' => 1,
                'product_id' => 1,
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
            ],

            [
                'order_id' => 2,
                'product_id' => 3,
            ],
            [
                'order_id' => 2,
                'product_id' => 4,
            ],

            [
                'order_id' => 3,
                'product_id' => 1,
            ],
            [
                'order_id' => 3,
                'product_id' => 2,
            ],
            [
                'order_id' => 3,
                'product_id' => 4,
            ],

            [
                'order_id' => 4,
                'product_id' => 2,
            ],
        ];

        DB::table('order_product')->upsert($orderProductData, ['order_id', 'product_id']);
    }
}
