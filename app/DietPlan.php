<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietPlan extends Model
{
    //
    public $table = 'diet_plans';
    protected $fillable = ['title', 'discription', 'price', 'created_by', 'health_condition_id', 'meal_id', 'image', 'status'];
     public function user(){
    	return $this->belongsTo(User::class,'created_by');
    }
     public function meals(){
    	return $this->belongsToMany(Meal::class, 'diet_plan_meal');
    }
     public function healthcondition(){
        return $this->belongsTo(HealthCondition::class, 'health_condition_id');
    }
     public function cartitem(){
        return $this->hasMany(CartItem::class);
    }

}
