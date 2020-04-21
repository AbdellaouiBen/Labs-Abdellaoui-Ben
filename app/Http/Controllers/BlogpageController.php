<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
class BlogpageController extends Controller
{
    public function index(){
        
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo'));
    }
}
