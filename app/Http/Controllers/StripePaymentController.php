<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Checkout;
use App\Cart;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('checkout');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

    	$order_id = Checkout::latest('id')->first();
    	$carts = Cart::all()->where('order_id', $order_id)->toArray();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Dietplanfinder" 
        ]);
  
        Session::flash('success', 'Payment successful!');
        return redirect(url('/my-plan'));
    }
}
