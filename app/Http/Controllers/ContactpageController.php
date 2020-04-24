<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logo;
use App\Contact;
use App\Footer;
use App\User;

class ContactpageController extends Controller
{
    public function index(){
        $footer = Footer::first();
        $contact = Contact::first();
        $logo = Logo::first();
        return view('pages.contactpage',compact('logo','contact','footer'));
    }
}
