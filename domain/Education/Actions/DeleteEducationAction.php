<?php

namespace Domain\Education\Actions;

use Domain\Education\Models\Education;

class DeleteEducationAction
{
    public function execute($id)
    {
        return Education::query()->find($id)->delete();
    }
}
