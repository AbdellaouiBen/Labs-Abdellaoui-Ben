<?php

namespace App\Http\Controllers;

use App\Independant;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class IndependantController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdminOrWebmaster');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminWebmaser', User::class);
        $independant = Independant::first();
        return view('independant.index',compact('independant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Independant  $independant
     * @return \Illuminate\Http\Response
     */
    public function edit(Independant $independant)
    {
        $this->authorize('adminWebmaser', User::class);
        return view('independant.edit',compact('independant'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Independant  $independant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Independant $independant)
    {       
        $this->authorize('adminWebmaser', User::class); 
        $validatedData = $request->validate([
            'banniere_text' => 'required|max:255',
            'presentation_titre' => 'required|max:255',
            'presentation_text_un' => 'required|max:500',
            'presentation_text_deux' => 'required|max:500',
            'video_img' => 'sometimes|image',
            'presentation_text_deux' => 'required|max:500',
            'video_url' => 'required|max:255|url',
            'testimonials_titre' => 'required|max:255',
            'services_titre' => 'required|max:255',
            'team_titre' => 'required|max:255',
            'promotion_titre' => 'required|max:255',
            'promotion_text' => 'required|max:500',
            'feature_titre' => 'required|max:255',
        ]);

        $independant->banniere_text = $request->input('banniere_text');
        $independant->presentation_titre = $request->input('presentation_titre');
        $independant->presentation_text_un = $request->input('presentation_text_un');
        $independant->presentation_text_deux = $request->input('presentation_text_deux');
        if($request->input('presentation_btn')){
            $independant->presentation_btn = true;
        }else{ 
            $independant->presentation_btn = false;
        }
        if($request->hasFile('video_img')){
            $img = $request->file('video_img');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($independant->video_img);
            $independant->video_img = $newName ;
        }
        $independant->video_url = $request->input('video_url');
        $independant->testimonials_titre = $request->input('testimonials_titre');
        $independant->services_titre = $request->input('services_titre');
        $independant->team_titre = $request->input('team_titre');
        $independant->promotion_titre = $request->input('promotion_titre');
        $independant->promotion_text = $request->input('promotion_text');
        $independant->feature_titre = $request->input('feature_titre');
        $independant->save();
        return redirect()->route('independant.index');
    }

    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
    public function store()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
    public function destroy()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
}
