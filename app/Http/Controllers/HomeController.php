<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use App\DietPlan;
use App\OrderItems;
use App\Feedback;
use App\Wishlist;
use Auth;

class HomeController extends Controller
{
	private $view     =  "welcome";
	private $action   =  "/";
  public function index(){
    // $wishlist = Wishlist::where('user_id', Auth::user()->id);
    $health = HealthCondition::with('dietplans')->get();
    $plans = DietPlan::all();
    $highplans = DietPlan::where('health_condition_id', 3)->get();
    $lossplans = DietPlan::where('health_condition_id', 1)->get();
    $gainplans = DietPlan::where('health_condition_id', 2)->get();
    $data['health'] = $health;
    $data['plans'] = $plans;
    $data['highplans'] = $highplans;
    $data['lossplans'] = $lossplans;
    $data['gainplans'] = $gainplans;
    // $data['wishlist'] = $wishlist;
    return view($this->view, $data);
  }
  public function add_to_wishlist($id){
    $data = ['plan_id' => $id,'user_id'=>Auth::user()->id];
      // dd($data);
    $obj = new Wishlist();
    $wish = Wishlist::where('plan_id', $id)->where('user_id', Auth::user()->id)->get()->toArray();
      // dd($wish);
    if(!empty($wish)){
        // dd($data);
      return back();
    }else{  
      $obj->insert($data);
      return back();
    }

  }
  public function plans(Request $request){

    $search = $request->search;
      // dd($search);
    $health = HealthCondition::with('dietplans')->get();
    if($request->search == ''){
      $plans = DietPlan::all(); 
    }else{

      $plans = DietPlan::where('title', 'LIKE', "%$search%")->get();
    }
    $data = [];
    $data['health'] = $health;
    $data['plans'] = $plans;

    return view('plans', $data);
  }

  public function plan($id){
   $plan = DietPlan::with('meals')->find($id);
   $wishlist = Wishlist::where('user_id', Auth::user()->id);
   $health = HealthCondition::with('dietplans')->get();
   $feedback = Feedback::with('user')->where('plan_id', $plan['id'])->get();
      // dd($health);
   $order_items = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->pluck('diet_plan_id')->toArray();
      // $order = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->where('diet_plan_id', $plan['id'])->pluck('id')->toArray();
      // dd($order);
   foreach ($order_items as $a) {
        # code...
   }
   $meal = $plan->meals;
        // dd($meal1);
   $data = [];
   $data['plan'] = $plan;
   $data['meals'] = $meal;
   $data['health'] = $health;
   $data['order_items'] = $order_items;
      // $data['order'] = $order;
   $data['feedbacks'] = $feedback;
   $data['wishlist'] = $wishlist;
   return view('plan', $data);
 }
 public function thankyou(){
  $wishlist = Wishlist::where('user_id', Auth::user()->id);
  $data= [];
  $data['wishlist'] = $wishlist;
  return view('thank_you');
}
}
