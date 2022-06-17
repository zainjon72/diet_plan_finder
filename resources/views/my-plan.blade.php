@extends('layouts.header')
@section('content')

<div class="container text-center" style="margin: 50px auto">
<h1>Product card</h1>
  <span>Create With <i class="zmdi zmdi-favorite red"></i>  By: <strong>Deni Kurniawan</strong> From: <i><a href="http://blog.wingerdstok.com" class="wsk-btn">Wingerdstok</a></i></span>
</div>

@if(count($order_items) < 1)
<h1 class="mt-5" style="margin-top: 300px; text-align: center; font-weight: 800; font-size: 50px; margin-bottom: 200px;">You Don't Have Plan Yet <br> <a href="{{ url('/plan') }}" style="text-align: center; font-size: 30px; font-weight: 800;">Buy Now</a></h1> 
@endif
<div class="shell">
  <div class="container">
    <div class="row">
		@foreach($order_items as $plan)
    	@foreach($plan['dietplans'] as $plan)
      <div class="col-md-3 p_card">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img"><img src="{{ url('/storage/app/public/'.$plan['image']) }}" alt="Product" class="img-responsive" /></div>
          <div class="wsk-cp-text">
            <div class="category">
              <span>Diet Plan</span>
            </div>
            <div class="title-product">
              <h3>{{ $plan['title'] }} </h3>
            </div>
            <div class="description-prod">
              <p>{{ $plan['discription'] }}</p>
            </div>
            <div class="card-footer">
              {{-- <div class="wcf-left"><span class="price">Rp500.000</span></div> --}}
              <div class="wcf-right"><a href="{{ url('/meal/'.$plan['id']) }}" class="text-center btn btn-primary btn-block">View Meal</a></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection

