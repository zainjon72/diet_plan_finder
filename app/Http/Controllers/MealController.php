<?php

namespace App\Http\Controllers;

use App\Meal;
use Auth;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meal = Meal::all();
        $data = [];
        $data['meals'] = $meal;
        return view('meal', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        unset($data['_token']);
        $data['created_by'] = Auth::user()->id;
        $meals = Meal::all();
        $meal = Meal::create(['title' => $request->title, 'created_by' => Auth::user()->id]);
        return redirect(url('/nutritionist/meal'));
        // $data['diet_plan_id'] = ;
        // dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
          if($request->isMethod('post')){
        $data = request()->all();
        // dd($data);
        $obj = Meal::find($id);
        // dd($obj);
        $obj->update($data);
        return redirect(url('/nutritionist/meal'));
        // return view('form', $data);
        }
        // $obj = DietPlan::find($id);
    
        // dd($request->title);
        $id = $request->id;
        $data = [];
        $data = [
            'title' => $request->title
        ];
         $data['meals'] = Meal::find($id)->toArray();
         // $data['meals'] = M::all();
         $data['id'] = $id;
        return view('edit_meal', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
