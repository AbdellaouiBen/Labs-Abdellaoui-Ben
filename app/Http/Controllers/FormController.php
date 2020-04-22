<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

use App\MAIL\FormMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('form.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $form = new Form();
        $form->name = $request->input('name'); 
        $form->email = $request->input('email');
        $form->subject = $request->input('subject');
        $form->msg = $request->input('msg');
        $form->save();
        Mail::to($form->email)->send(new FormMail($form));
        return redirect('/index#form')->with('success', 'Thanks for contacting us!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('form.index');
    }
}
