<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function user(){
    	return $this->belongTo(User::class);
    }
    public function payment(){
    	return $this->hasOne(Payment::class);
    }
}
