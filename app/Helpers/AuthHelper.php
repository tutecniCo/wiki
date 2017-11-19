<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class AuthHelper
{
    /**
     * Checks if the current user is admin or not.
     *
     * @return bool
     */
    public static function isAdmin() {
        foreach (Auth::user()->roles as $role)
        {
            if ($role->slug === 'admins')
                return true;
        }
        return false;
    }
}