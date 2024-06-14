<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurnStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'score_throw_one'   => 'required|integer',
            'score_throw_two'   => 'required|integer',
            'score_throw_three' => 'required|integer',
            'game_id'           => 'required|integer',
            'player_id'         => 'required|integer',
        ];
    }
}
