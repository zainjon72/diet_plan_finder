<?php

namespace App\Http\Controllers;

use App\DietPlan;
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
        $data = [];
        $data['health_conditions'] = $health;
        $data['diet_plans'] = $diet_plans;
        // dd($data['diet_plans']);
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
        // dd($request->all());
        unset($data['_token']);
        $diet_plans = DietPlan::all();
        $data['created_by'] = Auth::user()->id;
        $created_plan = DietPlan::create($data);
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
    public function edit(DietPlan $dietPlan)
    {
        //
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
    public function destroy(DietPlan $dietPlan)
    {
        //
    }
}
