<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use App\Actions\Game\GameCreateAction;
use App\Actions\Turn\TurnCreateAction;
use App\Http\Requests\GameStoreRequest;

class GameController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('SignIn/SignInPage');
    }

    public function store(GameStoreRequest $request): RedirectResponse
    {
        $gameUuid = (string)Str::uuid();

        GameCreateAction::handle(
            $request->player_one,
            $request->player_two,
            $gameUuid
        );

        return redirect()->route('turn.create', ['game' => $gameUuid]);
    }
}
