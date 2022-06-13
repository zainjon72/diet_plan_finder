@extends('layouts.header')
@section('content')
<div class="container" style="margin-top: 500px;">
	<div class="row" style="display: flex;">
		{{-- @dd($carts) --}}
		@foreach($carts as $cart)
		<div class="col-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">{{ $cart->diet_plan_id }}</h5>
					<p class="card-text"></p>
					<a href="#" class="btn btn-primary"></a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection