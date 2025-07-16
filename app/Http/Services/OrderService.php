<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    ) {
    }

    public function search(string $keyword): array
    {
        return $this->orderRepository->search($keyword);
    }
}