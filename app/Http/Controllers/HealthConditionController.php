<?php

namespace App\Http\Controllers;

use App\HealthCondition;
use Illuminate\Http\Request;
use Auth;

class HealthConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $health_condition = HealthCondition::all();
        $data = [];
        $data['health_conditions'] = $health_condition;
        dd($health_condition);
        return view('form', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $health_condition = HealthCondition::all();
        unset($data['_token']);
        $data['created_by'] = Auth::user()->id;
        // dd($data);
        HealthCondition::create($data);
        return redirect(url('/admin/form'));

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
     * @param  \App\HealthCondition  $healthCondition
     * @return \Illuminate\Http\Response
     */
    public function show(HealthCondition $healthCondition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthCondition  $healthCondition
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthCondition $healthCondition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthCondition  $healthCondition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=NULL)
    {
         if($request->isMethod('post')){
        $data = request()->all();
        // dd($data);
        $obj = HealthCondition::find($id);
        $obj->update($data);
        return redirect(url('/admin/form'));
        // return view('form', $data);
        }
    
        // dd($request->title);
        $id = $request->id;
        $data = [];
        $data = [
            'title' => $request->title
        ];
         $data['healthcondition'] = HealthCondition::find($id)->toArray();
         $data['id'] = $id;
        return view('edit', $data);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthCondition  $healthCondition
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        HealthCondition::destroy($id);
        return redirect(url('/admin/form'));
    }
}
