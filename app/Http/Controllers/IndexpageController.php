<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexpageController extends Controller
{
    public function index(){
        return view('pages.indexpage');
    }
}
