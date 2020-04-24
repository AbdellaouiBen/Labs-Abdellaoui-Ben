<?php

namespace App\Http\Controllers;

use App\Quote;
use App\User;
use Illuminate\Http\Request;

class QuoteController extends Controller
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
        $quote = Quote::first();
        return view('quote.index',compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        $this->authorize('adminWebmaser', User::class);
        return view('quote.edit',compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'quote' => 'required|max:500',
        ]);
        $quote->quote = $request->input('quote');
        $quote->save();
        return redirect()->route('quote.index');
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
    public function show()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }

}
