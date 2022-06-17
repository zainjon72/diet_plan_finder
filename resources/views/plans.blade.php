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
      <div class="col-md-3 p_card">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img"><img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Product" class="img-responsive" /></div>
          <div class="wsk-cp-text">
            <div class="category">
              <span>Diet Plan</span>
            </div>
            <div class="title-product">
              <h3>{{ $plan->title }} </h3>
            </div>
            <div class="title-product">
              <h5>{{ $plan->discription }} </h5>
            </div>
            <div class="card-footer">
              {{-- <div class="wcf-left"><span class="price">Rp500.000</span></div> --}}
              <div class="wcf-right view"><a href="{{ url('/plan/'.$plan->id) }}" class="text-center btn btn-success btn-block">View</a></div>
            </div>
          </div>
        </div>
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