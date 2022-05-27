<?php

namespace App\Http\Controllers;

use App\DietPlan;
use App\Meal;
use Auth;
use App\HealthCondition;
use Illuminate\Http\Request;

class DietPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $health = HealthCondition::all();
        $diet_plans = DietPlan::all();
        // $diet_plans = DietPlan::with('health_conditions')->get();
        // dd($health);

        $meals = Meal::all();
        $data = [];
        $data['health_conditions'] = $health;
        $data['plans'] = $diet_plans;
        $data['meals'] = $meals;
        
        return view('nutritionist-home', $data);
    
    }
    //   public function show()
    // {
        
    //     $diet = DietPlan::all();
    //     $data = [];
    //     $data['diet-plans'] = $diet;
    //     return view('nutritionist-home', $data);
    
    // }
        public function view()
    {
        $diet = DietPlan::all();
        $data = [];
        $data['diet_plans'] = $diet;
        // dd($diet_plans);
        return view('nutritionist-diet', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // $id = $data['health_condition_id'];
        // $health_conditions = HealthCondition::find($id);
        // dd($health_conditions);
        // $data['health_condition_id'] = $health_conditions;
        // dd($data);
        unset($data['_token']);
        $diet_plans = DietPlan::all();
        $data['created_by'] = Auth::user()->id;
        $created_plan = DietPlan::create($data);
        // dd($created_plan);
        return redirect(url('/nutritionist/form'));
        // dd($diet_plans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DietPlan  $dietPlan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    

    // return view('nutritionist-diet', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DietPlan  $dietPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if($request->isMethod('post')){
        $data = request()->all();
        // dd($data);
        $obj = DietPlan::find($id);
        // dd($obj);
        $obj->update($data);
        return redirect(url('/nutritionist/home'));
        // return view('form', $data);
        }
        // $obj = DietPlan::find($id);
    
        // dd($request->title);
        $id = $request->id;
        $data = [];
        $data = [
            'title' => $request->title,
            'discription' =>$request->discription,
            'price' =>$request->price,
            'health_condition_id' =>$request->health_condition_id
        ];
         $data['diet_plans'] = DietPlan::find($id)->toArray();
         $data['health_conditions'] = HealthCondition::all();
         $data['id'] = $id;
        return view('edit_plan', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DietPlan  $dietPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DietPlan $dietPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DietPlan  $dietPlan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DietPlan::destroy($id);
        return redirect(url('/nutritionist/home'));
    }
}
