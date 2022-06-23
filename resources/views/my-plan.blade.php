@extends('layouts.header')
@section('content')

<div class="container text-center" style="margin: 50px auto">
<h1>Product card</h1>
  <span>Create With <i class="zmdi zmdi-favorite red"></i>  By: <strong>Deni Kurniawan</strong> From: <i><a href="http://blog.wingerdstok.com" class="wsk-btn">Wingerdstok</a></i></span>
</div>

@if(count($order_items) < 1)
<h1 class="mt-5" style="margin-top: 300px; text-align: center; font-weight: 800; font-size: 50px; margin-bottom: 200px;">You Don't Have Plan Yet <br> <a href="{{ url('/plans') }}" style="text-align: center; font-size: 30px; font-weight: 800;">Buy Now</a></h1> 
@endif
<div class="shell">
  <div class="container">
    <div class="row">
		@foreach($order_items as $plan)
    	@foreach($plan['dietplans'] as $plan)
      <div class="col-md-3 p_card" style="margin-bottom: 150px;">
        <li class="product-item" style="list-style: none;">
                  <div class="contain-product layout-default">
                    <div class="product-thumb">
                      <a href="#" class="link-to-product">
                        <img src="{{ url('/storage/app/public/'.$plan['image']) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
                      </a>
                      {{-- <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a> --}}
                    </div>
                    <div class="info">
                      {{-- <b class="categories">Vegetables</b> --}}
                      <h4 class="product-title"><a href="#" class="pr-name">{{ $plan['title'] }}</a></h4>
                      <div class="price ">
                        {{-- <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan-> }}</span></ins> --}}
                        {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
                      </div>
                      <div class="slide-down-box">
                        <p class="message">{{ $plan['discription'] }}</p>
                        <div class="buttons" style="display: flex;justify-content: space-around;">
                          {{-- <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a> --}}
                          <a href="{{ url('/plan/'.$plan['id']) }}" class="btn add-to-cart-btn btn-danger" style="background: #dfa421;padding: 15px 20px 15px 20px;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View Plan</a>
                          <a href="{{ url('/meal/'.$plan['id']) }}" class="btn add-to-cart-btn" style="padding: 15px 20px 15px 20px;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View Meal</a>
                          {{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection

