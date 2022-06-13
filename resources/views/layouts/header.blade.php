
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biolife - Organic Food</title>
	<link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	<link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/slick.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets2/css/main-color01.css') }}">
	<style>

		.badge {
			padding-left: 9px;
			padding-right: 9px;
			-webkit-border-radius: 9px;
			-moz-border-radius: 9px;
			border-radius: 9px;
		}

		.label-warning[href],
		.badge-warning[href] {
			background-color: #c67605;
		}
		#lblCartCount {
			font-size: 12px;
			background: #ff0000;
			color: #fff;
			padding: 0 5px;
			vertical-align: top;
			margin-left: -10px; 
		}
		.nice-select .current{
			padding: 0px !important;
		}
		.form-control{
			display: block !important;
		}
	</style>
</head>
<body class="biolife-body">

	<!-- Preloader -->
	<div id="biof-loading">
		<div class="biof-loading-center">
			<div class="biof-loading-center-absolute">
				<div class="dot dot-one"></div>
				<div class="dot dot-two"></div>
				<div class="dot dot-three"></div>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<header id="header" class="header-area style-01 layout-01">
		<div class="header-top hidden-xs hidden-sm">
			<div class="container">
				<div class="top-bar left">
					<ul class="horizontal-menu">
						<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>zainjon12@gmail.com</a></li>
					</ul>
					<ul class="social-list circle-layout">
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="top-bar right">
					<ul class="horizontal-menu">
						<li><a href="{{ url('/profile') }}" class="login-link"><i class="biolife-icon icon-login"></i>My Account</a></li>
						<li>
							{{-- @guest --}}
							@if(!Auth::check())
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@endif
						</li>
						@if(Auth::check())
						<li class="horz-menu-item currency">
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"><i class="fa fa-sign-out mr-2"></i>
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form> 
					</li> 
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div class="header-middle hidden-sm hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
					<a href="{{ url('/home') }}" class="biolife-logo"><img src="{{ asset('assets2/images/logo-biolife-1.png') }}" alt="biolife logo" width="135" height="36"></a>
				</div>
				<div class="col-lg-9 col-md-10 padding-top-2px">
					<div class="header-search-bar layout-01 no-product-cat">
						<form action="#" class="form-search" name="desktop-seacrh" method="get">
							<input type="text" name="s" class="input-text" value="" placeholder="Search here...">
							<button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
						</form>
					</div>
					<div class="live-info">
						<p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+92) 3154152432</b></p>
						{{-- <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p> --}}
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="header-bottom biolife-sticky-object">
		<div class="container md-possition-relative">
			<div class="row">
				<div class="col-lg-6 col-md-6 hidden-sm hidden-xs md-possition-initial">
					<div class="primary-menu">
						<ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
							<li class="menu-item"><a href="{{ url('/home') }}">Home</a></li>
							<li class="menu-item menu-item-has-children has-megamenu">
								<a href="{{ url('/plan') }}" class="menu-name" data-title="Shop" >Plans</a>
								
							</li>
							<li class="menu-item"><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
					<div class="logo-for-mobile hidden-lg hidden-md">
						<a href="{{ url('/home') }}" class="biolife-logo"><img src="{{asset('assets2/images/logo-biolife-1.png')}}" alt="biolife logo" width="135" height="36"></a>
					</div>
					<div class="biolife-cart-info center-align-mobile">
						<div class="mobile-search">
							<a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
							<div class="mobile-search-content">
								<form action="#" class="form-search" name="mobile-seacrh" method="get">
									<a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
									<input type="text" name="s" class="input-text" value="" placeholder="Search here...">
									<select name="category">
										<option value="-1" selected>All Categories</option>
										<option value="vegetables">Vegetables</option>
										<option value="fresh_berries">Fresh Berries</option>
										<option value="ocean_foods">Ocean Foods</option>
										<option value="butter_eggs">Butter & Eggs</option>
										<option value="fastfood">Fastfood</option>
										<option value="fresh_meat">Fresh Meat</option>
										<option value="fresh_onion">Fresh Onion</option>
										<option value="papaya_crisps">Papaya & Crisps</option>
										<option value="oatmeal">Oatmeal</option>
									</select>
									<button type="submit" class="btn-submit">go</button>
								</form>
							</div>
						</div>
						<div class="minicart-block layout-02">
							<div class="minicart-contain">
								<div class="icon-contain">
									<div class="span-index">
										<i class="icon-cart-mini biolife-icon"></i>
										<span class='badge badge-warning' id='lblCartCount'> @php
										// echo count($cart_items);
									@endphp</span>
									<span class="qty">8</span>
									<span class="sub-total"></span>
								</div>
								<a href="{{ url('/cart') }}" class="btn-to-cart">Go</a>
							</div>
						</div>
					</div>
					<div class="mobile-menu-toggle">
						<a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<main class="pb-4">
	@yield('content')
