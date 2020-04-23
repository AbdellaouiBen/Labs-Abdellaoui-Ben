<?php

namespace App\Http\Controllers;

use App\Article;
use App\Article_Tag;
use App\User;
use App\Categorie;
use App\Tag;
use App\Quote;
use App\Footer;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $articles = Article::all();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('article.create',compact('tags','categories'));
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
            'img' => 'required|image',
            'titre' => 'required|max:150',
            'text' => 'required|max:2000',
        ]);
        $article = new Article();
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $article->img = $newName ;
        $article->titre = $request->input('titre');
        $article->text = $request->input('text');
        $article->accepted = false;
        $article->categorie_id = $request->input('categorie_id');
        $article->user_id = Auth::id();
        $article->save();
        foreach ($request->tag as $tag_id) {
            Tag::find($tag_id)->articles()->attach($article->id);
            $article->tags()->attach($tag_id);
        }
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('article.show',compact('article','categories','tags','quote','footer','logo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Categorie::all();
        $tags = Tag::all();
        $articletag = Article_Tag::where('article_id',$article->id)->get();
        return view('article.edit',compact('article','tags','categories','articletag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'img' => 'sometimes|image',
            'titre' => 'required|max:150',
            'text' => 'required|max:2000',
        ]);
        if($request->hasFile('img')){
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($article->img);
            $article->img = $newName ;
        }
        $article->titre = $request->input('titre');
        $article->text = $request->input('text');
        if (Auth::id()==2) {
            if($request->input('accepted')){
                $article->accepted = true;
            }else{ 
                $article->accepted = false;
            } 
        }
        $article->categorie_id = $request->input('categorie_id');
        $article->user_id = Auth::id();
        $article->save();
        // if ($request->has('tag')) {
        //     $article->tags()->detach();
        //     foreach ($request->tag as $tag_id) {
        //         Tag::find($tag_id)->articles()->attach($article->id);
        //         $article->tags()->attach($tag_id);
        //     }
        //     dd('hellooooo');
        // }
        if($request->has('tag')){
            $article->tags()->detach();
            foreach ($request->tag as $tag) {
               Tag::find($tag)->articles()->attach($article->id);
               $article->tags()->attach($tag);
            }
        }
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {            
        Storage::disk('public')->delete($article->img);
        $article->tags()->detach();
        $article->delete();
        return redirect()->route('article.index');
    }
}
