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
use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdminOrWebmaster')->only('');
    // }
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
        $this->authorize('adminWebRedacteur', Article::class);
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
        $this->authorize('adminWebRedacteur', Article::class);
        
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
        foreach($request->input('tag') as $tag){
            $article->tags()->attach($tag);
            $article->save();
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
        $commentaires = Commentaire::where('article_id',$article->id)->latest('id')->paginate(2);
        $commentairecount = Commentaire::where('article_id',$article->id)->get();
        $categories = Categorie::all();
        $tags = Tag::all();
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('article.show',compact('article','categories','tags','quote','footer','logo','commentaires','commentairecount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {        
        $this->authorize('adminWebRedacteurOf',$article ,Article::class);
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
        $this->authorize('adminWebRedacteurOf',$article, User::class);
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
        if (Auth::id()==3 || Auth::id()==1) {
            if($request->input('accepted')){
                $article->accepted = true;
            }else{ 
                $article->accepted = false;
            } 
        }
        $article->categorie_id = $request->input('categorie_id');
        $article->user_id = Auth::id();
        if($request->has('tag')){ 

            $articleTags = Article_Tag::all()->where('article_id','=',$article->id);
            foreach($articleTags as $tag){
                $tag->delete();
            }
            foreach($request->input('tag') as $tag){
                $article->tags()->attach($tag);
                $article->save();
            }
        }
        $article->save();
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
        $this->authorize('adminWebRedacteurOf',$article ,Article::class);
        Storage::disk('public')->delete($article->img);
        $articleTags = Article_Tag::all()->where('article_id','=',$article->id);
        foreach($articleTags as $tag){
            $tag->delete();
        }
        $article->delete();
        return redirect()->route('article.index');
    }
    public function search(Request $request)
    {            
        $search = $request->input('search');
        $articles = Article::where('titre','LIKE','%'.$search.'%' )->latest('id')->paginate(3);
        $categories = Categorie::inRandomOrder()->take(6)->get();
        $tags = Tag::inRandomOrder()->take(9)->get();
        $quote = Quote::first();
        $footer = Footer::first();
        $logo = Logo::first();
        return view('pages.blogpage',compact('logo','footer','quote','articles','tags','categories'));
    }
}
