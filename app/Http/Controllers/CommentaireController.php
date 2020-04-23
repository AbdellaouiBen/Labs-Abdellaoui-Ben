<?php

namespace App\Http\Controllers;

use App\Commentaire;
use App\Article;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //    
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
        $commentaire->delete();
        return redirect()->back()->with('destroy-commentaire', 'Votre message a été supprimé!');
    }
}
