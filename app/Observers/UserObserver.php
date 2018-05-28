<?php

namespace App\Observers;

use App\User;
use Laratrust\Traits\LaratrustUserTrait;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->attachRole('user');
    }

}
