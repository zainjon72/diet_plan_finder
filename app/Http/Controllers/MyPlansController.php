<?php
namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\OrderItems;	
	use App\DietPlan;
	use App\Meal;
	use Auth;

	class MyPlansController extends Controller
	{
		public function index(){
			$order_items = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->get()->toArray();
			$data = [];
			$data['order_items'] = $order_items;
			return view('my-plan', $data);
		}
		public function my_meal($id){
			$plan = DietPlan::with('meals')->find($id);
			$meals = $plan->meals;
			$data = [];
			$data['meals'] = $meals;
			return view('my-meal', $data);
		}
		public function view_plans($id){
			$meal = Meal::with('dietplans')->find($id);
			$plan = $meal->dietplans;
			// dd($plan);
			$data = [];
			$data['plans'] = $plan;
			// return view('view_plan', $data);
		}

	}
