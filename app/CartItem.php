<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //
    protected $fillable = ['quantity', 'created_by', 'diet_plan_id'];
     public function dietplans(){
    	return $this->belongsTo(DietPlan::class, 'diet_plan_id');
    }
     public function user(){
    	return $this->belongsTo(User::class, 'created_by');
    }
}
