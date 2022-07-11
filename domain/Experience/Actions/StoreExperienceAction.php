<?php

namespace Domain\Experience\Actions;

use Domain\Experience\DataTransferObjects\ExperienceData;
use Domain\Experience\Models\Experience;

class StoreExperienceAction
{
    public function execute(ExperienceData $data)
    {
        return Experience::query()->create($data->toArray());
    }
}
