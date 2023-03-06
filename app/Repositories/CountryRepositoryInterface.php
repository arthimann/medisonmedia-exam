<?php

namespace App\Repositories;

interface CountryRepositoryInterface
{
    public function all(): object;

    public function create(array $data): bool;
}
