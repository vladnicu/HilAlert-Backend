<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
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

        return $user;
    }

    public function update(UpdateUserRequest $request, User $user){
        
        $user->hils()->sync($request->hils);

        return $user;
    }
}
