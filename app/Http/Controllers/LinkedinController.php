<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;

class LinkedinController extends Controller
{
    public function handleLinkedinCallback()
    {
        try {
            $user = Socialite::driver('linkedin')->user();
            if ($user->name == null){
                $user->name = $user->nickname;
                if ($user->nickname == null)
                {
                    $user->nickname = $user->email;
                }
            }

            $findUser = User::where('linkedin_id', $user->id)->first();

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
                    'linkedin_id'=> $user->id,
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
