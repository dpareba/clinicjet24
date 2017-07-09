<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
     public function users(){
    	return $this->belongsToMany('App\User');
    }

    public function visits(){
    	return $this->hasMany('App\Visit');
    }
}
