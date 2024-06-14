<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnController;


Route::redirect('/', '/game/create');

Route::resource('game', GameController::class)->only(['create', 'store']);
Route::get('turn/{game}', [TurnController::class, 'create'])->name('turn.create');

Route::resource('turn', TurnController::class)->only(['store']);
require __DIR__.'/auth.php';
