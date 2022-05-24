<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //

    public function user(){
    	return $this->belongTo(User::class);
    }
    public function dietplan(){
    	return $this->belongTo(DietPlan::class);
    }
}
