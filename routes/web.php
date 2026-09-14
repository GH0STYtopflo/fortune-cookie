<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFortuneController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// index page
Route::get('/', function () {
    return view('home',
        [
            'title' => 'Fortune Cookie 🍪',
        ]
    );
});


Route::view('/signup', 'signup', ['title' => 'Signup']);
Route::post('/signup', [UserController::class, 'store']);

Route::view('/login', 'login', ['title' => 'Login']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/get_cookie', [UserFortuneController::class, 'addFortune']);
Route::get('/user_cookies', [UserFortuneController::class, 'index']);
