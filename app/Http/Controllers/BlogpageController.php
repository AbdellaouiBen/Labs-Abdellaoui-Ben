<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Footer;
use App\Quote;

class BlogpageController extends Controller
{
    public function index(){
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer','quote'));
    }
    
}
