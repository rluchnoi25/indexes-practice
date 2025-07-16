<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class EloquentOrderRepository implements OrderRepositoryInterface
{
    public function search(string $keyword): array
    {
        return Order::query()
            ->whereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->orWhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->with(['user', 'products'])
            ->get()
            ->toArray();
    }
}
