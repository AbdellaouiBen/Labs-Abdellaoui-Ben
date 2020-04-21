<?php

namespace App\Http\Controllers;

use App\Independant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndependantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $independant->team_titre = $request->input('team_titre');
        $independant->promotion_titre = $request->input('promotion_titre');
        $independant->promotion_text = $request->input('promotion_text');
        $independant->save();
        return redirect()->route('independant.index');
    }


}
