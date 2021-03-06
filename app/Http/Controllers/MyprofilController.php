<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Storage;

class MyprofilController extends Controller
{
    public function __construct(){
        $this->middleware('isUser')->only('edit','update');
    }
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('myprofil.index',compact('roles'));
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        $roles = Role::all();
        return view('myprofil.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:150',
            'firstname' => 'sometimes|max:150',
            'email' => 'required|email|unique:users,email,'.$id,
            'img' => 'sometimes|image',
            'description' => 'sometimes|max:400',
        ]);
            $users = User::find($id);
            if($request->hasFile('img')){
                $img = $request->file('img');
                $newName = Storage::disk('public')->put('',$img);
                Storage::disk('public')->delete($users->img);
                $users->img = $newName ;
            }
            $users->name = $request->input('name');
            $users->firstname = $request->input('firstname');
            $users->email = $request->input('email');
            $users->description = $request->input('description');
            $users->save();
            return redirect()->route('myprofil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        Storage::disk('public')->delete($users->img);
        $user->delete();
        return redirect()->route('/index');
    }
}