</main>
<footer id="footer" class="footer layout-01">
	<div class="footer-content background-footer-03">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<section class="footer-item">
						<a href="{{ url('/home') }}" class="logo footer-logo"><img src="{{ asset('/assets2/images/logo-biolife-1.png') }}" alt="biolife logo" width="135" height="34"></a>
						<div class="footer-phone-info mode-03">
							<i class="biolife-icon icon-head-phone"></i>
							<p class="r-info">
								<span>Got Questions ?</span>
								<span class="number">(700)  9001-1909  (900) 689 -66</span>
							</p>
						</div>
						<div class="contact-info-block footer-layout simple-info">
							<h4 class="title">Contact info</h4>
							<div class="info-item">
								<img src="{{ asset('assets2/images/location-icon.png') }}" width="22" height="26" alt="" class="icon">
								<p class="desc">7563 St. Vicent Place, Glasgow, Greater Newyork NH7689, UK </p>
							</div>
						</div>
						<div class="biolife-social inline circle-hover">
							<ul class="socials">
								<li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</section>
				</div>
				<div class="col-lg-8 col-md-8 col-xs-12 ">
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
							<section class="footer-item">
								<h3 class="section-title">My Account</h3>
								<div class="wrap-custom-menu vertical-menu-2">
									<ul class="menu">
										<li><a href="#">Sign In</a></li>
										<li><a href="#">View Cart</a></li>
										<li><a href="#">My Wishlist</a></li>
										<li><a href="#">Track My Order</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Our Blog</a></li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
							<section class="footer-item">
								<h3 class="section-title">Why Buy From Us</h3>
								<div class="wrap-custom-menu vertical-menu-2">
									<ul class="menu">
										<li><a href="#">Shipping & Returns</a></li>
										<li><a href="#">Secure Shopping</a></li>
										<li><a href="#">International Shipping</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Group Sales</a></li>
										<li><a href="#">Shipping & Returns</a></li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
							<section class="footer-item">
								<h3 class="section-title">Information</h3>
								<div class="wrap-custom-menu vertical-menu-2">
									<ul class="menu">
										<li><a href="#">Our Blog</a></li>
										<li><a href="#">About Our Shop</a></li>
										<li><a href="#">Secure Shopping</a></li>
										<li><a href="#">Delivery infomation</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Our Sitemap</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>

				</div>
			</div>

			<div class="footer-midle-pst">
				<div class=" newsletter-block layout-04">
					<div class="wrap-title">
						<span class="biolife-icon icon-newsletter"></span>
						<div class="texts">
							<h3 class="newslt-title">Sign up for our newsletter</h3>
							<p class="sub-title">Sign up our Newsletter for Exclusive Discount codes</p>
						</div>
					</div>
					<div class="form-content">
						<form action="#" name="new-letter-foter" method="post">
							<input type="email" class="input-text email" value="" placeholder="Your email here...">
							<button type="submit" class="bnt-submit" name="ok">Sign up</button>
						</form>
					</div>
				</div>
			</div>

		</div>

		<div class="copy-rights-contain">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="copy-right-text"><p><a href="templateshub.net">Templates Hub</a></p></div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="payment-methods">
							{{-- <ul>
								<li><a href="#" class="payment-link"><img src="assets2/images/card1.jpg" width="51" height="36" alt=""></a></li>
								<li><a href="#" class="payment-link"><img src="assets2/images/card2.jpg" width="51" height="36" alt=""></a></li>
								<li><a href="#" class="payment-link"><img src="assets2/images/card3.jpg" width="51" height="36" alt=""></a></li>
								<li><a href="#" class="payment-link"><img src="assets2/images/card4.jpg" width="51" height="36" alt=""></a></li>
								<li><a href="#" class="payment-link"><img src="assets2/images/card5.jpg" width="51" height="36" alt=""></a></li>
							</ul> --}}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</footer>

<!--Footer For Mobile-->
<div class="mobile-footer">
	<div class="mobile-footer-inner">
		<div class="mobile-block block-menu-main">
			<a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
				<span class="fa fa-bars"></span>
				<span class="text">Menu</span>
			</a>
		</div>
		<div class="mobile-block block-sidebar">
			<a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
				<i class="fa fa-sliders" aria-hidden="true"></i>
				<span class="text">Sidebar</span>
			</a>
		</div>
		<div class="mobile-block block-minicart">
			<a class="link-to-cart" href="#">
				<span class="fa fa-shopping-bag" aria-hidden="true"></span>
				<span class="text">Cart</span>
			</a>
		</div>
		<div class="mobile-block block-global">
			<a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
				<span class="fa fa-globe"></span>
				<span class="text">Global</span>
			</a>
		</div>
	</div>
