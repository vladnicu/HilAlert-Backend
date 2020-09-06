<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreHilEntryRequest;
use Illuminate\Http\Request;
use App\Http\Resources\HilEntryResource;
use App\Hil;
use App\HilEntry;
use App\Events\PropertyChanged;

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


        $secondLast = $hil->hilentries()->orderBy('created_at', 'desc')->first();
        


        $hil->hilentries()->save($hilEntry);
         
        


        $last = $hil->hilentries()->orderBy('created_at', 'desc')->first();

        
        // get penultimul entry si il compari cu ultimul //transition::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        // toti useri->properties
        // trigger event notification
        
        
         if ($last->compare($secondLast)==0)
            event(new PropertyChanged($hil));


        return $hilEntry;
    }

    public function index() {
        
        return HilEntryResource::collection(HilEntry::all());
    }
}
