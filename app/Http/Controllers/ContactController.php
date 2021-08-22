<?php

namespace App\Http\Controllers;

use App\Events\ContactAddedEvent;
use App\Models\Contact;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();

        return view('contacts.index', [
            'contacts' => $contacts
        ]);
    }
}
