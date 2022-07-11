<?php

namespace Domain\Portfolio\DataTransferObjects;

use App\Admin\Requests\Portfolio\PortfolioTechnologyRequest;
use Spatie\DataTransferObject\DataTransferObject;

class PortfolioTechnologyData extends DataTransferObject
{
    public int $portfolio_id;

    public string $name;

    public static function fromRequest(PortfolioTechnologyRequest $request): self
    {
        return new self([
            'portfolio_id' => intval($request->get('portfolio_id')),
            'name' => $request->get('name'),
        ]);
    }
}
