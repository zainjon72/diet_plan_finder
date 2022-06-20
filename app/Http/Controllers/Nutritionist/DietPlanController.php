<?php

namespace App\Http\Controllers\Nutritionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HealthCondition;
use App\Meal;
use App\DietPlan;
use Auth;
use Illuminate\Support\Facades\Storage;


class DietPlanController extends Controller
{
	private $type     =  "diet_plans";
	private $singular =  "Diet Plan";
	private $plural   =  "Diet Plans";
	private $view     =  "Nutritionist.home";
	private $action   =  "/nutritionist/home";
  private $perpage = 5;

  public function index(){
    $plans = DietPlan::paginate(5);
    $data = [];
    $data   = array(
     "page_title"=>$this->plural." ",
     "page_heading"=>$this->plural.' ',
     "breadcrumbs"=>array("#"=>$this->plural." ")
   );
    $data['plans'] = $plans;
    return view($this->view, $data);
  }
  public function add_plan(){
   $health = HealthCondition::all();
   $meal = Meal::all();
   $data = [];
   $data   = array(
     "page_title"=>$this->plural." ",
     "page_heading"=>$this->plural.' ',
     "breadcrumbs"=>array("#"=>$this->plural." ")
   );
   $data['meals'] = $meal;
   $data['health'] = $health;
   return view('nutritionist.add_plan', $data);
 }
 public function create(Request $request, $id=null){
   $data = $request->all();
   unset($data['meals']);
   unset($data['_token']);
   $data['created_by'] = Auth::user()->id;
   $obj = new DietPlan();
   if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = Storage::putFile('all_images', $file);
    $data['image'] = $filename;
  }
  $created = $obj->create($data);
  $meal = $request->meals;
  foreach ($meal as $meal_id) {
    		# code...
    $created->meals()->attach($meal_id);

  }
  return redirect($this->action);

}
public function edit(Request $request, $id){
 if($request->isMethod('post')){
   $data = request()->all();
        // dd($data);
   $obj = DietPlan::find($id);  
   if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = Storage::putFile('all_images', $file);
    $data['image'] = $filename;
  }
  $obj->update($data);
  return redirect(url($this->action));
}
$id = $request->id;
$data = [];
$data   = array(
 "page_title"=>$this->plural." ",
 "page_heading"=>$this->plural.' ',
 "breadcrumbs"=>array("#"=>$this->plural." ")
);
$data['plans'] = DietPlan::find($id)->toArray();
$data['health'] = HealthCondition::all();
$data['meals'] = Meal::all();
$data['id'] = $id;
return view('nutritionist.edit_plan', $data);
}

public function viewmeal($id){
  $plan = DietPlan::with('meals')->where('id',$id)->get()->toArray();
  $data = [];
  $data['plans'] = $plan;
    // dd($plan);
  return view('/admin/meals', $data);

}

public function approve($id){
 $plan = DietPlan::find($id);
 $data = ['status' => 'Approved'];
 $plan->update($data);
 return redirect($this->action);
}

public function delete($id){
 DietPlan::destroy($id);
 return redirect($this->action);
}
}
