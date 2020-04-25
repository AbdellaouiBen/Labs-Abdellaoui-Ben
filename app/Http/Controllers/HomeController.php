<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Form;
use App\Commentaire;
use App\Newsletter;
use App\Article;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        







        $users = User::all();
        $usersss = User::latest('id')->take(8)->get();
        $forms = Form::all();
        $commentaires = Commentaire::all();
        $newsletters = Newsletter::all();
        $articles = Article::latest('id')->paginate(5);
        return view('home',compact('users','forms','commentaires','newsletters','usersss','articles'));
    }
}
