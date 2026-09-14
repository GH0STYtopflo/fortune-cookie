<?php

namespace App\Http\Controllers;

use App\Models\Fortune;
use App\Models\User;
use Auth;

class UserFortuneController extends Controller
{
    public function index()
    {
        return view('cookies', ['cookies' => Auth::user()->fortunes]);
    }

    public function addFortune()
    {
        $user = Auth::user();

        $fortune = $this->getRandUniqueFortune($user);

        $user->fortunes()->attach($fortune);
    }

    private function getRandUniqueFortune(User $user): Fortune
    {
        return Fortune::whereNotIn('id', $user->fortunes()->pluck('id'))->inRandomOrder()->first();
    }
}
