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
<a href="https://componentity.com" target="_blank" class="block">
{{--   <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png" width="120px" class="d-block mx-auto my-5">
</a> --}}
<div class="contanier mt-5">
    <div class="row">
        {{-- @dd($diet_plans) --}}
        @foreach($diet_plans as $diet_plan)
        <div class="col-4 ml-5">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('/img/download.jfif') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $diet_plan->title }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div> 
    @endforeach
    <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{ asset('/img/download.jfif') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
<div class="col-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{ asset('/img/download.jfif') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
</div>
</div>
</div>
@endsection