</div>

<!--Mobile Global Menu-->
<div class="mobile-block-global">
	<div class="biolife-mobile-panels">
		<span class="biolife-current-panel-title">Global</span>
		<a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
	</div>
	<div class="block-global-contain">
		<div class="glb-item my-account">
			<b class="title">My Account</b>
			<ul class="list">
					<li>
							{{-- @guest --}}
							@if(!Auth::check())
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@endif
						</li>
				<li class="list-item"><a href="{{ url('/logout') }}">	@if(Auth::check())
						<li class="horz-menu-item currency">
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"><i class="fa fa-sign-out mr-2"></i>
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form> 
					</li> 
					@endif</a></li>
				<li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
			</ul>
		</div>
         {{--    <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">£ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div> --}}
            <div class="glb-item languages">
            	<b class="title">Language</b>
            	{{-- <ul class="list inline">
            		<li class="list-item"><a href="#"><img src="assets2/images/languages/us.jpg" alt="flag" width="24" height="18"></a></li>
            		<li class="list-item"><a href="#"><img src="assets2/images/languages/fr.jpg" alt="flag" width="24" height="18"></a></li>
            		<li class="list-item"><a href="#"><img src="assets2/images/languages/ger.jpg" alt="flag" width="24" height="18"></a></li>
            		<li class="list-item"><a href="#"><img src="assets2/images/languages/jap.jpg" alt="flag" width="24" height="18"></a></li>
            	</ul> --}}
            </div>
        </div>
    </div>

    <!--Quickview Popup-->
    <div id="biolife-quickview-block" class="biolife-quickview-block">
    	<div class="quickview-container">
    		<a href="#" class="btn-close-quickview" data-object="open-quickview-block"><span class="biolife-icon icon-close-menu"></span></a>
    		<div class="biolife-quickview-inner">
    			<div class="media">
    				{{-- <ul class="biolife-carousel quickview-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".quickview-nav"}'>
    					<li><img src="assets2/images/details-product/detail_01.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_02.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_03.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_04.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_05.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_06.jpg" alt="" width="500" height="500"></li>
    					<li><img src="assets2/images/details-product/detail_07.jpg" alt="" width="500" height="500"></li>
    				</ul> --}}
    				{{-- <ul class="biolife-carousel quickview-nav" data-slick='{"arrows":true,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":3,"slidesToScroll":1,"asNavFor":".quickview-for"}'>
    					<li><img src="assets2/images/details-product/thumb_01.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_02.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_03.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_04.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_05.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_06.jpg" alt="" width="88" height="88"></li>
    					<li><img src="assets2/images/details-product/thumb_07.jpg" alt="" width="88" height="88"></li>
    				</ul> --}}
    			</div>
    			<div class="product-attribute">
    				<h4 class="title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
    				<div class="rating">
    					<p class="star-rating"><span class="width-80percent"></span></p>
    				</div>

    				<div class="price price-contain">
    					<ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
    					<del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
    				</div>
    				<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus.</p>
    				<div class="from-cart">
    					<div class="qty-input">
    						<input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
    						<a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
    						<a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
    					</div>
    					<div class="buttons">
    						<a href="#" class="btn add-to-cart-btn btn-bold">View</a>
    					</div>
    				</div>

    				<div class="product-meta">
    					<div class="product-atts">
    						<div class="product-atts-item">
    							<b class="meta-title">Categories:</b>
    							<ul class="meta-list">
    								<li><a href="#" class="meta-link">Milk & Cream</a></li>
    								<li><a href="#" class="meta-link">Fresh Meat</a></li>
    								<li><a href="#" class="meta-link">Fresh Fruit</a></li>
    							</ul>
    						</div>
    						<div class="product-atts-item">
    							<b class="meta-title">Tags:</b>
    							<ul class="meta-list">
    								<li><a href="#" class="meta-link">food theme</a></li>
    								<li><a href="#" class="meta-link">organic food</a></li>
    								<li><a href="#" class="meta-link">organic theme</a></li>
    							</ul>
    						</div>
    						<div class="product-atts-item">
    							<b class="meta-title">Brand:</b>
    							<ul class="meta-list">
    								<li><a href="#" class="meta-link">Fresh Fruit</a></li>
    							</ul>
    						</div>
    					</div>
    					<span class="sku">SKU: N/A</span>
    					<div class="biolife-social inline add-title">
    						<span class="fr-title">Share:</span>
    						<ul class="socials">
    							<li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    							<li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    							<li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    							<li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    							<li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="{{ asset('assets2/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets2/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets2/js/biolife.framework.js') }}"></script>
    <script src="{{ asset('assets2/js/functions.js') }}"></script>
    @yield('scripts')
</body>

</html>