<?php

namespace Domain\SocialNetwork\Actions;

use Domain\SocialNetwork\DataTransferObjects\SocialNetworkData;
use Domain\SocialNetwork\Models\SocialNetwork;

class StoreSocialNetworkAction
{
    public function execute(SocialNetworkData $data)
    {
        return SocialNetwork::query()->create($data->toArray());
    }
}
