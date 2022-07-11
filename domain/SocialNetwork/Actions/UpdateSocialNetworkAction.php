<?php

namespace Domain\SocialNetwork\Actions;

use Domain\SocialNetwork\DataTransferObjects\SocialNetworkData;
use Domain\SocialNetwork\Models\SocialNetwork;

class UpdateSocialNetworkAction
{
    public function execute($id, SocialNetworkData $data)
    {
        return SocialNetwork::query()->find($id)->update($data->toArray());
    }
}
