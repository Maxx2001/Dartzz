<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Game
 *
 * @property int         $id
 * @property int         $player_one_id
 * @property int         $player_two_id
 * @property int         $current_turn
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function playerOne(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_one_id');
    }

    public function playerTwo(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_two_id');
    }

    public function scopeGetCurrent($uuid): Builder
    {
        $currentGame = Cache::get('game', $uuid);

        return $this->where('uuid', $currentGame);
    }

    public function getCurrentTurn(): BelongsTo
    {
        return $this->belongsTo(Turn::class, 'current_turn');
    }
}
