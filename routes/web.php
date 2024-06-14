<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/game/create');

Route::resource('game', GameController::class)->only(['create', 'store']);
require __DIR__.'/auth.php';
