<?php

namespace App\Http\Controllers;
use App\Property;
use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\PropertyResource;
class PropertyController extends Controller
{
    public function show() {
       
        return PropertyResource::collection(Property::all());
    }

    public function update(UpdateUserRequest $request, User $user){
        
        $user->properties()->sync($request->properties);
        

        return new UserResource($user);
    }
}
