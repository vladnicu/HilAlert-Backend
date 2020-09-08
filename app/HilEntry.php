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

    public  function compare($obj1, $propertiesName)
    {
        
        $propertiesName->each(function ($property) {

            dump($property);
           
         });
        
         return 1;
    }
}
