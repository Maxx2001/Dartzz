<?php

namespace App\Actions\Game;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\RedirectResponse;

class GameCreateAction
{
    public static function handle(string $playerOne, string $playerTwo, string $gameUuid): void
    {
        $playerOne = Player::create([
            'name' => $playerOne,
        ]);

        $playerTwo = Player::create([
            'name' => $playerTwo,
        ]);

        $game = Game::create([
            'uuid'          => $gameUuid,
            'player_one_id' => $playerOne->getKey(),
            'player_two_id' => $playerTwo->getKey(),
        ]);

        Cache::put('game', $game->uuid, 60 * 60 * 24);
    }
}
