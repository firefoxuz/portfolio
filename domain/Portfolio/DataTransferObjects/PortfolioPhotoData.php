<?php

namespace Domain\Portfolio\DataTransferObjects;

use App\Admin\Requests\Portfolio\PortfolioPhotoRequest;
use Illuminate\Http\UploadedFile;
use Spatie\DataTransferObject\DataTransferObject;

class PortfolioPhotoData extends DataTransferObject
{
    public int $portfolio_id;

    public UploadedFile $photo;

    public static function fromRequest(PortfolioPhotoRequest $request): self
    {
        return new self([
            'portfolio_id' => intval($request->get('portfolio_id')),
            'photo' => $request->photo,
        ]);
    }
}
