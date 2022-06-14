<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Checkout;
use App\CartItem;
use Auth;
use App\OrderItems;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
    	$cart_items = CartItem::with('dietplans')->where('created_by', Auth::user()->id)->get();
        // dd($cart_items);
    	$data = [];
    	$data['cart_items'] = $cart_items;
    	return view('checkout', $data);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
    	$order_id = Checkout::latest('id')->first();
    	$carts = OrderItems::where('order_id', $order_id)->get()->toArray();
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    	Stripe\Charge::create ([
    		"amount" => 100 * 100,
    		"currency" => "usd",
    		"source" => $request->stripeToken,
    		"description" => "Test payment from Dietplanfinder" 
    	]);

    	Session::flash('success', 'Payment successful!');
    	$order_id = Checkout::latest('id')->first(); 
    	// dd($order_id['id']);
    	$order = Checkout::find($order_id['id']);
    	$data = ['payment_status' => 'approve'];
    	// dd($data);
    	$order->update($data);
    	return redirect(url('/my-plan'));
    }
}
