<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    //
    public function index(){
    	$users = User::all();
    	// dd($users);
    	$data = [];
    	$data['users'] = $users;
    	return view('home', $data);
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
    	return redirect(url('/admin/home'));
    }
     public function delete($id){
    	// $user = User::find($id);
    	User::destroy($id);
    	// dd(User::all());
    	// dd($user->status);
    	return redirect(url('/admin/home'));
    }

}
