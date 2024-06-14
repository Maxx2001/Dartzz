<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'uuid'         => $this->uuid,
            'player_one'   => $this->playerOne,
            'player_two'   => $this->playerTwo,
            'current_turn' => $this->current_turn,
        ];
    }
}
