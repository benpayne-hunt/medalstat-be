<?php

declare(strict_types=1);

namespace App\Http\Controllers\SummerMedal;

use App\Services\FetchSummerMedalService;
use Illuminate\Http\JsonResponse;

class FetchSummerMedalsController
{
    private FetchSummerMedalService $fetchSummerMedalService;

    public function __construct(FetchSummerMedalService $fetchSummerMedalService)
    {
        $this->fetchSummerMedalService = $fetchSummerMedalService;
    }

    public function __invoke(): JsonResponse
    {
        return response()->json($this->fetchSummerMedalService->fetchSummerMedals());
    }
}
