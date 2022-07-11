<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\DataTransferObjects\PortfolioData;
use Domain\Portfolio\Models\Portfolio;

class UpdatePortfolioAction
{
    public function execute($id, PortfolioData $data)
    {
        return Portfolio::query()->find($id)->update($data->toArray());
    }
}
