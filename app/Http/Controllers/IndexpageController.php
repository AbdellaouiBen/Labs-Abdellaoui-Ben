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
use App\User;

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

        $CEO = User::where('role_id','=', 1)->first();
        $randomUsers = User::inRandomOrder()->where('role_id','!=', 3)->where('role_id','!=', 1)->get();

        return view('pages.indexpage',compact('independant','servicesRapides','services','logo','bannieres','testimonials','contact','footer','CEO','randomUsers'));
    }
}
