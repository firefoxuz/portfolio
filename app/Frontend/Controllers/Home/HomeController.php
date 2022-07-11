<?php

namespace App\Frontend\Controllers\Home;

use App\Frontend\Controllers\Controller;
use Domain\Education\Models\Education;
use Domain\Experience\Models\Experience;
use Domain\Portfolio\Models\Portfolio;
use Domain\SocialNetwork\Models\SocialNetwork;

class HomeController extends Controller
{
    public function index()
    {
        $socialNetworks = SocialNetwork::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::query()->orderBy('priority')->with('photos')->get();
        return view('frontend.home.index', [
            'socialNetworks' => $socialNetworks,
            'educations' => $educations,
            'experiences' => $experiences,
            'portfolios' => $portfolios
        ]);
    }
}
