<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;

class MyPlansController extends Controller
{
    public function index(){
    	$carts = Cart::all()->where('user_id', Auth::user()->id);
    	$data = [];
    	$data['carts'] = $carts;
    	return view('my-plan', $data);
    	// dd($Cart::all());
    }
    public function my_plan(){
    	$cart = Cart::all()->where('created_by', Auth::user()->id);
    	dd($cart);
    }
}
