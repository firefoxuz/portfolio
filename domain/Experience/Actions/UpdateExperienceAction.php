<?php

namespace Domain\Experience\Actions;

use Domain\Experience\DataTransferObjects\ExperienceData;
use Domain\Experience\Models\Experience;

class UpdateExperienceAction
{
    public function execute($id, ExperienceData $data)
    {
        return Experience::query()->find($id)->update($data->toArray());
    }
}
