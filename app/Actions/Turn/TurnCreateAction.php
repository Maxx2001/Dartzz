<?php

namespace App\Actions\Turn;

use App\Models\Game;
use App\Models\Turn;
use App\Models\Player;

class TurnCreateAction
{
    public static function handle(
        Game   $game,
        Player $player,
        int    $scoreThrowOne,
        int    $scoreThrowTwo,
        int    $scoreThrowThree
    ): void
    {
        Turn::create([
            'game_id'          => $game->getKey(),
            'player_id'        => $player->getKey(),
            'remaining_points' => config('gameRules.winning_points_amount'),
            'throw_one'        => $scoreThrowOne,
            'throw_two'        => $scoreThrowTwo,
            'throw_three'      => $scoreThrowThree,

        ]);

    }
}
