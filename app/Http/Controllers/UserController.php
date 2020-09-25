<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function login(StoreUserRequest $request)
    {
        $user = User::where('username', $request->username)->first();
        if (!$user) {
            $user = new User;
            $user->username =  $request->username;
            $user->save();
        }
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, $username)
    {
        $user = User::where('username', $username)->first();
        if ($request->hils) {
            $user->hils()->sync($request->hils);
        }

        if ($request->properties) {
            $user->properties()->sync($request->properties);
        }

        return new UserResource($user);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
}
