<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\Models\PortfolioPhoto;

class DeletePortfolioPhotoAction
{
    public function execute($id)
    {
        return PortfolioPhoto::query()->find($id)->delete();
    }
}
