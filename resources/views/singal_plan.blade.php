@extends('layouts.app')
@section('content')
<section id="services" class="services section-bg">
	<div class="container-fluid">
		<div class="col-sm-12 text-center mb-4">
			
		</div>
		<div class="row row-sm">
			<div class="col-md-6 mx-auto text-center">
			
					<img src="{{ asset('/img/download.jfif') }} " class="w-75">
				
				<div class="_product-images">
					<div class="picZoomer">
						<img class="my_img" src="https://s.fotorama.io/1.jpg" alt="">
					</div>
				</div>
			</div>
			{{-- @dd($plans) --}}
			{{--   @foreach($plans as $plan) --}}
			<div class="col-md-6">
				<div class="_product-detail-content">
					<p class="_p-name">{{ $plans['title'] }} </p>
					<div class="_p-price-box">
						<div class="p-list">
							<span class="price"> ${{ $plans['price'] }} </span>
						</div>
						<form action="{{ url('/cart/'.$plans['id']) }}" method="post">
							@csrf
						<div class="_p-add-cart">
							<div class="_p-qty">
								<span>Add Quantity</span>
							
								<input type="number" name="quantity" id="number" value="1" />
							
							</div>
						</div>
						<div class="_p-features">
							<span> Description About this product:- </span>
							{{ $plans['discription'] }}    
						</div>
						
							<ul class="spe_ul"></ul>
							<div class="_p-qty-and-cart">
								<div class="_p-add-cart">
									{{-- <button class="btn-theme btn buy-btn" tabindex="0">
										<i class="fa fa-shopping-cart"></i> Buy Now
									</button> --}}
									<button name="submit" type="submit"  class="btn-theme btn btn-success" tabindex="0">
										<i class="fa fa-shopping-cart"></i> Add to Cart
									</button>
									   
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			{{-- @endforeach --}}
		</div>
	</div>
</section>

@endsection