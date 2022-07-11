<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\DataTransferObjects\PortfolioTechnologyData;
use Domain\Portfolio\Models\PortfolioTechnology;

class StorePortfolioTechnologyAction
{
    public function execute(PortfolioTechnologyData $data)
    {
        return PortfolioTechnology::query()->create($data->toArray());
    }
}
