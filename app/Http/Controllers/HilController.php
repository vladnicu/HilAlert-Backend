<?php

namespace App\Http\Controllers;

use App\Events\NewHil;
use App\Hil;
use App\Http\Requests\StoreHilRequest;
use App\Http\Requests\UpdateHilRequest;
use App\Http\Resources\HilResource;

use Illuminate\Http\Request;

class HilController extends Controller
{
    public function index() {
        return HilResource::collection(Hil::all());
    }

    public function destroy(Hil $hil){
       $hil->delete();

       return response(null,204);
    }

    public function update(UpdateHilRequest $request, Hil $hil){
        $hil->labcarname = $request->get('labcarname', $hil->labcarname);

        $hil->save();
        
        $hil->date = $request->get('date', $hil->date);
        return new HilResource($hil);
    }
    
    public function store(StoreHilRequest $request) {
        $hil = new Hil;
        $hil->labcarname = $request->labcarname;
        $hil->save();
      
        event(new NewHil($hil->labcarname));
        return $hil;
}
