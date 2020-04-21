<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Footer;

class BlogpageController extends Controller
{
    public function index(){
        
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer'));
    }
}
