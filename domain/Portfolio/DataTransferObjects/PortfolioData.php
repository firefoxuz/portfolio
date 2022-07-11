<?php

namespace Domain\Portfolio\DataTransferObjects;

use App\Admin\Requests\Portfolio\PortfolioRequest;
use Spatie\DataTransferObject\DataTransferObject;

class PortfolioData extends DataTransferObject
{
    public int $type;

    public string $project_name;

    public string $description;

    public ?string $site = null;

    public ?string $date = null;

    public int $priority = 100;

    public static function fromRequest(PortfolioRequest $request): self
    {
        return new self([
            'type' => intval($request->get('type')),
            'project_name' => $request->get('project_name'),
            'description' => $request->get('description'),
            'site' => $request->get('site'),
            'date' => $request->get('date'),
            'priority' => intval($request->get('priority')),
        ]);
    }
}
