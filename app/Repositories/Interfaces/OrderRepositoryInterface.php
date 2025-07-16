<?php

namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface
{
    public function search(string $keyword): array;
}
