<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem;
use App\OrderItems;
use App\HealthCondition;
use App\Checkout;
use App\Wishlist;
use Auth;

class CartItemController extends Controller
{

    private $view = 'cart';
    private $action = '/cart';
    public function index(){
       $wishlist = Wishlist::where('user_id', Auth::user()->id);
       $health = HealthCondition::with('dietplans')->get();
       $cart_items = CartItem::with('dietplans')->where('created_by', Auth::user()->id)->get();
        // dd($cart_items);
       $data = [];
       $data['cart_items'] = $cart_items;
       $data['wishlist'] = $wishlist;
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
public function checkout(Request $request){
   $wishlist = Wishlist::where('user_id', Auth::user()->id);
   if($request->isMethod('post')){
    $data = $request->all();
        // dd($data);
    $data['user_id'] = Auth::user()->id;
    $obj = new Checkout();
    unset($data['_token']);
    unset($data['total']);
        // dd($data);
    $created = $obj->insert($data);
        // dd($created);

    $carts = CartItem::all()->where('created_by', Auth::user()->id)->toArray();
    $order_id = Checkout::latest('id')->first(); 
    $order_id = $order_id['id'];
    $total = $request->total;
    $order_id = Checkout::latest('id')->first(); 
    $user_id = $data['user_id'];
            // dd($user_id);
    $order_id = $order_id['id'];
    $total = $request->total;

            // dd($total);

    foreach ($carts as $diet) {
        $data = [
            'total' => $total,
            'order_id' => $order_id,
            'user_id' => $user_id,
            'diet_plan_id' => $diet['diet_plan_id']
        ];
        $obj = new OrderItems();
        $created_cart = $obj->insert($data);
                // dd($created_cart);
    }

    $delete = CartItem::all()->where('created_by', Auth::user()->id)->toArray();
            // dd($delete);

    foreach ($delete as $del) {


        CartItem::destroy($del['id']);
    }
    return;
}

$health = HealthCondition::with('dietplans')->get();
$cart_items = CartItem::with('dietplans')->where('created_by', Auth::user()->id)->get();
$data = [];
$data['wishlist'] = $wishlist;
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
