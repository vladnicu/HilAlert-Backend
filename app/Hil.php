<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Orderable;
use App\User;
class Hil extends Model
{
    
    use Orderable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'labcarname'
    ];

    public function hilentries(){
        return $this->hasMany(HilEntry::class);
    }

    public function firstHilEntry() {
        return $this->hilentries()->first();
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}

