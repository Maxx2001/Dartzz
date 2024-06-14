<?php

use App\Models\Game;
use App\Models\Player;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Game::class);
            $table->foreignIdFor(Player::class);
            $table->integer('throw_one')->nullable();
            $table->integer('throw_two')->nullable();
            $table->integer('throw_three')->nullable();
            $table->integer('remaining_points');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('turns');
    }
};
