<?php

namespace Domain\Education\Actions;

use Domain\Education\DataTransferObjects\EducationData;
use Domain\Education\Models\Education;

class UpdateEducationAction
{
    public function execute($id, EducationData $data)
    {
        return Education::query()->find($id)->update($data->toArray());
    }
}
