<?php

namespace App\Admin\Controllers\Portfolio;

use App\Admin\Requests\Portfolio\PortfolioPhotoRequest;
use Domain\Portfolio\Actions\DeletePortfolioPhotoAction;
use Domain\Portfolio\Actions\StorePortfolioPhotoAction;
use Domain\Portfolio\DataTransferObjects\PortfolioPhotoData;
use Domain\Portfolio\Models\PortfolioPhoto;

class PortfolioPhotoController
{
    public function store(PortfolioPhotoRequest $request, StorePortfolioPhotoAction $action)
    {
        $portfolioPhotoData = PortfolioPhotoData::fromRequest($request);
        $action->execute($portfolioPhotoData);
        return redirect()->back();
    }

    public function destroy(PortfolioPhoto $portfolioPhoto, DeletePortfolioPhotoAction $action)
    {
        $action->execute($portfolioPhoto->id);
        return redirect()->back();
    }
}
