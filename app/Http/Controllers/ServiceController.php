<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icon;
use App\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $services = Service::all();
        return view('service/index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        $icons = Icon::all();
        return view('service/create',compact('icons'));
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
            'icon'=>'required',
            'titre'=>'required|max:150',
            'description'=>'required|max:300',
        ]);
        $service = new Service();
        $service->icon = $request->icon;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('adminWebmaser', User::class);
        $icons = Icon::all();
        return view('service.edit',compact('service','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'icon'=>'required',
            'titre'=>'required|max:150',
            'description'=>'required|max:300',
        ]);
        $service->icon = $request->icon;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('adminWebmaser', User::class);
        $service->delete();
        return redirect()->route('service.index');
    }
}
