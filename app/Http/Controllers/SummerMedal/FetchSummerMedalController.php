<?php

declare(strict_types=1);

namespace App\Http\Controllers\SummerMedal;

use App\Services\FetchSummerMedalService;
use App\Http\Requests\SummerMedal\FetchSummerMedalByRequest;
use Illuminate\Http\JsonResponse;

class FetchSummerMedalController
{
    private FetchSummerMedalService $fetchSummerMedalService;

    public function __construct(FetchSummerMedalService $fetchSummerMedalService)
    {
        $this->fetchSummerMedalService = $fetchSummerMedalService;
    }

    public function __invoke(FetchSummerMedalByRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $column = $validatedData["column"];
        $value = $validatedData["value"];

        return response()->json($this->fetchSummerMedalService->fetchSummerMedals($column, $value));
    }
}
