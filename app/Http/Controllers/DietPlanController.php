<?php

namespace App\Http\Controllers;

use App\DietPlan;
use App\CartItem;
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

        $diet_plans = DietPlan::with('healthcondition', 'user')->get();
        // dd($diet_plans);



        $meals = Meal::all();
        $data = [];
        $data['health_conditions'] = $health;
        $data['plans'] = $diet_plans;
        $data['meals'] = $meals;
        
        return view('nutritionist-home', $data);

    }
    public function show()
    {

        $diet = DietPlan::all();
        $data = [];
        $data['diet_plans'] = $diet;
        // dd($data);
        return view('welcome', $data);

    }
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

        // $id = $data['health_condition_id'];
        // $health_conditions = HealthCondition::find($id);
        // dd($health_conditions);
        // $data['health_condition_id'] = $health_conditions;
        // dd($data);
        unset($data['_token']);
        unset($data['meal_id']);

        $diet_plans = DietPlan::all();
        $data['created_by'] = Auth::user()->id;
        $created_plan = DietPlan::create($data);
        // dd($request->meal_id);
        foreach($request->meal_id as $meal){
            $created_plan->meals()->attach($meal);
        }
        // dd($created_plan->meals)->toArray();
        
        return redirect(url('/nutritionist/home'));
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
        $data['diet_plans'] = DietPlan::find($id);
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
    public function add_to_cart(Request $request, $id){
        $data = DietPlan::find($id);
        $plans = DietPlan::all();
        $cart = CartItem::all();
        // dd($request->all);
        $insert = [
            'quantity' => $request->quantity,
         'created_by' => Auth::user()->id,
          'diet_plan_id' => $data['id']
      ];
        $created =  CartItem::create($insert);

        // $diet_plans = [];
        // $data_plans['diet_plans'] = $plans;
        return redirect(url('/cart'));

    }
    public function singal_plan($id){
        $plan = DietPlan::find($id);
        $data = [];
        $data['plans'] = $plan;
        // dd($data);
        return view('singal_plan', $data);
    }
    public function cart(Request $request, $id){
        $data = DietPlan::find($id);
        // dd($request->all());
        $insert = [
            'quantity' => $request->quantity,
         'created_by' => Auth::user()->id,
          'diet_plan_id' => $id
      ];
        $created =  CartItem::create($insert);
        // dd($data);
        return redirect(url('/cart'));
    }
    public function viewcart(){
        $carts = CartItem::all();

        $data = [];
        $data['plans'] = $carts;
        return view('cart', $data);
    }
    public function delete_cart($id){
        CartItem::destroy($id);
        return redirect(url('/cart'));
    }
    public function checkout(){
        $check = CartItem::with('dietplans')->get();
        $data = [];
        $data['carts'] = $check;
        return view('checkout', $data);
    }
}
