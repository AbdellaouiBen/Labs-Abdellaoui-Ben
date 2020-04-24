<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Logo;
use App\Footer;
use App\Quote;
use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categorie' => 'required|max:100|unique:categories',
        ]);
        $categorie = new Categorie();
        $categorie->categorie = $request->input('categorie');
        $categorie->save();
        return redirect()->route('categorie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $articles = Article::where('categorie_id', $categorie->id )->latest('id')->paginate(3);
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer','quote','articles','tags','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $validatedData = $request->validate([
            'categorie' => 'required|max:100|unique:categories,categorie,'.$categorie->id,
        ]);
        $categorie->categorie = $request->input('categorie');
        $categorie->save();
        return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
