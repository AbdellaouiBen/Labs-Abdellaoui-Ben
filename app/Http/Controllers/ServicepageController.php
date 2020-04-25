<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Logo;
use App\Contact;
use App\Footer;
use App\Independant;
use App\Article;
use App\User;

class ServicepageController extends Controller
{
    public function index(){
        $articles = Article::where('accepted', true )->latest('id')->take(3)->get();
        $independant = Independant::first();
        $features = Service::latest('id')->take(6)->get();
        $footer = Footer::first();
        $contact = Contact::first();
        $logo = Logo::first();
        $services = Service::latest('id')->paginate(9);
        return view('pages.servicepage',compact('services','logo','contact','footer','features','independant','articles'));
    }
}
