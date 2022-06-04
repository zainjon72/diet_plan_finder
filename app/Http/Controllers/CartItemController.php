<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem;
use App\HealthCondition;
use Auth;

class CartItemController extends Controller
{
    public function index(){
    	$health = HealthCondition::with('dietplans')->get();
    	$cart_items = CartItem::with('dietplans')->get();
    	$data = [];
    	$data['cart_items'] = $cart_items;
    	$data['health'] = $health;
    	return view('cart', $data);
    }

    public function create(Request $request, $id=null){
    	// dd($request->all());
    	$health = HealthCondition::with('dietplans')->where('created_by', Auth::user()->id)->get();
    	$data = $request->all();
    	$data['created_by'] = Auth::user()->id;
    	unset($data['_token']);
    	$obj = new CartItem();
    	$created = $obj->insert($data);
    	// dd($created);
    	$data['health'] = $health;
    	// return view('cart', $data);
    	return redirect('/cart');
    }
}
