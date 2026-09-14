<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use \Illuminate\Foundation\Auth;

class User extends Auth\User
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password'];

    protected $guarded = [];

    public function fortunes(): BelongsToMany
    {
        return $this->belongsToMany(Fortune::class, 'user_fortunes')->withTimestamps();
    }
}
