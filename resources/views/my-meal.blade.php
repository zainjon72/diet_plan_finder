@extends('layouts.header')
@section('content')

<div class="container text-center">
  <h1>Product card</h1>
  <span>Create With <i class="zmdi zmdi-favorite red"></i>  By: <strong>Deni Kurniawan</strong> From: <i><a href="http://blog.wingerdstok.com" class="wsk-btn">Wingerdstok</a></i></span>
</div>

<div class="shell">
  <div class="container" style="margin-top: 100px;">
    {{-- <a href="{{ url('/my-plan') }}" class="btn btn-success" style="margin-top: 100px; padding: 10px 25px">Back To Plans</a> --}}
    <div class="row">
      @foreach($meals as $meal)
      <div class="col-md-3 p_card" style="margin-bottom: 150px;">
        <li class="product-item" style="list-style: none;">
          <div class="contain-product layout-default">
            <div class="product-thumb">
              <a href="#" class="link-to-product">
                <img src="{{ url('/storage/app/public/'.$meal->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
              </a>
              {{-- <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a> --}}
            </div>
            <div class="info">
              {{-- <b class="categories">Vegetables</b> --}}
              <h4 class="product-title"><a href="#" class="pr-name">{{ $meal->title }}</a></h4>
              <div class="price ">
                {{-- <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan->price }}</span></ins> --}}
                {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
              </div>
              <div class="slide-down-box">
                <p class="message">{{ $meal->discription }}</p>
                <div class="buttons">
                  {{-- <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a> --}}
                  {{-- <a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a> --}}
                  {{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

