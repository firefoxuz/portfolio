<?php

namespace Domain\Experience\Actions;

use Domain\Experience\Models\Experience;

class DeleteExperienceAction
{
    public function execute($id)
    {
        return Experience::query()->find($id)->delete();
    }
}
