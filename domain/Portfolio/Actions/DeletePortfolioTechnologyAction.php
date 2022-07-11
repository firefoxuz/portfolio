<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\Models\PortfolioTechnology;

class DeletePortfolioTechnologyAction
{
    public function execute($id)
    {
        return PortfolioTechnology::query()->find($id)->delete();
    }
}
