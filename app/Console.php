<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    //
    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function games(){
    	return $this->hasMany('App\Game');
    }
}
