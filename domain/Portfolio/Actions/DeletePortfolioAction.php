<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\Models\Portfolio;

class DeletePortfolioAction
{
    public function execute($id)
    {
        return Portfolio::query()->find($id)->delete();
    }
}
