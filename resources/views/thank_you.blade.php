@extends('layouts.header')
@section('content')
<div class="container" style="margin: 300px auto; text-align: center;">
	<h1 style="font-size: 100px;text-align: center;font-weight: 900; ">Thank You</h1>
	<img src="https://cms-assets.tutsplus.com/cdn-cgi/image/width=850/uploads/users/523/posts/32694/final_image/tutorial-preview-large.png" alt="" style="width: 300px; text-align: center;">
	<h1 style="font-weight: 800">You have Successfully Purchased Your Plan</h1>
	<h1 style="font-weight: 800">See Your Plans <a href="{{ url('/my-plan') }}">Here</a></h1>
</div>
@endsection