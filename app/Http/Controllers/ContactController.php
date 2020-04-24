<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $this->authorize('adminWebmaser', User::class);
        return view('contact.edit',compact('contact'));
    }
   

    public function update(Request $request, Contact $contact)
    {
        $this->authorize('adminWebmaser', User::class);
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
