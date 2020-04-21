<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Logo;
use App\Banniere;
use App\Independant;
use App\Testimonial;
use App\Contact;
use App\Footer;

class IndexpageController extends Controller
{
    public function index(){
        $footer = Footer::first();
        $contact = Contact::first();
        $testimonials = Testimonial::latest('id')->take(6)->get();
        $independant = Independant::first();
        $bannieres = Banniere::all();
        $logo = Logo::first();
        $servicesRapides = Service::latest('id')->take(3)->get();
        $services = Service::inRandomOrder()->take(9)->get();
        return view('pages.indexpage',compact('independant','servicesRapides','services','logo','bannieres','testimonials','contact','footer'));
    }
}
