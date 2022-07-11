<?php

namespace App\Frontend\Controllers\Contact;

use App\Frontend\Actions\StoreContactAction;
use App\Frontend\Requests\ContactRequest;
use Domain\Contact\DataTransferObjects\ContactData;

class StoreContactController
{
    public function __invoke(ContactRequest $request, StoreContactAction $action)
    {
        $contactData = ContactData::fromRequest($request);
        $action->execute($contactData);
        return redirect()->back();
    }
}
