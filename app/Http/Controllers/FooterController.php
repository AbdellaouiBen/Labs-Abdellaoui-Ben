<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view('footer.index',compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('footer.edit',compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        
        $validatedData = $request->validate([
            'text' => 'required|max:105',
            'text_link' => 'required|max:55',
            'link' => 'required|url|max:105',
        ]);
        $footer->text = $request->input('text');
        $footer->text_link = $request->input('text_link');
        $footer->link = $request->input('link');
        $footer->save();
        return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
