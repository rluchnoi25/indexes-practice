<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderSearchRequest;
use App\Http\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
    ) {
    }

    public function search(OrderSearchRequest $request)
    {
        $validated = $request->validated();
        $keyword = $validated['search'];
        $orders = $this->orderService->search($keyword);

        return response()->json($orders);
    }
}
