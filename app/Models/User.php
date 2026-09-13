<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Foundation\Auth;

class User extends Auth\User
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password'];

    protected $guarded = [];
}
