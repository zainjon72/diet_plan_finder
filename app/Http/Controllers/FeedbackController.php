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
    	unset($data['_token']);
    	$obj = new Feedback();
    	$obj->insert($data);
    	$id = $request->plan_id;
    	return redirect(url('/plan/'.$id));
    }
}
