<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
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
}
