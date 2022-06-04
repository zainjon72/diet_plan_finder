<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCondition;
use Auth;

class HealthConditionController extends Controller
{
    //
	private $type     =  "health_conditions";
	private $singular =  "Health Condition";
	private $plural   =  "Health Conditions";
	private $view     =  "admin.health";
	private $action   =  "/admin/health";
	public function index(){
		$health_conditions = HealthCondition::all();
		$data   = array(
			"page_title"=>$this->plural." List",
			"page_heading"=>$this->plural.' List',
			"breadcrumbs"=>array("#"=>$this->plural." List")
		);
		$data['health_conditions'] = $health_conditions;
		return view($this->view, $data);
	}
	public function add_health(){
		$data   = array(
			"page_title"=>$this->plural." ",
			"page_heading"=>$this->plural.' ',
			"breadcrumbs"=>array("#"=>$this->plural." ")
		);
		return view('admin.add_health', $data);
	}
	public function create(Request $request, $id=null){
		$data = $request->all();
		$data['created_by'] = Auth::user()->id;
		$obj = new HealthCondition();
		unset($data['_token']);
		$created = $obj->insert($data);
		return redirect($this->action);

	}
	public function cleanData(&$data) {
		$unset = ['ConfirmPassword','q','_token'];
		foreach ($unset as $value) {
			if(array_key_exists ($value,$data))  {
				unset($data[$value]);
			}
		}
	}
	public function edit(Request $request, $id){
		if($request->isMethod('post')){
			$data = $request->all();
			$this->cleanData($data);
			$obj = HealthCondition::find($id);
			$obj->update($data);
			return redirect($this->action);
		}
		$id = $request->id;
		$data   = array(
			"page_title"=>$this->plural." ",
			"page_heading"=>$this->plural.' ',
			"breadcrumbs"=>array("#"=>$this->plural." ")
		);
		$data['health_condition'] = HealthCondition::find($id);
		$data['id'] = $id;
		return view('admin.edit_health', $data);
	}
	public function delete($id){
		HealthCondition::destroy($id);
		return redirect($this->action);
	}
}
