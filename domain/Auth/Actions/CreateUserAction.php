<?php

namespace Domain\Auth\Actions;


use Carbon\Carbon;
use Domain\Auth\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function execute($email, $password)
    {
        try {
            return User::query()->create([
                'name' => 'Administrator',
                'email' => $email,
                'password' => Hash::make($password),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        catch (\Exception $e) {
            return false;
        }
    }
}
