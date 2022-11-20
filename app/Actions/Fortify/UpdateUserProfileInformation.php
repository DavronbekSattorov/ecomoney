<?php

namespace App\Actions\Fortify;

use App\Http\Controllers\PostController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50',Rule::unique('users')->ignore($user->id)],
            'about' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {

            $extension = $input['photo']->getClientOriginalExtension();
            $img = Image::make($input['photo'])
                ->resize(300,300 , function($constraint) {
                    $constraint->aspectRatio();
                });
//            dd($img->dirname.'/'.$img->basename);
            $img->save($img->dirname.'/'.$img->basename);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize( $img->dirname.'/'.$img->basename);
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'username' => $input['username'],
                'about' => $input['about'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
