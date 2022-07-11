<?php

namespace Domain\Portfolio\Actions;

use Domain\Portfolio\DataTransferObjects\PortfolioPhotoData;
use Domain\Portfolio\Models\PortfolioPhoto;

class StorePortfolioPhotoAction
{
    public function execute(PortfolioPhotoData $data)
    {
        return PortfolioPhoto::query()->create([
            'portfolio_id' => $data->portfolio_id,
            'path' => $this->uploadImage($data->photo)
        ]);
    }

    private function uploadImage($image)
    {
        $imageName = uniqid() .'.'. $image->extension();
        $image->move(public_path('images'), $imageName);
        return "/images/{$imageName}";
    }
}
