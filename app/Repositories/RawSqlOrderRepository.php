<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RawSqlOrderRepository implements OrderRepositoryInterface
{
    public function search(string $keyword): array
    {
        $orders = DB::select("
            SELECT DISTINCT orders.*
            FROM orders
            JOIN users ON users.id = orders.user_id
            JOIN order_product ON order_product.order_id = orders.id
            JOIN products ON products.id = order_product.product_id
            WHERE MATCH(users.name) AGAINST(? IN BOOLEAN MODE)
            OR MATCH(products.name) AGAINST(? IN BOOLEAN MODE)
        ", [
            '+' . $keyword . '*',
            '+' . $keyword . '*',
        ]);

        return $this->hydrate($orders);
    }

    // Raw mysql does not eager-load relationships, i want them to be
    private function hydrate(array $orders): array
    {
        $orderIds = collect($orders)->pluck('id');

        return Order::with(['user', 'products'])
            ->whereIn('id', $orderIds)
            ->get()
            ->toArray();
    }
}
