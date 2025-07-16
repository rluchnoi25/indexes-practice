<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    public function update(UserUpdateRequest $request, User $user)
    {
        $validated = $request->validated();
        $name = $validated['name'];
        $user->update(['name' => $name]);
        
        return response()->json($user);
    }
}
