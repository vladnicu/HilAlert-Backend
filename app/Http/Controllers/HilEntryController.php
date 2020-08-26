<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreHilEntryRequest;
use Illuminate\Http\Request;
use App\Http\Resources\HilEntryResource;
use App\Hil;
use App\HilEntry;
class HilEntryController extends Controller
{
    public function store(StoreHilEntryRequest $request, Hil $hil) {

        $hilEntry = new HilEntry;

        $hilEntry->date = $request->date;
        $hilEntry->machinename = $request->machinename;
        $hilEntry->osversion = $request->osversion;
        $hilEntry->projectname = $request->projectname;
        $hilEntry->selectedServers = $request->selectedServers;
        $hilEntry->labcarType = $request->labcarType;
        $hilEntry->autorun = $request->autorun;
        
        
        $hil->hilentries()->save($hilEntry);
       
        //$hil->save();
       // $hil->hilEntrys()->save($hilEntry);
        
        return $hilEntry;

        //event(new NewHil($hil));
        //return new HilResource($hil);
    }

    public function index() {
        
        return HilEntryResource::collection(HilEntry::all());
    }
}
