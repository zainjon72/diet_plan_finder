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
      $lossplan = DietPlan::where('health_condition_id', 6)->get();
      $gainplan = DietPlan::where('health_condition_id', 7)->get();
      $highplan = DietPlan::where('health_condition_id', 8)->get();
      $plans = DietPlan::all();
      // dd($lossplan);
      // dd($health);
      $data = [];
      $data['health'] = $health;
      $data['lossplan'] = $lossplan;
      $data['gainplan'] = $gainplan;
      $data['highplan'] = $highplan;
      $data['plans'] = $plans;
      return view($this->view, $data);
    }

    public function plans(){

      $health = HealthCondition::with('dietplans')->get();
      $lossplan = DietPlan::where('health_condition_id', 6)->get();
      $gainplan = DietPlan::where('health_condition_id', 7)->get();
      $highplan = DietPlan::where('health_condition_id', 8)->get();
      $plans = DietPlan::all();
      // dd($lossplan);
      // dd($health);
      $data = [];
      $data['health'] = $health;
      $data['lossplan'] = $lossplan;
      $data['gainplan'] = $gainplan;
      $data['highplan'] = $highplan;
      $data['plans'] = $plans;

      return view('plans', $data);
    }

    public function plan($id){
    	$plan = DietPlan::with('meals')->find($id);
      $health = HealthCondition::with('dietplans')->get();
      $feedback = Feedback::with('user')->where('plan_id', $plan['id'])->get();
      // dd($health);
      $order_items = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->pluck('diet_plan_id')->toArray();
      $order = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->where('diet_plan_id', $plan['id'])->pluck('id')->toArray();
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
      $data['order'] = $order;
      $data['feedbacks'] = $feedback;
    	return view('plan', $data);
    }
    public function thankyou(){
      return view('thank_you');
    }
}
