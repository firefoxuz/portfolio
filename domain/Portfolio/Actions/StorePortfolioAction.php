<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\DataTransferObjects\PortfolioData;
use Domain\Portfolio\Models\Portfolio;

class StorePortfolioAction
{
    public function execute(PortfolioData $data)
    {
        return Portfolio::query()->create($data->toArray());
    }
}
