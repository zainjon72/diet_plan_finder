<?php

namespace App\Http\Controllers\Nutritionist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meal;
use App\HealthCondition;
use Auth;
use Illuminate\Support\Facades\Storage;
class MealController extends Controller
{
	private $type     =  "meals";
	private $singular =  "Meal";
	private $plural   =  "Meals";
	private $view     =  "nutritionist.meal";
	private $action   =  "/nutritionist/meal";
	public function index(){
		$meal = Meal::all();
		$data = [];
		
		$data   = array(
			"page_title"=>$this->plural." ",
			"page_heading"=>$this->plural.' ',
			"breadcrumbs"=>array("#"=>$this->plural." ")
		);
		$data['meals'] = $meal;
		return view($this->view, $data);
	}
	public function add_meal(){
		$meal = Meal::all();
		$health = HealthCondition::all();
		$data = [];
		$data   = array(
			"page_title"=>$this->plural." ",
			"page_heading"=>$this->plural.' ',
			"breadcrumbs"=>array("#"=>$this->plural." ")
		);
		// $data['meals'] = $meal;
		// $data['health'] = $health;

		return view('nutritionist.add_meal', $data);
	}

	public function create(Request $request, $id=null){
		$data = $request->all();
    	// dd($data);
		if ($request->hasFile('image')) {
			$file = $request->file('image');
			$filename = Storage::putFile('all_images', $file);
			$data['image'] = $filename;
		}
		$meal = new Meal();
		$data['created_by'] = Auth::user()->id;
		unset($data['_token']);
		$meal->insert($data);
		return redirect($this->action);
	}


	public function update(Request $request, $id){

		if($request->isMethod('post')){
			$data = request()->all();
        // dd($data);
			$obj = Meal::find($id);  
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
        // $data = [
        //     'u_name' => $request->u_name,
        //     'email' => $request->email
        // ];
		$data   = array(
			"page_title"=>$this->plural." ",
			"page_heading"=>$this->plural.' ',
			"breadcrumbs"=>array("#"=>$this->plural." ")
		);
		$data['meal'] = Meal::find($id)->toArray();
		$data['id'] = $id;
		return view('nutritionist.edit_meal', $data);
	}
	public function delete($id){
		Meal::destroy($id);
		return redirect($this->action);
	}
}
