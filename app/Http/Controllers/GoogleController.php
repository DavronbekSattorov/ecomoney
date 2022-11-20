<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
//            dd($user);


            $findUser = User::where('google_id', $user->id)->first();

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
                    'google_id'=> $user->id,
                    'username'=>$userName

                ]);
                $newUser->markEmailAsVerified();
                $newUser->setProfilePhotoFromUrl($user->avatar);




                Auth::login($newUser);

            }
            return redirect()->intended('/');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
