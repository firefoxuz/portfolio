<?php

namespace App\Admin\Controllers\Portfolio;

use App\Admin\Controllers\Controller;
use App\Admin\Requests\Portfolio\PortfolioTechnologyRequest;
use Domain\Portfolio\Actions\DeletePortfolioTechnologyAction;
use Domain\Portfolio\Actions\StorePortfolioTechnologyAction;
use Domain\Portfolio\DataTransferObjects\PortfolioTechnologyData;
use Domain\Portfolio\Models\PortfolioTechnology;

class PortfolioTechnologyController extends Controller
{
    public function store(PortfolioTechnologyRequest $request, StorePortfolioTechnologyAction $action)
    {
        $portfolioTechnologyData = PortfolioTechnologyData::fromRequest($request);
        $action->execute($portfolioTechnologyData);
        return redirect()->back();
    }

    public function destroy(PortfolioTechnology $portfolioTechnology, DeletePortfolioTechnologyAction $action)
    {
        $action->execute($portfolioTechnology->id);
        return redirect()->back();
    }
}
