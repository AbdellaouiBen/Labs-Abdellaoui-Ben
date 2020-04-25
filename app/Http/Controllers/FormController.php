<?php

namespace App\Http\Controllers;

use App\Form;
use App\User;
use Illuminate\Http\Request;

use App\MAIL\FormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdminOrWebmaster')->only('index','destroy');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminWebmaser', User::class); 
        $forms = Form::latest('id')->get();
        return view('form.index',compact('forms'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {        
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:105',
        'mail' => 'required|email|max:105',
        'subject' => 'required|max:105',
        'msg' => 'required|max:305',    ]);

    if ($validator->fails()) {
        return redirect()->to(url()->previous().'#form')
                    ->withErrors($validator)
                    ->withInput();
    }


        $form = new Form();
        $form->name = $request->input('name'); 
        $form->email = $request->input('mail');
        $form->subject = $request->input('subject');
        $form->msg = $request->input('msg');
        $form->save();
        Mail::to($form->email)->send(new FormMail($form));
        return redirect()->to(url()->previous().'#form')->with('success', 'Thanks for contacting us!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        $this->authorize('adminWebmaser', User::class);
        $form->delete();
        return redirect()->route('form.index');
    }
    
    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
    public function edit()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
    public function update()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
}
