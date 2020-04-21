<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::first();
        return view('logo.index',compact('logo'));
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit(Logo $logo)
    {
        return view('logo.edit',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logo  $logo
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, Logo $logo)
    {
        if($request->hasFile('logo')){
            $img = $request->file('logo');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($logo->logo);
            $logo->logo = $newName ;
            $logo->save();
        }
        return redirect()->route('logo.index');
    }

}
