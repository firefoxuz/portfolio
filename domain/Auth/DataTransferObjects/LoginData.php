<?php

namespace Domain\Auth\DataTransferObjects;

use App\Admin\Requests\Auth\LoginRequest;
use Spatie\DataTransferObject\DataTransferObject;

class LoginData extends DataTransferObject
{
    public string $email;

    public string $password;

    public static function fromRequest(LoginRequest $request): self
    {
        return new self([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
    }
}
