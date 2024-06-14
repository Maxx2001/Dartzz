<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Turn;
use Inertia\Response;
use App\Models\Player;
use Inertia\ResponseFactory;
use App\Http\Resources\GameResource;
use Illuminate\Http\RedirectResponse;
use App\Actions\Turn\TurnCreateAction;
use App\Http\Requests\TurnStoreRequest;

class TurnController extends Controller
{
    public function create(string $gameUuid): Response|ResponseFactory
    {
        $currentGame = Game::getCurrent($gameUuid)->first();

        return inertia('Turn/TurnCreatePage', [
            'game' => GameResource::make($currentGame),
        ]);
    }

    public function store(TurnStoreRequest $request): RedirectResponse
    {
        $game   = Game::find($request->game_id)->first();
        $player = Player::find($request->player_id)->first();

        TurnCreateAction::handle(
            $game,
            $player,
            $request->score_round_one,
            $request->score_round_two,
            $request->score_round_three
        );

        return redirect()->route('turn.create', ['game' => $game->uuid]);
    }

}
