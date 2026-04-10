<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GithubController extends Controller
{
        public function redirect(){

            return Socialite::driver('github')->redirect();

        }

        public function callback(){

            try {
                $githubUser = Socialite::driver('github')->user();
            } catch (\Exception $e) {
                return redirect('/auth/github');
            }

            $user = User::updateOrCreate(
                ['email' => $githubUser->getEmail()],
                [
                    'github_username' => $githubUser->getNickname(),
                    'github_token' => $githubUser->token,
                    'github_avatar' => $githubUser->getAvatar(),
                    'password' => bcrypt(str()->random(32)),
                ]
            );

            Auth::login($user);
            return redirect('/');
        }
}
