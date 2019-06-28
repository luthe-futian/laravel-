<?php

namespace App\Policies;

use App\Model\User;
use App\Model\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Admin  $admin
     * @return mixed
     */
    public function view(Admin $user, Admin $admin)
    {

    }

    public function edit(Admin $user, Admin $admin){
        if($user->id == 1) return true;
        return $user->id === $admin->id;
    }
    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\Model\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Admin  $admin
     * @return mixed
     */
    public function update(Admin $user, Admin $admin)
    {
        if($user->id == 1) return true;
        return $user->id === $admin->id;
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $user, Admin $admin)
    {
        if($admin->id == 1) return false; //不能删除1
        if($user->id == 1) return true;  //删除除自己之外
        return $user->id === $admin->id;
    }
}
