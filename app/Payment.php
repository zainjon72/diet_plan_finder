<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
     public function user(){
    	return $this->belongTo(User::class);
    }
     public function order(){
    	return $this->belongTo(Order::class);
    }
}
