<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function updated(User $user)
    {
        if ($user->isDirty('name')) {
            $user->orders()->update([
                'user_name' => $user->name,
            ]);
        }
    }
}
