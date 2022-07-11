<?php

namespace Domain\Education\DataTransferObjects;

use App\Admin\Requests\Education\EducationRequest;
use Spatie\DataTransferObject\DataTransferObject;

class EducationData extends DataTransferObject
{
    public string $name;

    public string $sub_name;

    public string $description;

    public string $from;

    public string $to;

    public static function fromRequest(EducationRequest $request): self
    {
        return new self([
            'name' => $request->get('name'),
            'sub_name' => $request->get('sub_name'),
            'description' => $request->get('description'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
        ]);
    }
}
