<?php

namespace App\Admin\Controllers\Auth;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\Auth\LoginRequest;
use Domain\Auth\Actions\LoginUserAction;
use Domain\Auth\DataTransferObjects\LoginData;

class LoginController extends Controller
{
    public function showPage()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request, LoginUserAction $loginUserAction)
    {
        $loginData = LoginData::fromRequest($request);

        if ($loginUserAction->execute($loginData)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->withErrors([
                'error' => 'Login failed',
            ]);
        }

    }
}
