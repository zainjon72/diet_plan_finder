
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biolife - Organic Food</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
		/* component */
		.twPc-div {
			background: #fff none repeat scroll 0 0;
			border: 1px solid #e1e8ed;
			border-radius: 6px;
			height: 200px;
			max-width: 100%; // orginal twitter width: 290px;
		}
		.twPc-bg {
			background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
			background-position: 0 50%;
			background-size: 100% auto;
			border-bottom: 1px solid #e1e8ed;
			border-radius: 4px 4px 0 0;
			height: 95px;
			width: 100%;
		}
		.twPc-block {
			display: block !important;
		}
		.twPc-button {
			margin: -35px -10px 0;
			text-align: right;
			width: 100%;
		}
		.twPc-avatarLink {
			background-color: #fff;
			border-radius: 6px;
			display: inline-block !important;
			float: left;
			margin: -30px 5px 0 8px;
			max-width: 100%;
			padding: 1px;
			vertical-align: bottom;
		}
		.twPc-avatarImg {
			border: 2px solid #fff;
			border-radius: 7px;
			box-sizing: border-box;
			color: #fff;
			height: 72px;
			width: 72px;
		}
		.twPc-divUser {
			margin: 5px 0 0;
		}
		.twPc-divName {
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}
		.twPc-divName a {
			color: inherit !important;
		}
		.twPc-divStats {
			margin-left: 11px;
			padding: 4px 0;
		}
		.twPc-Arrange {
			box-sizing: border-box;
			display: table;
			margin: 0;
			min-width: 100%;
			padding: 0;
			table-layout: auto;
		}
		ul.twPc-Arrange {
			list-style: outside none none;
			margin: 0;
			padding: 0;
		}
		.twPc-ArrangeSizeFit {
			display: table-cell;
			padding: 0;
			vertical-align: top;
		}
		.twPc-ArrangeSizeFit a:hover {
			text-decoration: none;
		}
		.twPc-StatValue {
			display: block;
			font-size: 18px;
			font-weight: 500;
			transition: color 0.15s ease-in-out 0s;
		}
		.twPc-StatLabel {
			color: #8899a6;
			font-size: 10px;
			letter-spacing: 0.02em;
			overflow: hidden;
			text-transform: uppercase;
			transition: color 0.15s ease-in-out 0s;
		}
		.none{
			display: none;
		}
		.oops{
			text-align: center;
			font-size: 143px;
			color: green;
			font-weight: 900;
		}
		.no_plan{
			text-align: center;
			font-size: 50px;
			font-weight: 700;
		}
		.view_plan{
			margin-bottom: 150px;
			text-align: center;
			font-size: 40px;
			font-weight: 700;
		}
		.checkplans{
			border-radius: 20px;
			padding: 10px;
			font-size: 16px;
		}
		.far{
			color: #ffdd5a;
		}
		.fas{
			color: #ffdd5a;
		}
		.star{
			font-size: 30px !important;
		}
		.star-ratingg {
			/*border:solid 1px #ccc;*/
			display:flex;
			flex-direction: row-reverse;
			font-size:2em;
			justify-content:space-around;
			padding:0.2em;
			text-align:center;
			width:5em;
		}

		.star-ratingg input {
			display:none;
		}

		.star-ratingg label {
			color:#ccc;
			cursor:pointer;
		}

		.star-ratingg :checked ~ label {
			color:#f90;
		}

		.star-ratingg label:hover,
		.star-ratingg label:hover ~ label {
			color:#fc0;
		}

		/* explanation */

		article {
			background-color:#ffe;
			box-shadow:0 0 1em 1px rgba(0,0,0,.25);
			color:#006;
			font-family:cursive;
			font-style:italic;
			margin:4em;
			max-width:30em;
			padding:2em;
		}
		.badge {
			padding-left: 9px;
			padding-right: 9px;
			-webkit-border-radius: 9px;
			-moz-border-radius: 9px;
			border-radius: 9px;
		}
		.view a{
			margin-right: 40px;
			padding: 9px 70px !important;

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
		@import url('https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i');
		body{
			font-family: 'Muli', sans-serif;
			/*background:#ddd;*/
		}
		.shell{
			/*padding:80px 0;*/
		}
		.wsk-cp-product{
			background:#fff;
			padding:15px;
			border-radius:6px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			position:relative;
			margin:20px auto;
		}
		.wsk-cp-img{
			position:absolute;
			top:5px;
			left:50%;
			transform:translate(-50%);
			-webkit-transform:translate(-50%);
			-ms-transform:translate(-50%);
			-moz-transform:translate(-50%);
			-o-transform:translate(-50%);
			-khtml-transform:translate(-50%);
			width: 100%;
			padding: 15px;
			transition: all 0.2s ease-in-out;
		}
		.wsk-cp-img img{
			width:100%;
			transition: all 0.2s ease-in-out;
			border-radius:6px;
		}
		.wsk-cp-product:hover .wsk-cp-img{
			top:-40px;
		}
		.wsk-cp-product:hover .wsk-cp-img img{
			box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
		}
		.wsk-cp-text{
			padding-top:80%;
		}
		.wsk-cp-text .category{
			text-align:center;
			font-size:12px;
			font-weight:bold;
			padding:5px;
			margin-bottom:45px;
			position:relative;
			transition: all 0.2s ease-in-out;
		}
		.wsk-cp-text .category > *{
			position:absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);
			-webkit-transform: translate(-50%,-50%);
			-moz-transform: translate(-50%,-50%);
			-ms-transform: translate(-50%,-50%);
			-o-transform: translate(-50%,-50%);
			-khtml-transform: translate(-50%,-50%);

		}
		.wsk-cp-text .category > span{
			padding: 12px 30px;
			border: 1px solid #313131;
			background:#212121;
			color:#fff;
			box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
			border-radius:27px;
			transition: all 0.05s ease-in-out;

		}
		.wsk-cp-product:hover .wsk-cp-text .category > span{
			border-color:#ddd;
			box-shadow: none;
			padding: 11px 28px;
		}
		.wsk-cp-product:hover .wsk-cp-text .category{
			margin-top: 0px;
		}
		.wsk-cp-text .title-product{
			text-align:center;
		}
		.wsk-cp-text .title-product h3{
			font-size:20px;
			font-weight:bold;
			margin:15px auto;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			width:100%;
		}
		.wsk-cp-text .description-prod p{
			margin:0;
		}
		/* Truncate */
		.wsk-cp-text .description-prod {
			text-align:center;
			width: 100%;
			height:100px;
			overflow: hidden;
			display: -webkit-box;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
			margin-bottom:15px;
		}
		.card-footer{
			padding: 25px 0 5px;
			border-top: 1px solid #ddd;
			text-align: center;
		}
		.card-footer:after, .card-footer:before{
			content:'';
			display:table;
		}
		.card-footer:after{
			clear:both;
		}

		.card-footer .wcf-left{
			float:left;

		}

		.card-footer .wcf-right{
			/*	float:right;*/
		}

		.price{
			font-size:18px;
			font-weight:bold;
		}

		a.buy-btn{
			display:block;
			color:#212121;
			text-align:center;
			font-size: 18px;
			width:35px;
			height:35px;
			line-height:35px;
			border-radius:50%;
			border:1px solid #212121;
			transition: all 0.2s ease-in-out;
		}
		a.buy-btn:hover , a.buy-btn:active, a.buy-btn:focus{
			border-color: #FF9800;
			background: #FF9800;
			color: #fff;
			text-decoration:none;
		}
		.wsk-btn{
			display:inline-block;
			color:#212121;
			text-align:center;
			font-size: 18px;
			transition: all 0.2s ease-in-out;
			border-color: #FF9800;
			background: #FF9800;
			padding:12px 30px;
			border-radius:27px;
			margin: 0 5px;
		}
		.wsk-btn:hover, .wsk-btn:focus, .wsk-btn:active{
			text-decoration:none;
			color:#fff;
		}  
		.red{
			color:#F44336;
			font-size:22px;
			display:inline-block;
			margin: 0 5px;
		}
		@media screen and (max-width: 991px) {
			.wsk-cp-product{
				margin:40px auto;
			}
			.wsk-cp-product .wsk-cp-img{
				top:-40px;
			}
			.wsk-cp-product .wsk-cp-img img{
				box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
			}
			.wsk-cp-product .wsk-cp-text .category > span{
				border-color:#ddd;
				box-shadow: none;
				padding: 11px 28px;
			}
			.wsk-cp-product .wsk-cp-text .category{
				margin-top: 0px;
			}
			a.buy-btn{
				border-color: #FF9800;
				background: #FF9800;
				color: #fff;
			}
		}
		.p_card{
			margin-top: 100px;
		}
		@media only screen and (max-width: 1199px){

			.span-index
			{
				border:0px solid !important;
				width: auto !important;
			}


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
						<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
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
						<form action="{{ url('/plans') }}" class="form-search" name="desktop-seacrh" method="get">
							{{-- @csrf --}}
							<input type="text" name="search" class="input-text" value="" placeholder="Search here...">
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
			<div class="row" style="display: flex; justify-content: space-between;     margin: 0px -130px;">
				<div class="col-lg-6 col-md-6 hidden-sm hidden-xs md-possition-initial">
					<div class="primary-menu">
						<ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
							<li class="menu-item"><a href="{{ url('/home') }}">Home</a></li>
							<li class="menu-item menu-item-has-children has-megamenu">
								<a href="{{ url('/plans') }}" class="menu-name" data-title="Shop" >Plans</a>
								
							</li>
							<li class="menu-item"><a href="{{ url('/my-plans') }}">My Plans</a></li>
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
									<div class="span-index" style="display: inline-block;">
										{{-- <a href="{{ url('/cart') }}"> --}}
											<a style="" href="{{ url('/wishlist') }}" class="" tabindex="0">

												<i style="font-size: 22px; color: #05a503;vertical-align: middle;
												margin: 0px 22px 0px 5px;" class="fa fa-heart" aria-hidden="true">
											{{-- <span class="badge badge-light" style="margin-top: -20px; margin-left: -5px; font-size: 10px; width: 20px;">{{count($wishlist)}}</span> --}}
													
												</i>

											</a>
											{{-- </a> --}}
											<a href="{{ url('/cart') }}">
												<i class="icon-cart-mini biolife-icon" style="margin-right: 20px;"></i>
											</a>
											{{-- <span class="qty">8</span> --}}
											{{-- <span class="sub-total"></span> --}}
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
	@yield('style')
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

							<div class="biolife-social inline circle-hover">
								<ul class="socials">
									<li><a href="https://twitter.com" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="https://facebook.com" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://pinterest.com" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="https://youtube.com" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
									<li><a href="https://instagram.com" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
											<li><a href="{{ url('/login') }}">Sign In</a></li>
											<li><a href="{{ url('/cart') }}">View Cart</a></li>
											<li><a href="{{ url('/wishlist') }}">My Wishlist</a></li>
											{{-- <li><a href="#">Track My Order</a></li> --}}
											{{-- <li><a href="#">Help</a></li> --}}
											{{-- <li><a href="#">Our Blog</a></li> --}}
										</ul>
									</div>
								</section>
							</div>
							<div class="contact-info-block footer-layout simple-info">
								<h4 class="title">Contact info</h4>
								<div class="info-item">
									<img src="{{ asset('assets2/images/location-icon.png') }}" width="22" height="26" alt="" class="icon">
									<p class="desc">7563 St. Vicent Place, Glasgow, Greater Newyork NH7689, UK </p>
								</div>
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
				<a class="link-to-cart" href="{{ url('/cart') }}">
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