<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //
     public function dietplans(){
    	return $this->hasMany(DietPlan::class);
    }
     public function user(){
    	return $this->belongsTo(User::class);
    }
}
