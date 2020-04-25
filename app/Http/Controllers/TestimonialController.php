<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\User;  
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::all();
        return view('testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        return view('testimonial.create');
    }
    public function show()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
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
            'img'=>'required|image',
            'full_name'=>'required|max:250',
            'role'=>'required',
            'company'=>'required|max:250',
            'text'=>'required|max:500',
        ]);
        $testimonial = new Testimonial();
        $img = $request->file('img');
        $newName = Storage::disk('public')->put('',$img);
        $testimonial->img = $newName ;
        $testimonial->full_name = $request->input('full_name');
        $testimonial->role = $request->input('role');
        $testimonial->company = $request->input('company');
        $testimonial->text = $request->input('text');
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize('adminWebmaser', User::class);
        return view('testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'img'=>'sometimes|image',
            'full_name'=>'required|max:250',
            'role'=>'required',
            'company'=>'required|max:250',
            'text'=>'required|max:500',
        ]);
        if($request->hasFile('img')){
            $img = $request->file('img');
            $newName = Storage::disk('public')->put('',$img);
            Storage::disk('public')->delete($testimonial->img);
            $testimonial->img = $newName ;
        }
        $testimonial->full_name = $request->input('full_name');
        $testimonial->role = $request->input('role');
        $testimonial->company = $request->input('company');
        $testimonial->text = $request->input('text');
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {          
        $this->authorize('adminWebmaser', User::class);  
        Storage::disk('public')->delete($testimonial->img);
        $testimonial->delete() ;
        return redirect()->route('testimonial.index');

    }
}
