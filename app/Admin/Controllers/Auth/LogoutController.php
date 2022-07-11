<?php

namespace App\Admin\Controllers\Auth;

use App\Admin\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
