<?php

namespace App\Policies;

use App\Models\User as UserModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class User
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

    public function update(UserModel $userModel ,UserModel $user): bool
    {
        return $user->id === $userModel->id;
    }
}
