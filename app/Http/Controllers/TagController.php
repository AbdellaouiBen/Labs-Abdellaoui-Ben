<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Logo;
use App\Footer;
use App\Quote;
use App\Article;
use App\Tag;
use App\Article_Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
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
            'tag' => 'required|max:100|unique:tags',
        ]);
        $tag = new Tag();
        $tag->tag = $request->input('tag');
        $tag->save();
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        // dd($tag->articles);
        $articles = $tag->articles()->paginate(3);
        // $articles = Article::where('id', $articless->article_id )->latest('id')->paginate(3);
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer','quote','articles','tags','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'tag' => 'required|max:100|unique:tags,tag,'.$tag->id,
        ]);
        $tag->tag = $request->input('tag');
        $tag->save();
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
