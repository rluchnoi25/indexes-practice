<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'johnsmith@gmail.com',
                'password' => Hash::make('qwerty123!'),
            ],
            [
                'id' => 2,
                'name' => 'Rebecca Robertson',
                'email' => 'rebeccarobertson@gmail.com',
                'password' => Hash::make('qwerty123!'),
            ],
            [
                'id' => 3,
                'name' => 'Brian Williams',
                'email' => 'brianwilliams@gmail.com',
                'password' => Hash::make('qwerty123!'),
            ],
            [
                'id' => 4,
                'name' => 'Cristian Brown',
                'email' => 'cristianbrown@gmail.com',
                'password' => Hash::make('qwerty123!'),
            ],
        ];

        User::query()->upsert($data, ['id']);
    }
}
