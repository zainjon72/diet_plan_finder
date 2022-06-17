<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Feedback;

class FeedbackController extends Controller
{
    public function create(Request $request, $id=null){
    	$data = $request->all();
    	$data['created_by'] = Auth::user()->id;
    	// $data['item'];
    	// dd($data);
    	unset($data['_token']);
    	// unset($data['plan_id']);
    	$obj = new Feedback();
    	$obj->insert($data);
    	$id = $request->plan_id;
    	return redirect(url('/plan/'.$id));
    }
}
