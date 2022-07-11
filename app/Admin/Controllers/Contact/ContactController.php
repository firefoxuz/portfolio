<?php

namespace App\Admin\Controllers\Contact;

use App\Admin\Controllers\Controller;
use Domain\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(25);
        return view('admin.contact.index',[
            'contacts' => $contacts,
        ]);
    }
}
