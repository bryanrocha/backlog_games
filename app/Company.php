<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function consoles(){
    	return $this->hasMany('App\Console');
    }

    public function games(){
    	return $this->hasMany('App\Game');
    }
}
