<?php

use App\Http\Controllers\SummerMedal\FetchSummerMedalController;
use App\Http\Controllers\SummerMedal\FetchSummerMedalsController;
use Illuminate\Support\Facades\Route;

Route::prefix("/summer")->group(function () {
    Route::get("/all", [FetchSummerMedalsController::class, "fetchAllSummerMedals"]);
    Route::get("/filter", FetchSummerMedalController::class);
});
