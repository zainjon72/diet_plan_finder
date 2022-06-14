@extends('layouts.header')
@section('content')

<div class="container text-center">
<h1>Product card</h1>
  <span>Create With <i class="zmdi zmdi-favorite red"></i>  By: <strong>Deni Kurniawan</strong> From: <i><a href="http://blog.wingerdstok.com" class="wsk-btn">Wingerdstok</a></i></span>
</div>


<div class="shell">
  <div class="container">
    <div class="row">
		@foreach($meals as $meal)
      <div class="col-md-3 p_card">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img"><img src="{{ url('/storage/app/public/'.$meal['image']) }}" alt="Product" class="img-responsive" /></div>
          <div class="wsk-cp-text">
            <div class="category">
              <span>Diet Plan</span>
            </div>
            <div class="title-product">
              <h3>{{ $meal['title'] }} </h3>
            </div>
            <div class="description-prod">
              <p>{{ $meal['discription'] }}</p>
            </div>
            <div class="card-footer">
              {{-- <div class="wcf-left"><span class="price">Rp500.000</span></div> --}}
              <div class="wcf-right"><a href="{{ url('/view_plan/'.$meal['id']) }}" class="text-center btn btn-primary">View Plan</a></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

