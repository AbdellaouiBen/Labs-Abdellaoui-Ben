<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use App\Contact;

class ContactpageController extends Controller
{
    public function index(){
        $contact = Contact::first();
        $logo = Logo::first();
        return view('pages.contactpage',compact('logo','contact'));
    }
}
