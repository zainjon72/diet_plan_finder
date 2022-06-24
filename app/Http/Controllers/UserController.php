<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DietPlan;
use App\Wishlist;
use App\OrderItems;
use Auth;
class UserController extends Controller
{
 private $view     =  "admin.home";
 private $url     =  "admin/home";
 private $perpage = 5;
    //
 public function index(){
   $users = User::paginate($this->perpage);
   // $wishlist = Wishlist::where('user_id', Auth::user()->id);
   $data = [];
   // $data['wishlist'] = $wishlist
   $data['users'] = $users;
   return view($this->view, $data);
 } 	
 public function approve($id){
   $user = User::find($id);
   $status = [
     'status' => 'Approve'
   ];
   $user->update($status);
   return redirect(url($this->url));
 }    
 public function approve_plan($id){
  $plan = DietPlan::find($id);
  $status = [
    'status' => 'Approve'
  ];
  $plan->update($status);
  return redirect(url('/admin/plan'));
}
public function cancel_plan($id){
  $plan = DietPlan::find($id);
  $status = [
    'status' => 'Cancel'
  ];
  $plan->update($status);
  return redirect(url('/admin/plan'));
}
public function delete($id){
 User::destroy($id);
 return redirect(url($this->url));
}     
public function delete_plan($id){
  DietPlan::destroy($id);
  return redirect(url('/admin/plan'));
}
public function admin_role($id){
  $user = User::find($id);
  $role = [
    'role' => 'admin'
  ];
  $user->update($role);
  return redirect(url($this->url));
}
public function nutritionist_role($id){
  $user = User::find($id);
  $role = [
    'role' => 'nutritionist'
  ];
  $user->update($role);
  return redirect(url($this->url));
}
public function plan(){
  $plans = DietPlan::paginate($this->perpage);
  $data   = array(
    "page_title"=>"Plans",
    "page_heading"=>'Plans'
  );

  $data['plans'] = $plans;
  return view('admin.plans', $data);
}
public function profile(){
  $wishlist = Wishlist::with('plans')->where('user_id', Auth::user()->id)->get();
  $plans  = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->get();
  $data = [];
  $data['wishlist'] = $wishlist;
  $data['plans'] = $plans;
  return view('profile', $data);
}
public function wishlist(){
  $wishlist = Wishlist::with('plans')->where('user_id', Auth::user()->id)->get()->toArray();
  $plans = OrderItems::with('dietplans')->where('user_id', Auth::user()->id)->get();
  $data = [];
  $data['wishlist'] = $wishlist;
  $data['plans'] = $plans;
  // dd($data['wishlist']);
  return view('wishlist', $data);
}
public function delete_wishlist($id){
  // dd(Wishlist::find($id));
  $wishlist = Wishlist::where('plan_id', $id)->pluck('id');
  // dd($wishlist);
  Wishlist::destroy($wishlist);
  return redirect (url('/wishlist'));
}
public function nutritionistprofile($id){
  $plans = DietPlan::with('user')->where('created_by', $id)->get()->toArray();
  $user = User::find($id);
  $data = [];
  $data['plans'] = $plans;
  $data['user'] = $user;
  return view('nutritionist_profile', $data); 
}

}
