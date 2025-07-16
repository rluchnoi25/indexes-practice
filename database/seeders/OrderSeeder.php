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
                'user_name' => 'John Smith',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'user_name' => 'Rebecca Robertson',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'user_name' => 'Brian Williams',
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'user_name' => 'Cristian Brown',
            ],
        ];

        Order::query()->upsert($data, ['id']);
    }
}
