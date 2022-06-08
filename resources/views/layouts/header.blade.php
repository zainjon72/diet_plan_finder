
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
						<li><a href="login.html" class="login-link"><i class="biolife-icon icon-login"></i>My Account</a></li>
						<li>
							{{-- @guest --}}
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
						</li>
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
				</ul>
			</div>
		</div>
	</div>
	<div class="header-middle hidden-sm hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
					<a href="home-01.html" class="biolife-logo"><img src="{{ asset('assets2/images/logo-biolife-1.png') }}" alt="biolife logo" width="135" height="36"></a>
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
								<div class="wrap-megamenu lg-width-900 md-full-width">
									<div class="mega-content">
										{{-- foreach for plans --}}
										@foreach($health as $health)
										<div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
											<div class="wrap-custom-menu vertical-menu">
												<!-- <h4 class="menu-title">{{ $health->title }}</h4> -->
												<ul class="menu">
													@foreach($health->dietplans as $diet_plan)
													<li><a href="{{ url('/plan') }}">{{ $diet_plan->title }}</a></li>
													@endforeach
												</ul>
											</div>
										</div>
										@endforeach

									</div>
								</div>
							</li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>