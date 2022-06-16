<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    protected $table = 'order_items';
     public function user(){
    	return $this->belongsTo(User::class);
    }
     public function dietplans(){
    	return $this->hasMany(DietPlan::class,'id','diet_plan_id');
    }
     public function feedbacks(){
    	return $this->hasMany(Feedback::class);
    }
}
