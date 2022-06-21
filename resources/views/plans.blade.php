@extends('layouts.header')
@section('content')

<!--Hero Section-->
<div class="hero-section hero-background">
  <h1 class="page-title">Organic Fruits</h1>
</div>

<!--Navigation section-->
<div class="container">
  <nav class="biolife-nav">
    <ul>
      <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
      <li class="nav-item"><a href="#" class="permal-link">Diet Plans</a></li>
    
    </ul>
  </nav>
</div>
{{-- @dd($plans->toArray()) --}}



@if(!empty($plans->toArray()))
<div class="shell">
  <div class="container">
    <div class="row">
      @foreach($plans as $plan)
      <div class="col-md-3 p_card" style="margin-bottom: 150px;">
        <li class="product-item" style="list-style: none;">
                  <div class="contain-product layout-default">
                    <div class="product-thumb">
                      <a href="#" class="link-to-product">
                        <img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
                      </a>
                      {{-- <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a> --}}
                    </div>
                    <div class="info">
                      {{-- <b class="categories">Vegetables</b> --}}
                      <h4 class="product-title"><a href="#" class="pr-name">{{ $plan->title }}</a></h4>
                      <div class="price ">
                        <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan->price }}</span></ins>
                        {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
                      </div>
                      <div class="slide-down-box">
                        <p class="message">{{ $plan->discription }}</p>
                        <div class="buttons">
                          <a href="{{ url('/wishlist/'.$plan->id) }}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                          <a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
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
@else
<h1 class="oops">Oops!</h1>
<h1 class="no_plan">No Plan Matches Your Search</h1>
<h1 class="view_plan"><a href="{{ url('/plan') }}">View Plans</a></h1>
@endif
{{-- </div>  --}}

</div>

</div>
</div>
</div>

@endsection