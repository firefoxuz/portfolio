<?php

namespace Domain\Auth\Actions;

use Domain\Auth\DataTransferObjects\LoginData;
use Illuminate\Support\Facades\Auth;

class LoginUserAction
{
    public function execute(LoginData $loginData): bool
    {
        return Auth::attempt($loginData->toArray());
    }
}
