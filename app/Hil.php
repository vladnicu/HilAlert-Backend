<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hil extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'labcarname',
        'machinename',
        'osversion',
        'projectname',
        'selectedServers',
        'labcarType',
        'autorun',
    ];
}
