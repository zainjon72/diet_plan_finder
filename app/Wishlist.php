<?php

namespace App;
use App\DietPlan;


use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $fillable = ['plan_id', 'user_id'];
    public function plans(){
    	return $this->hasMany(DietPlan::class,'id','plan_id');
    }
    public function users(){
    	return $this->hasMany(User::class);
    }
 }
