<?php

use App\Http\Controllers\UserController;
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


Route::get('/signup', [UserController::class, 'create']);
Route::post('/signup', [UserController::class, 'store']);

Route::view('/login', 'login', ['title' => 'Login']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);
