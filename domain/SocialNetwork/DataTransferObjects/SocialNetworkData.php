<?php

namespace Domain\SocialNetwork\DataTransferObjects;

use App\Admin\Requests\SocialNetwork\SocialNetworkRequest;
use Spatie\DataTransferObject\DataTransferObject;

class SocialNetworkData extends DataTransferObject
{
    public string $name;

    public string $link;

    public string $icon;

    public static function fromRequest(SocialNetworkRequest $request): self
    {
        return new self([
            'name' => $request->get('name'),
            'link' => $request->get('link'),
            'icon' => $request->get('icon'),
        ]);
    }
}
