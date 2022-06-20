<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use App\DietPlan;
use App\OrderItems;
use App\Feedback;
use Auth;

class HomeController extends Controller
{
	private $view     =  "welcome";
	private $action   =  "/";
    public function index(){
      $health = HealthCondition::with('dietplans')->get();
      $plans = DietPlan::all();
      $data['health'] = $health;
      $data['plans'] = $plans;
      return view($this->view, $data);
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
    	return view('plan', $data);
    }
    public function thankyou(){
      return view('thank_you');
    }
}
