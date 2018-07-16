<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function console(){
    	return $this->belongsTo('App\Console');
    }

    public function company(){
    	return $this->belongsTo('App\Company');
    }
}
