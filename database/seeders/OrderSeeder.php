<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'user_id' => 3,
            ],
            [
                'id' => 4,
                'user_id' => 4,
            ],
        ];

        Order::query()->upsert($data, ['id']);
    }
}
