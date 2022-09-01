<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => $this->passwordRules()
        ])->validate();

        return User::create([
            'mobile' => $input['mobile'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
