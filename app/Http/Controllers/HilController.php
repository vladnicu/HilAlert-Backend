<?php

namespace App\Http\Controllers;

use App\Hil;
use App\Http\Requests\StoreHilRequest;
use App\Http\Resources\HilResource;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HilController extends Controller
{
    public function index() {
        return HilResource::collection(Hil::all());
    }
    
    public function store(StoreHilRequest $request) {

        $hil = new Hil;
        $hil->date = Carbon::parse($request->date);
        $hil->labcarname = $request->labcarname;
        $hil->machinename = $request->machinename;
        $hil->osversion = $request->osversion;
        $hil->projectname = $request->projectname;
        $hil->selectedServers = $request->selectedServers;
        $hil->labcarType = $request->labcarType;
        $hil->autorun = $request->autorun;

        $hil->save();

        return new HilResource($hil);
    }

}
