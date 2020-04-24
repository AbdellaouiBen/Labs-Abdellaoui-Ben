<?php

namespace App\Http\Controllers;

use App\Banniere;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BanniereController extends Controller
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
        $bannieres = Banniere::all();
        return view('banniere.index',compact('bannieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        return view('banniere.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'img' => 'required|image',
        ]);

        $banniere = new Banniere();
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $banniere->img = $newName ;
        $banniere->save();
        return redirect()->route('banniere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function show(Banniere $banniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function edit(Banniere $banniere)
    {
        $this->authorize('adminWebmaser', User::class);
        return view('banniere.edit',compact('banniere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banniere $banniere)
    {
        
        $this->authorize('adminWebmaser', User::class);
        
        $validatedData = $request->validate([
            'img' => 'required|image',
        ]);
        
        if($request->hasFile('img')){
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($banniere->img);
            $banniere->img = $newName ;
        }
        $banniere->save();

        return redirect()->route('banniere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banniere $banniere)
    {
        $this->authorize('adminWebmaser', User::class);
        Storage::disk('public')->delete($banniere->img);
        $banniere->delete();
        return view('banniere.index');
    }
}
