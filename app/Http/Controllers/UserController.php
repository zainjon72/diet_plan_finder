<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DietPlan;
use Auth;
class UserController extends Controller
{
     private $view     =  "admin.home";
     private $url     =  "admin/home";
    //
    public function index(){
    	$users = User::all();
    	$data = [];
    	$data['users'] = $users;
    	return view($this->view, $data);
    } 	
    public function approve($id){
    	$user = User::find($id);
    	// dd($user->status);
    	$status = [
			'status' => 'Approve'
    	];
    	$user->update($status);
    	// dd($user->status);

    	// $user->status = "Approve";
    	// dd($user->status);
    	return redirect(url($this->url));
    }    
    public function approve_plan($id){
        $plan = DietPlan::find($id);
        // dd($user->status);
        $status = [
            'status' => 'Approve'
        ];
        $plan->update($status);
        // dd($plan->status);

        // $user->status = "Approve";
        // dd($user->status);
        return redirect(url('/admin/plan'));
    }
     public function pending_plan($id){
        $plan = DietPlan::find($id);
        // dd($user->status);
        $status = [
            'status' => 'Pending'
        ];
        $plan->update($status);
        // dd($plan->status);

        // $user->status = "Approve";
        // dd($user->status);
        return redirect(url('/admin/plan'));
    }
     public function delete($id){
    	// $user = User::find($id);
    	User::destroy($id);
    	// dd(User::all());
    	// dd($user->status);
    	return redirect(url($this->url));
    }
       public function admin_role($id){
        $user = User::find($id);
        // dd($user->status);
        $role = [
            'role' => 'admin'
        ];
        $user->update($role);
        // dd($user->status);

        // $user->status = "Approve";
        // dd($user->status);
        return redirect(url($this->url));
    }
           public function nutritionist_role($id){
        $user = User::find($id);
        // dd($user->status);
        $role = [
            'role' => 'nutritionist'
        ];
        $user->update($role);
        // dd($user->status);

        // $user->status = "Approve";
        // dd($user->status);
        return redirect(url($this->url));
    }
    public function plan(){
        $plans = DietPlan::all();
        $data   = array(
            "page_title"=>"Plans",
            "page_heading"=>'Plans'
        );

        $data['plans'] = $plans;
        return view('admin.plans', $data);
    }

}
