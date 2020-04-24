<?php

namespace App\Policies;

use App\User;
use App\Commentaire;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentairePolicy
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
            public function adminWebWritter(User $user, Commentaire $commentaire){
                if ($user->id === $commentaire->user_id || $user->id == 1 || $user->id == 3) {
                    return true ;
                }
            }
}
