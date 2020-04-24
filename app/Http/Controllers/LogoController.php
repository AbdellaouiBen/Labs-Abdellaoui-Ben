<?php

namespace App\Http\Controllers;

use App\Logo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LogoController extends Controller
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
        $this->authorize('adminWebmaser', User::class);
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
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'logo' => 'sometimes|image',
        ]);
        if($request->hasFile('logo')){
            $img = $request->file('logo');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($logo->logo);
            $logo->logo = $newName ;
            $logo->save();
        }
        return redirect()->route('logo.index');
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
