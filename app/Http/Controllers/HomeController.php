<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use App\DietPlan;

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

    public function product($id){
    	$plan = DietPlan::find($id);
    	$health = HealthCondition::with('dietplans')->get();
    	// dd($plan);
    	$data = [];
    	$data['plan'] = $plan;
    	$data['health'] = $health;
    	return view('product', $data);
    }
}
