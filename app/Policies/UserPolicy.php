<?php

namespace App\Policies;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function adminWebmaser(User $user){
        if (Auth::check()) {

        if ($user->id == 1 || $user->id == 3) {
            return true;
        } 
        } 
    }
    public function admin(User $user){
        if (Auth::check()) {
            if ($user->id == 1 ) {
                return true;
            } 
        }
        
    }
    public function isMe(User $user,$id){
        if (Auth::check()) {

        if ($user->id == $id ) {
            return true;
        } 
        } 
    }


}
