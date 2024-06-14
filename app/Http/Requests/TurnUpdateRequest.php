<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurnUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'score'     => 'required|integer',
            'player_id' => 'required|integer',
        ];
    }
}
