<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('user.index',compact('users','roles'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('user.show',compact('user','roles'));
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
        return view('user.edit',compact('user','roles'));
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
            'name' => 'required',
            'firstname' => 'sometimes|max:100',
            'email' => 'required|email|unique:users,email,'.$id,
            'img' => 'sometimes|image',
            'description' => 'sometimes|max:300',
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
        $users->role_id = $request->input('role_id');
        $users->description = $request->input('firstname');
        $users->save();
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        Storage::disk('public')->delete($users->img);
        $user->delete();
        return redirect()->route('user.index');
    }
}
