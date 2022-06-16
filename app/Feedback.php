<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $table = 'feedback';
    protected $fillable = ['name','email', 'rating', 'comment', 'created_by', 'item_id'];

     public function orderitem(){
    	return $this->belongsTo(orderitem::class, 'item_id');
    }

    public function user(){
    	return $this->belongsTo(User::class, 'created_by');
    }
    public function dietplan(){
    	return $this->belongTo(DietPlan::class);
    }
}
