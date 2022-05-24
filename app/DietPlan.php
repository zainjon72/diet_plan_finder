<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietPlan extends Model
{
    //
     public function user(){
    	return $this->belongTo(User::class);
    }
     public function meals(){
    	return $this->hasMany(Meal::class);
    }
     public function cart(){
    	return $this->belongTo(Cart::class);
    }
     public function healthcondition(){
        return $this->belongTo(HealthCondition::class, 'health_condition_id');
    }
     public function cartitem(){
        return $this->belongTo(CartItem::class);
    }

}
