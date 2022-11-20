<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use JoelButcher\Socialstream\SetsProfilePhotoFromUrl;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        $userObject = New CreateNewUser();
        $userName = $userObject->generateUserName($input['name']);

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'username'=>$userName,
        ]);
//        $user->setProfilePhotoFromUrl('https://avatars.dicebear.com/api/adventurer-neutral/'.$input['email'].'.svg');
        return $user;
    }
    public function generateUserName($name){
        $username = Str::lower(Str::slug($name));
        if(User::where('username', '=', $username)->exists()){
            $uniqueUserName = $username.'-'.Str::lower(Str::random(4));
            $username = $this->generateUserName($uniqueUserName);
        }
        return $username;
    }
}
