<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    public function index()
    {
        $phoneNumbers = PhoneNumber::get();

        return view('phone_numbers.index', [
            'phoneNumbers' => $phoneNumbers
        ]);
    }
}
