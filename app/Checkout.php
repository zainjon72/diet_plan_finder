<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Checkout;

class Checkout extends Model
{
	protected $table = 'orders';
	protected $fillable = ['name', 'email', 'address', 'country', 'state', 'user_id', 'payment_status'];
    public function user(){
    	$this->belongsTo(Checkout::class);
    }
}
