<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Orderable;
class HilEntry extends Model
{
    use Orderable;
    protected $fillable = [
        'date',
        'machinename',
        'osversion',
        'projectname',
        'selectedServers',
        'labcarType',
        'autorun'
    ];
    
    public function hil(){
        return $this->belongsTo(Hil::class);
    }

    public  function compare($obj1)
    {
        
        if ($obj1->date != $this->date)
        return 0;
        if ($obj1->machinename != $this->machinename)
        return 0;
        if ($obj1->osversion != $this->osversion)
        return 0;
        if ($obj1->projectname != $this->projectname)
        return 0;
        if ($obj1->selectedServers != $this->selectedServers)
        return 0;
        if ($obj1->labcarType != $this->labcarType)
        return 0;
        if ($obj1->autorun != $this->autorun)
        return 0;
    return 1;
    }
}
