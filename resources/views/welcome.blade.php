@extends('layouts.header')
@section('content')
<div class="page-contain">
	<div id="main-content" class="main-content">
		<div class="main-slide block-slider">
			<ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
				<li>
					<div class="slide-contain slider-opt03__layout01 mode-03 black-color slide-bgr-mode03-01">
						<div class="media"></div>
						<div class="text-content">
							<i class="first-line">Pomegranate</i>
							<h3 class="second-line">Diet Plans. 100% Organic</h3>
							<p class="third-line">Healthy Eating Habits From Around the World</p>
							<p class="buttons">
								<a href="{{ url('/plans') }}" class="btn btn-bold">Shop now</a>
								<a href="{{ url('/plans') }}" class="btn btn-thin">View</a>
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="slide-contain slider-opt03__layout01 mode-03 slide-bgr-mode03-02">
						<div class="media">
						</div>
						<div class="text-content">
							<i class="first-line">Pomegranate</i>
							<h3 class="second-line">Diet Plans. 100% Organic</h3>
							<p class="third-line">Healthy Eating Habits From Around the World</p>
							<p class="buttons">
								<a href="{{ url('/plans') }}" class="btn btn-bold">Shop now</a>
								<a href="{{ url('/plans') }}" class="btn btn-thin">View</a>
							</p>
						</div>
					</div>
				</li>
				<li>
					<div class="slide-contain slider-opt03__layout01 mode-03 slide-bgr-mode03-03">
						<div class="media">
						</div>
						<div class="text-content">
							<i class="first-line">Pomegranate</i>
							<h3 class="second-line">Diet Plans. 100% Organic</h3>
							<p class="third-line">Healthy Eating Habits From Around the World</p>
							<p class="buttons">
								<a href="{{ url('/plans') }}" class="btn btn-bold">Shop now</a>
								<a href="{{ url('/plans') }}" class="btn btn-thin">View</a>
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="product-tab z-index-20 sm-margin-top-49px xs-margin-top-80px">
			<div class="container">
				<div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile">
					<span class="icon-at-top biolife-icon icon-organic"></span>
					<span class="subtitle">All the best item for You</span>
					<h3 class="main-title">Bestseller Products</h3>
				</div>
				<div class="biolife-tab biolife-tab-contain sm-margin-top-32px">
					<div class="tab-head tab-head__icon-top-layout icon-top-layout background-tab-include type-02">
						<ul class="tabs">

							<li class="tab-element active">
								<a href="#tab02_4st" class="tab-link">
									<span class="biolife-icon icon-lemon"></span>
									<span>All</span>
								</a>
							</li>
							<li class="tab-element" >
								<a href="#tab02_1th" class="tab-link elm-04">
									<span class="biolife-icon icon-orange"></span>
									<span>Weight Loss</span>
								</a>
							</li>
							<li class="tab-element" >
								<a href="#tab02_2nd" class="tab-link elm-02">
									<span class="biolife-icon icon-grape2"></span>
									<span>Weight Gain</span>
								</a>
							</li>
							<li class="tab-element" >
								<a href="#tab02_3rd" class="tab-link elm-03">
									<span class="biolife-icon icon-blueberry"></span>
									<span>High Choelstrol</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div id="tab02_1th" class="tab-contain ">
							<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
								@foreach($lossplans as $plan)
								<li class="product-item">
									<div class="contain-product layout-default">
										<div class="product-thumb">
											<a href="#" class="link-to-product">
												<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
											</a>
											<a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
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
													<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
													{{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div id="tab02_4st" class="tab-contain active">
							<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
								@foreach($plans as $plan)
								<li class="product-item">
									<div class="contain-product layout-default">
										<div class="product-thumb">
											<a href="#" class="link-to-product">
												<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
											</a>
											<a class="lookup btn_call_quickview" href="#"></a>
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
													<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
													{{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div id="tab02_2nd" class="tab-contain ">
							<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
								@foreach($gainplans as $plan)
								<li class="product-item">
									<div class="contain-product layout-default">
										<div class="product-thumb">
											<a href="#" class="link-to-product">
												<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
											</a>
											<a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
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
													<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
													{{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div id="tab02_3rd" class="tab-contain ">
							<ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
								@foreach($highplans as $plan)
								<li class="product-item">
									<div class="contain-product layout-default">
										<div class="product-thumb">
											<a href="#" class="link-to-product">
												<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
											</a>
											<a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
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
													<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
													{{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach

							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Block 04: Banners-->
		<div class="banner-block md-margin-top-61px sm-margin-bottom-89px xs-margin-top-60px">
			<div class="biolife-banner special-02 biolife-banner__special-02">
				<div class="container">
					<div class="banner-contain">
						<div class="thumb">
							<a href="#" class="link"><img src="{{ asset('assets2/images/home-01/thumb-bn-special-02.jpg') }}" width="753" height="517" alt=""></a>
						</div>
						<div class="text-content">
							<i class="text01">Organic</i>
							<b class="text02">Special Offer</b>
							<span class="text03">Organic Diet Plans</span>
							<span class="text04"><i>Healthy, Happy Life</i></span>
							<div class="product-detail">
								<h4 class="product-name">{{ 'Special Plan' }}</h4>
								<div class="price price-contain">
									<ins><span class="price-amount"><span class="currencySymbol"></span></span></ins>
								</div>
								<p class="measure"><a style="border-radius: 40px; padding: 10px 50px;" href="{{ url('/plan/3') }}" class="btn btn-success">BUY NOW</a></p>
								<div class="buttons">
									{{-- <a href="{{ url('/product/'.$plan->id) }}" class="btn add-to-cart-btn" tabindex="-1">View</a> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Block 05: Banner Promotion-->
		

		<!-- Block 06: Product Tab-->
		<div class="product-tab z-index-20 sm-margin-top-71px xs-margin-top-80px">
			<div class="container">
				<div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile sm-margin-bottom-24px">
					<span class="icon-at-top biolife-icon icon-organic"></span>
					<span class="subtitle">All the best item for You</span>
					<h3 class="main-title">Our Products</h3>
				</div>
				<div class="biolife-tab biolife-tab-contain">
					<div class="tab-head tab-head__sample-layout type-02 xs-margin-bottom-15px ">
						<ul class="tabs">
							<li class="tab-element active">
								<a href="#tab01_1st" class="tab-link">All Plans</a>
							</li>
						</ul>
					</div>
					
					<div class="shell">
						<div class="container">
							<div class="row">
								{{-- @foreach($plans as $plan) --}}
									<ul  class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
								@foreach($plans as $plan)
								<li class="product-item">
									<div class="contain-product layout-default">
										<div class="product-thumb">
											<a href="#" class="link-to-product">
												<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
											</a>
											<a class="lookup btn_call_quickview" href="#"></a>
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
													<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
													<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
													{{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
								{{-- @endforeach --}}
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Block 08: Advance Product-->
		<div class="banner-block">
			<div class="biolife-banner special-03 biolife-banner__special-03">
				<div class="banner-contain">
					<div class="container">
						<div class="biolife-title-box bgrd-bold biolife-title-box__bgrd-bold">
							<h3 class="title">Diet Plans</h3>
						</div>
						<ul class="products-list vertical-layout-02 biolife-carousel nav-none-on-mobile" data-slick='{"rows":3,"arrows":false,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 3, "rows":2, "slidesMargin":10}},{"breakpoint":500, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
							@foreach($plans as $plan)
							<li class="product-item">
								<div class="contain-product contain-product__right-info-layout3">
									<div class="product-thumb">
										<a href="#" class="link-to-product">
											<img src="{{ url('/storage/app/public/'.$plan->image) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
										</a>
									</div>
									<div class="info">
										<h4 class="product-title"><a href="#" class="pr-name">{{ $plan->title }}</a></h4>
										<div class="price ">
											<ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan->price }}</span></ins>
											
										</div>
										<div class="rating">
											{{-- <p class="star-rating"><span class="width-80percent"></span></p> --}}
											{{-- <span class="review-count">(05 Reviews)</span> --}}
										</div>
										<p class="desc">{{ $plan->discription }}</p>
										<div class="buttons">
											<a href="{{ url('/plan/'.$plan->id) }}" class="btn add-to-cart-btn" tabindex="0">View</a>
											<a href="{{ url('/wishlist/'.$plan->id)}}" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
											{{-- <a href="#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- FOOTER -->
