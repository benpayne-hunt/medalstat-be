<?php

declare(strict_types=1);

namespace App\Http\Controllers\SummerMedal;

use App\Services\SummerMedal\FetchSummerMedalService;
use Illuminate\Http\JsonResponse;

class FetchSummerMedalsController
{
    private FetchSummerMedalService $fetchSummerMedalService;

    public function __construct(FetchSummerMedalService $fetchSummerMedalService)
    {
        $this->fetchSummerMedalService = $fetchSummerMedalService;
    }

    public function fetchAllSummerMedals(): JsonResponse
    {
        $summerMedals = $this->fetchSummerMedalService->fetchSummerMedals();
        return response()->json($summerMedals);
    }
}
