<?php

namespace App\Admin\Controllers\Home;

use App\Admin\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('admin.home.index');
    }
}
