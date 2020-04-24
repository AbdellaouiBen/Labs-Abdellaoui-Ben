<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Footer;
use App\Quote;
use App\Article;
use App\Tag;
use App\Categorie;
use App\Commentaire;

class BlogpageController extends Controller
{
    public function index(){

        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $articles = Article::where('accepted', true )->latest('id')->paginate(3);
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer','quote','articles','tags','categories'));
    }

} 
 