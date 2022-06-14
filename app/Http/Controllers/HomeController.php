<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use App\DietPlan;
use App\OrderItems;
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
      // dd($health);
      $order_items = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->get()->toArray();
      // dd($order_items->toArray());
      foreach ($order_items as $a) {
        # code...
      }
    	$meal = $plan->meals;
      $meal1 = $plan->meals->first();
        // dd($meal1);
    	$data = [];
    	$data['plan'] = $plan;
      $data['meal_one'] = $meal1;
      $data['meals'] = $meal;
    	$data['health'] = $health;
      $data['order_items'] = $order_items;
    	return view('plan', $data);
    }
}
