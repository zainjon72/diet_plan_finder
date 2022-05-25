<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    //
    protected $fillable = ['title', 'created_by'];
     public function user(){
    	return $this->belongTo(User::class);
    }
     public function dietplans(){
    	return $this->hasMany(DietPlan::class, 'health_condition_id');
    }
}
