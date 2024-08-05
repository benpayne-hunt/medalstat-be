<?php

use App\Http\Controllers\SummerMedal\FetchSummerMedalsController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return "OK";
});

Route::group("/summer", function () {
    Route::get("/all", FetchSummerMedalsController::class);
    Route::get("/filter", FetchSummerMedalsController::class);
});
