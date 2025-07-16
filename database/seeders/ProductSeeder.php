<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Egg',
            ],
            [
                'id' => 2,
                'name' => 'Water 1 liter',
            ],
            [
                'id' => 3,
                'name' => 'Bread 100 gram',
            ],
            [
                'id' => 4,
                'name' => 'Salt 100 gram',
            ],
        ];

        Product::query()->upsert($data, ['id']);
    }
}
