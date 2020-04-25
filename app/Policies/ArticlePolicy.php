<?php

namespace App\Policies;

use App\User;  
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ArticlePolicy
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
    public function adminWebRedacteurOf(User $user, Article $article){
        if ($user->id === $article->user_id || $user->role_id == 1 || $user->role_id == 3) {
            return true ;  
        }   else{
            return false;
        }
    }
    public function adminWebRedacteur(User $user){
        if ($user->role_id == 5 || $user->role_id == 1 || $user->role_id == 3) {
            return true ;
        }else{
            return false;
        }
    }
}  
 