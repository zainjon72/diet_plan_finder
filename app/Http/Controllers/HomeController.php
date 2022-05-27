<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use App\DietPlan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plans = DietPlan::with('user', 'healthcondition')->get();
        $data = [];
        // dd($plans);
        $data['plans'] = $plans;

        return view('plans', $data);
    }
    public function view()
    {
        $health = HealthCondition::with('user')->get();
        $data = [];
        // dd($health->user);
        $data['health_conditions'] = $health;
        return view('form', $data);
    }


    public function show()
    {
        return view('welcome');
    }
    public function delete($id)
    {
      DietPlan::destroy($id);
      return redirect(url('/admin/plans'));
  }
  public function approve($id)
  {

    $plan = DietPlan::find($id);
        // dd($user->status);
        // $status = [
        //     'status' => 'Approved'
        // ];
        // dd($plan->status);
        $plan->status = 'Approved';
        $plan->save();
        // dd($plan);
      // $plan = DietPlan::find($id);
      // $plan->update(['status' => 'Approved']);
      return redirect(url('/admin/plans'));
  }

}
