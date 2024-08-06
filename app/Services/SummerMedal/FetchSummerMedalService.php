<?php

declare(strict_types=1);

namespace App\Services\SummerMedal;

use App\Repositories\SummerMedalRepository;

class FetchSummerMedalService
{
    private $summerMedalRepository;

    public function __construct(SummerMedalRepository $summerMedalRepository)
    {
        $this->summerMedalRepository = $summerMedalRepository;
    }

    public function fetchSummerMedals(): array
    {
        return $this->summerMedalRepository->fetchSummerMedals();
    }

    public function fetchSummerMedalsBy(string $column, string $value): array
    {
        return $this->summerMedalRepository->fetchSummerMedalsBy($column, $value);
    }
}
