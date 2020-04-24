<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdminOrWebmaster')->only('index',);
    //     $this->middleware('isAdminOrWebmasterOrMe')->only('edit','update','destroy');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminWebmaser', User::class);
        $commentaires = Commentaire::all();
        return view('commentaire.index',compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->back();   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Article $article)
    {
        $commentaire = new Commentaire();
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->article_id = $article->id;
        $commentaire->user_id = Auth::id();
        $commentaire->save();
        return redirect()->back()->with('create-commentaire', 'Votre message a été enregistré');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        $this->authorize('adminWebWritter',$commentaire, Commentaire::class);
        return view('commentaire.edit',compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $this->authorize('adminWebWritter',$commentaire, Commentaire::class);
        $commentaire->commentaire = $request->input('commentaire');
        $commentaire->save();
        return redirect()->back()->with('edit-commentaire', 'Votre message a été modifié!');
    } 


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $this->authorize('adminWebWritter',$commentaire, Commentaire::class);
        $commentaire->delete();
        return redirect()->back()->with('destroy-commentaire', 'Votre message a été supprimé!');
    }
}
