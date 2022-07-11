<?php

namespace Domain\SocialNetwork\Actions;

use Domain\SocialNetwork\Models\SocialNetwork;

class DeleteSocialNetworkAction
{
    public function execute($id)
    {
        return SocialNetwork::query()->find($id)->delete();
    }
}
