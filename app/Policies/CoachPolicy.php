<?php

namespace App\Policies;

use App\Coach;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoachPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any coaches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the coach.
     *
     * @param  \App\User  $user
     * @param  \App\Coach  $coach
     * @return mixed
     */
    public function view(User $user, Coach $coach)
    {
        //
    }

    /**
     * Determine whether the user can create coaches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the coach.
     *
     * @param  \App\User  $user
     * @param  \App\Coach  $coach
     * @return mixed
     */
    public function update(User $user, Coach $coach)
    {
        $user->id==$coach->user_id;
    }

    /**
     * Determine whether the user can delete the coach.
     *
     * @param  \App\User  $user
     * @param  \App\Coach  $coach
     * @return mixed
     */
    public function delete(User $user, Coach $coach)
    {
        //
    }

    /**
     * Determine whether the user can restore the coach.
     *
     * @param  \App\User  $user
     * @param  \App\Coach  $coach
     * @return mixed
     */
    public function restore(User $user, Coach $coach)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the coach.
     *
     * @param  \App\User  $user
     * @param  \App\Coach  $coach
     * @return mixed
     */
    public function forceDelete(User $user, Coach $coach)
    {
        //
    }
}
