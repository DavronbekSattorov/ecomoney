<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JoelButcher\Socialstream\Http\Controllers\OAuthController;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function handleGithubCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            if ($user->name == null){
                $user->name = $user->nickname;
                if ($user->nickname == null)
                {
                    $user->nickname = $user->email;
                }
            }

            $findUser = User::where('github_id', $user->id)->first();

            if($findUser){
                Auth::login($findUser);

            }else{
                if (Jetstream::newUserModel()->where('email', $user->getEmail())->exists()) {
                    return redirect()->route('login')->withErrors(
                        __('User with that email already exists. Please log in with your provider account')
                    );
                }
                $userObject = New CreateNewUser();
                $userName = $userObject->generateUserName($user->name);

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'username'=>$userName

                ]);
                $newUser->markEmailAsVerified();
                $newUser->setProfilePhotoFromUrl($user->avatar);
                Auth::login($newUser);

            }
            return redirect()->intended('/');
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
