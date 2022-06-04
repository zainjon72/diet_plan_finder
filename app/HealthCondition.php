<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    //
    protected $fillable = ['title', 'created_by', 'discription'];
     public function user(){
    	return $this->belongsTo(User::class, 'created_by');
    }
     public function dietplans(){
    	return $this->hasMany(DietPlan::class);
    }
}
