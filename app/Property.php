<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'id',
    ]; 
    public function users(){
        return $this->belongsToMany(User::class);
    }

    
}
