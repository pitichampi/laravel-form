<?php

namespace App\Policies;

use App\Films;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;

class FilmsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any films.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the films.
     *
     * @param  \App\User  $user
     * @param  \App\Films  $films
     * @return mixed
     */
    public function view(User $user, Films $films)
    {
        //
    }

    /**
     * Determine whether the user can create films.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the films.
     *
     * @param  \App\User  $user
     * @param  \App\Films  $films
     * @return mixed
     */
    public function update(User $user, Films $films)
    {
        //
        return $user->id==$films->user_id;
    }

    /**
     * Determine whether the user can delete the films.
     *
     * @param  \App\User  $user
     * @param  \App\Films  $films
     * @return mixed
     */
    public function delete(User $user, Films $films)
    {
        //
    }

    /**
     * Determine whether the user can restore the films.
     *
     * @param  \App\User  $user
     * @param  \App\Films  $films
     * @return mixed
     */
    public function restore(User $user, Films $films)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the films.
     *
     * @param  \App\User  $user
     * @param  \App\Films  $films
     * @return mixed
     */
    public function forceDelete(User $user, Films $films)
    {
        //
    }
}
