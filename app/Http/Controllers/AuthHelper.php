<?php

namespace App\Http\Controllers;

use App\Models\User;

class AuthHelper
{
    /**
     * Determine the role of the user.
     *
     * @param User $user
     * @return string|null
     */
    public function WhatsRole(User $user): ?string
    {
        if ($user->isAdmin()) {
            return 'admin';
        }

        if ($user->isVendor()) {
            return 'vendor';
        }

        if ($user->isClient()) {
            return 'client';
        }

        return null; // Return null if no role is found
    }
}
