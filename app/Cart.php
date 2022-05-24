<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
     public function user(){
    	return $this->belongTo(User::class);
    }
     public function dietplans(){
    	return $this->hasMany(DietPlan::class);
    }
}
