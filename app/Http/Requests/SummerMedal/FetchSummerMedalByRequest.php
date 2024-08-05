<?php

declare(strict_types=1);

namespace App\Http\Requests\SummerMedal;

use Illuminate\Foundation\Http\FormRequest;

class FetchSummerMedalByRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "column" =>
                "required|string|one_of:_id, Athlete, City, Country, Discipline, Event, Gender, Medal, Sport, Year",
            "value" => "required|string",
        ];
    }
}
