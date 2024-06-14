<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Turn
 *
 * @property int         $id
 * @property int         $game_id
 * @property int         $player_id
 * @property int         $throw_one
 * @property int|null    $throw_two
 * @property int|null    $throw_three
 * @property int         $remaining_points
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Turn extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
