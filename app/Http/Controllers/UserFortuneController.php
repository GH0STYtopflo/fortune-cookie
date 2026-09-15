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

        return redirect('/my_cookies');
    }

    private function getRandUniqueFortune(User $user): Fortune
    {
        return Fortune::whereNotIn('id', $user->fortunes()->pluck('id'))->inRandomOrder()->first();
    }

    public function destroy(Fortune $fortune)
    {
        $user = Auth::user();

        $user->fortunes()->detachOrFail($fortune);

        return redirect('/my_cookies');
    }
}
