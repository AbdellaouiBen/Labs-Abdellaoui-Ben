<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

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
        if ($user->id === $article->user_id || $user->id == 1 || $user->id == 3) {
            return true ;
        }
    }
    public function adminWebRedacteur(User $user){
        if ($user->id == 5 || $user->id == 1 || $user->id == 3) {
            return true ;
        }
    }
}
