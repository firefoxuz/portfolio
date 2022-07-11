<?php

namespace App\Frontend\Actions;

use Domain\Contact\DataTransferObjects\ContactData;
use Domain\Contact\Models\Contact;

class StoreContactAction
{
    public function execute(ContactData $data)
    {
        return Contact::create($data->toArray());
    }
}
