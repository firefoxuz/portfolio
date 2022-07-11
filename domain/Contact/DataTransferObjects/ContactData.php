<?php

namespace Domain\Contact\DataTransferObjects;

use App\Frontend\Requests\ContactRequest;
use Spatie\DataTransferObject\DataTransferObject;

class ContactData extends DataTransferObject
{
    public string $full_name;

    public string $email;

    public string $message;

    public static function fromRequest(ContactRequest $request): self
    {
        return new self([
            'full_name' => $request->get('full_name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);
    }
}
