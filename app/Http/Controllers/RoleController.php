<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // public function __construct(){
    //     $this->middleware('isAdmin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('adminWebmaser', User::class);
        $roles = Role::all();
        return view('role/index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('adminWebmaser', User::class);
        return view('role/create');
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
            'role'=>'required|max:105',
        ]);
        $role = new Role();
        $role->role = $request->role;
        $role->save();
        return redirect()->route('role.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $this->authorize('adminWebmaser', User::class);
        return view('role/edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->authorize('adminWebmaser', User::class);
        $validatedData = $request->validate([
            'role'=>'required',
        ]);
        $role->role = $request->role;
        $role->save();
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {       
        $this->authorize('adminWebmaser', User::class);
        $role->delete();
        return redirect()->route('role.index');
    }
  
    public function show()
    {
        $this->authorize('adminWebmaser', User::class);
        return redirect()->back();
    }
    
}
