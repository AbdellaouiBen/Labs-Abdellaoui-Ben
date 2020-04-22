<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();
        return view('contact.index',compact('contact'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:105',
            'text' => 'required',
            'sous_titre' => 'required|max:105',
            'adress_un' => 'required|max:105',
            'adress_deux' => 'required|max:105',
            'tel' => 'required|max:55',
            'email' => 'required|email|max:105',
        ]);
        
        $contact->titre = $request->input('titre');
        $contact->text = $request->input('text');
        $contact->sous_titre = $request->input('sous_titre');
        $contact->adress_un = $request->input('adress_un');
        $contact->adress_deux = $request->input('adress_deux');
        $contact->tel = $request->input('tel');
        $contact->email = $request->input('email');
        $contact->save();
        return redirect()->route('contact.index');
    }

}
