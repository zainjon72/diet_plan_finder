<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function educations(){
    	return $this->hasMany(Education::class);
    }
    public function experiences(){
    	return $this->hasMany(Experience::class);
    }
}
