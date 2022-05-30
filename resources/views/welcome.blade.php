@extends('layouts.app')
@section('content')
<div style="height: 100vh; background-image: url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80); background-size: cover; background-position: center;" class="position-relative w-100">
  <div class="position-absolute text-white d-flex flex-column align-items-center justify-content-center" style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.6);">
    <span>SubHeadline</span>
    <h1 class="mb-4 mt-2 font-weight-bold text-center">Enter Your Headline Here</h1>
    <div class="text-center">
      <!-- hover background-color: white; color: black; -->
      <a href="#" id="filled" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1" style="border-radius: 30px; background-color: #9B5DE5;">Get Started</a>
      <!-- hover background-color: #9B5DE5; color: white; -->
      <a href="#" id="outlined" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1" style="border-radius: 30px; border:1px solid #9B5DE5;">Showcases</a>
  </div>
</div>
</div>

<!-- Credit: Componentity.com -->
{{-- <a href="https://componentity.com" target="_blank" class="block"> --}}
{{--   <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" width="120px" class="d-block mx-auto my-5">
</a> --}}
{{-- <div class="container mt-5 cart" style="display: none;">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
</div> --}}

<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    @foreach($diet_plans as $diet_plan)
    <div class="col-4 hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="{{ asset('/img/download.jfif') }}" class="card-img-top" alt="product.title" />
      </a>

      <div class="label-top shadow-sm">
          <a class="text-white" href="#">asus</a>
      </div>
      <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">${{ $diet_plan->price }}</span>

            {{--  <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span> --}}
        </div>
        <h5 class="card-title">
            <a target="_blank" href="#">{{ $diet_plan->discription }}</a>
        </h5>

        <div class="d-grid gap-2 my-4">

            <a href="{{ url('/singal_plan/'.$diet_plan->id) }}" class=" btn btn-primary cart" onclick="addtocart();">View</a>

        </div>
        <div class="clearfix mb-1">

            {{-- <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span> --}}

            {{-- <span class="float-end"> --}}
              {{-- <i class="far fa-heart" style="cursor: pointer"></i> --}}

          {{-- </span> --}}
      </div>
  </div>
</div>
</div>
@endforeach

<i class="far fa-heart" style="cursor: pointer"></i>

</span>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="small text-muted my-4">Images by <a target="_blank" href="https://www.amazon.com/">Amazon</a></div>
@endsection
