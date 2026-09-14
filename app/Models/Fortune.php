<?php

namespace App\Models;

use Database\Factories\FortuneFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fortune extends Model
{
    /** @use HasFactory<FortuneFactory> */
    use HasFactory;

    public function users(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'user_fortunes')->withTimestamps();
    }
}
