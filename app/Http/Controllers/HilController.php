<?php

namespace App\Http\Controllers;

use App\Hil;
use App\HilEntry;
use App\Http\Requests\StoreHilRequest;
use App\Http\Requests\UpdateHilRequest;
use App\Http\Resources\HilResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Events\NewHil;
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
        
        // $hil->date = Carbon::parse($request->date);

        $hil->date = $request->get('date', $hil->date);
        $hil->labcarname = $request->get('labcarname', $hil->labcarname);
        $hil->machinename = $request->get('machinename', $hil->machinename);
        $hil->osversion = $request->get('osversion', $hil->osversion);
        $hil->projectname = $request->get('projectname', $hil->projectname);
        $hil->selectedServers = $request->get('selectedServers', $hil->selectedServers);
        $hil->labcarType = $request->get('labcarType', $hil->labcarType);
        $hil->autorun = $request->get('autorun', $hil->autorun);

        $hil->save();

        $hil->date = $request->get('date', $hil->date);

        return $hil;
    }
    
    public function store(StoreHilRequest $request) {

        $hil = new Hil;
       
       
        $hil->labcarname = $request->labcarname;
       
        $hil->save();
       
        
        return $hil;

        
    }

}
