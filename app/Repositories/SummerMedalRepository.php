<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Base\Repository;
use App\Models\SummerMedal;

class SummerMedalRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(SummerMedal::class);
    }

    public function fetchSummerMedals(): SummerMedal
    {
        /** @var SummerMedal */
        return $this->createQueryBuilder()->all();
    }

    public function fetchSummerMedalsBy(string $column, string $value): array
    {
        return $this->createQueryBuilder()->where($column, $value)->get()->toArray();
    }
}
