<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem;
use App\HealthCondition;
use Auth;

class CartItemController extends Controller
{

    private $view = 'cart';
    private $action = '/cart';
    public function index(){
    	$health = HealthCondition::with('dietplans')->get();
    	$cart_items = CartItem::with('dietplans')->where('created_by', Auth::user()->id)->get();
        // dd($cart_items);
    	$data = [];
    	$data['cart_items'] = $cart_items;
    	$data['health'] = $health;
    	return view($this->view, $data);
    }

    public function create(Request $request, $id=null){
    	// dd($request->all());
    	$health = HealthCondition::with('dietplans')->where('created_by', Auth::user()->id)->get();
        $all = CartItem::where('diet_plan_id', $request->diet_plan_id)->where('created_by', Auth::user()->id)->get();
        // dd($all);
        foreach ($all as $allitems) {
            if($request->diet_plan_id == $allitems->diet_plan_id){
                $quantity = $allitems->quantity + $request->quantity;

                $data = ['quantity' => $quantity];
                $allitems->update($data);
                return redirect($this->action);
            }
        }
        $data = $request->all();
        $data['created_by'] = Auth::user()->id;
        unset($data['_token']);
        $obj = new CartItem();
        $created = $obj->insert($data);
        $data['health'] = $health;
        return redirect($this->action);
        
    }
    public function checkout(){
        $health = HealthCondition::with('dietplans')->get();
        $cart_items = CartItem::with('dietplans')->where('created_by', Auth::user()->id)->get();
        $data = [];
        $data['health'] = $health;
        $data['cart_items'] = $cart_items;
        return view('checkout', $data);
    }
    public function delete($id){
        CartItem::destroy($id);
        return redirect($this->action);
    }
    public function delete_all(){
        CartItem::where('created_by', Auth::user()->id)->delete();
        return redirect($this->action);
    }
}
