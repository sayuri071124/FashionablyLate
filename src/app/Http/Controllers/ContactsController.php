<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactsRequest $request)
    {
         $contacts = $request->only(['name', 'gender', 'email', 'tel', 'address_line1', 'address_line2', 'content']);
           return view('confirm', 'contacts'('contacts'));
    }


    public function store(ContactsRequest $request)
    {
         $contacts = $request->only(['name', 'gender', 'email', 'tel', 'address_line1', 'address_line2', 'content']);
         Contacts::create($contacts);
            return view('thanks');
    }


}
