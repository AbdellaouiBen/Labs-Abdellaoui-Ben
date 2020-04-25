<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\User;
use Illuminate\Http\Request;

use App\MAIL\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class NewsletterController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdminOrWebmaster')->only('index','create','destroy');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminWebmaser', User::class);
        $newsletters = Newsletter::latest('id')->get();
        return view('newsletter.index',compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        
        // $validatedData = $request->validate([
        //     'email' => 'required|email|max:105',
        // ]);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:105',
        ]);

        if ($validator->fails()) {
            return redirect()->to(url()->previous().'#newsletter')
                        ->withErrors($validator)
                        ->withInput();
        }
        $newsletter = new Newsletter();
        $newsletter->email = $request->input('email');
        $newsletter->save();
        Mail::to($newsletter->email)->send(new NewsletterMail($newsletter));
        return redirect()->back()->with('inscrit', 'You are subsribed to our newsletter!');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        $this->authorize('adminWebmaser', User::class);
        $newsletter->delete();
        return redirect()->route('newsletter.index');
    }
}
