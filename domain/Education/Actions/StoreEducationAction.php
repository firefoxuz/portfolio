<?php

namespace Domain\Education\Actions;

use Domain\Education\DataTransferObjects\EducationData;
use Domain\Education\Models\Education;

class StoreEducationAction
{
    public function execute(EducationData $data)
    {
        return Education::query()->create($data->toArray());
    }
}
