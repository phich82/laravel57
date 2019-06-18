<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SocialService;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callback($social)
    {
        $user = SocialService::createOrGetUser(Socialite::driver($social)->user(), $social);
        auth()->login($user);

        return redirect()->to('/home');
    }
}
