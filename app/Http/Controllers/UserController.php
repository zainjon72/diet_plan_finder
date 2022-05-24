<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    //
    public function index(){
    	$users  = User::all();
    	$data = [];
    	$data['users'] = $users;
    	// dd($data);
    	if (Auth::user()->role == 'admin') {
    		# code...
    	return view('home', $data);
    	}
    }
}
