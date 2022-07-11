<?php

namespace App\Frontend\Controllers\Portfolio;

use App\Frontend\Controllers\Controller;
use Domain\Portfolio\Models\Portfolio;

class PortfolioContentController extends Controller
{
    public function __invoke(Portfolio $portfolio)
    {
        info($portfolio);
        return  view('frontend.portfolio.content',[
            'portfolio' => $portfolio
        ]);
    }
}
