
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
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
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
                                                    <h4 class="menu-title">{{ $health->title }}</h4>
                                                    <ul class="menu">
                                                        @foreach($health->dietplans as $diet_plan)
                                                        <li><a href="{{ url('/plan') }}">{{ $diet_plan->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                {{-- @dd($health->dietplans) --}}
                                            </div>
                                            @endforeach

                                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                                    <div class="biolife-cart-info">
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
                                        <div class="wishlist-block hidden-sm hidden-xs">
                                            <a href="#" class="link-to">
                                                <span class="icon-qty-combine">
                                                    <i class="icon-heart-bold biolife-icon"></i>
                                                    <span class="qty">4</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="minicart-block">
                                            <div class="minicart-contain">
                                                <a href="javascript:void(0)" class="link-to">
                                                    <span class="icon-qty-combine">
                                                        <i class="icon-cart-mini biolife-icon"></i>
                                                        <span class="qty">8</span>
                                                    </span>
                                                    <a href="{{ url('/cart') }}"><span class="title">My Cart -</span></a>
                                                    <span class="sub-total">$0.00</span>
                                                </a>

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
                    <div class="header-bottom hidden-sm hidden-xs">
                        <div class="container">

                        </div>
                    </div>
                </header>

                <!--Hero Section-->
                <div class="hero-section hero-background">
                    <h1 class="page-title">Organic Fruits</h1>
                </div>

                <!--Navigation section-->
                <div class="container">
                    <nav class="biolife-nav">
                        <ul>
                            <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                            <li class="nav-item"><span class="current-page">ShoppingCart</span></li>
                        </ul>
                    </nav>
                </div>

                <div class="page-contain checkout">

                    <!-- Main content -->
                    <div id="main-content" class="main-content">
                        <div class="container sm-margin-top-37px">
                            <div class="row">

                                <!--checkout progress box-->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contact-form-container sm-margin-top-112px">
                                        <form action="" name="frm-contact" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="fname">Full name</label>
                                                <input type="text" name="fname" placeholder="" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fname">Email</label>
                                                <input type="email" name="email" placeholder="you@example.com" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fname">Address</label>
                                                <input type="address" name="text" placeholder="1234 Main St" class="form-control" required="">
                                            </div> 
                                            <div class="form-group">
                                                <label for="fname">Country</label>
                                                <select class="form-control" name="country" required="">
                                                    <option value="">Select Country</option>
                                                    <option value="pakistan">Pakistan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="fname">State</label>
                                                <select class="form-control" name="state" required="">
                                                    <option value="">Punjab</option>
                                                    <option value="">Sindh</option>
                                                    <option value="">KPK</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="fname">Payment</label><br>
                                                <input type="radio" name="payment"><label style="padding-left: 20px;">Credit card</label><br>
                                                <input type="radio" name="payment"><label style="padding-left: 20px;">Paypal</label>
                                            </div>
                                              <div class="form-group">
                                                <label for="payment">Card Number</label>
                                                <input type="number" name="card_number" class="form-control" style="width: 100%;">
                                            </div>
                                             <div class="form-group" style="display: flex; justify-content: space-between;">
                                               <div class="form-group">
                                                   <label for="card">Expiration Date</label>
                                                   <input type="number" name="expiration_card" class="form-control">
                                               </div>
                                               <div class="form-group">
                                                   <label for="card">Expiration Year</label>
                                                   <input type="number" name="expiration_card" class="form-control">
                                               </div>
                                               <div class="form-group">
                                                   <label for="card">CVV</label>
                                                   <input type="number" name="expiration_card" class="form-control">
                                               </div>
                                            </div>


                                            <div class="form-group">
                                                <button class="btn btn-danger form-control" type="submit">Order Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                {{-- @dd($cart_items->dietplans) --}}
                                <!--Order Summary-->
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                                    <div class="order-summary sm-margin-bottom-80px">
                                        <div class="title-block">
                                            <h3 class="title">Order Summary</h3>
                                            <a href="#" class="link-forward">Edit cart</a>
                                        </div>
                                        <div class="cart-list-box short-type">
                                            <span class="number">2 items</span>
                                            <ul class="cart-list">
                                                @foreach($cart_items as $cart_item)
                                                @php
                                                $total[] = $cart_item->dietplans->price * $cart_item->quantity
                                                @endphp
                                                <li class="cart-elem">
                                                    <div class="cart-item">
                                                        <div class="product-thumb">
                                                            <a class="prd-thumb" href="#">
                                                                <figure><img src="{{ url('/storage/app/public/'.$cart_item->dietplans->image) }}" width="113" height="113" alt="shop-cart" ></figure>
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <span class="txt-quantity">{{ $cart_item->quantity }}X</span>
                                                            <a href="#" class="pr-name">{{ $cart_item->dietplans->title }}</a>
                                                        </div>
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $cart_item->dietplans->price * $cart_item->quantity }}</span></ins>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <ul class="subtotal">
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Subtotal</b>
                                                        <span class="stt-price">${{ array_sum($total) }}</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Shipping</b>
                                                        <span class="stt-price">$0.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">Tax</b>
                                                        <span class="stt-price">$0.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-line">
                                                        <a href="#" class="link-forward">Promo/Gift Certificate</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-line">
                                                        <b class="stt-name">total:</b>
                                                        <span class="stt-price">${{ array_sum($total) }} </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <footer id="footer" class="footer layout-03">
                    <div class="footer-content background-footer-03">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-9">
                                    <section class="footer-item">
                                        <a href="#" class="logo footer-logo"><img src="assets/images/organic-3.png" alt="biolife logo" width="135" height="34"></a>
                                        <div class="footer-phone-info">
                                            <i class="biolife-icon icon-head-phone"></i>
                                            <p class="r-info">
                                                <span>Got Questions ?</span>
                                                <span>(700)  9001-1909  (900) 689 -66</span>
                                            </p>
                                        </div>
                                        <div class="newsletter-block layout-01">
                                            <h4 class="title">Newsletter Signup</h4>
                                            <div class="form-content">
                                                <form action="#" name="new-letter-foter">
                                                    <input type="email" class="input-text email" value="" placeholder="Your email here...">
                                                    <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                                    <section class="footer-item">
                                        <h3 class="section-title">Useful Links</h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                                <div class="wrap-custom-menu vertical-menu-2">
                                                    <ul class="menu">
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="#">About Our Shop</a></li>
                                                        <li><a href="#">Secure Shopping</a></li>
                                                        <li><a href="#">Delivery infomation</a></li>
                                                        <li><a href="#">Privacy Policy</a></li>
                                                        <li><a href="#">Our Sitemap</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                                <div class="wrap-custom-menu vertical-menu-2">
                                                    <ul class="menu">
                                                        <li><a href="#">Who We Are</a></li>
                                                        <li><a href="#">Our Services</a></li>
                                                        <li><a href="#">Projects</a></li>
                                                        <li><a href="#">Contacts Us</a></li>
                                                        <li><a href="#">Innovation</a></li>
                                                        <li><a href="#">Testimonials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                                    <section class="footer-item">
                                        <h3 class="section-title">Transport Offices</h3>
                                        <div class="contact-info-block footer-layout xs-padding-top-10px">
                                            <ul class="contact-lines">
                                                <li>
                                                    <p class="info-item">
                                                        <i class="biolife-icon icon-location"></i>
                                                        <b class="desc">7563 St. Vicent Place, Glasgow, Greater Newyork NH7689, UK </b>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="info-item">
                                                        <i class="biolife-icon icon-phone"></i>
                                                        <b class="desc">Phone: (+067) 234 789  (+068) 222 888</b>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="info-item">
                                                        <i class="biolife-icon icon-letter"></i>
                                                        <b class="desc">Email:  contact@company.com</b>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="info-item">
                                                        <i class="biolife-icon icon-clock"></i>
                                                        <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="biolife-social inline">
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
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="separator sm-margin-top-70px xs-margin-top-40px"></div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                 <div class="copy-right-text"><p><a href="templateshub.net">Templates Hub</a></p></div>
                             </div>
                             <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="payment-methods">
                                    <ul>
                                        <li><a href="#" class="payment-link"><img src="assets/images/card1.jpg" width="51" height="36" alt=""></a></li>
                                        <li><a href="#" class="payment-link"><img src="assets/images/card2.jpg" width="51" height="36" alt=""></a></li>
                                        <li><a href="#" class="payment-link"><img src="assets/images/card3.jpg" width="51" height="36" alt=""></a></li>
                                        <li><a href="#" class="payment-link"><img src="assets/images/card4.jpg" width="51" height="36" alt=""></a></li>
                                        <li><a href="#" class="payment-link"><img src="assets/images/card5.jpg" width="51" height="36" alt=""></a></li>
                                    </ul>
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

            <div class="mobile-block-global">
                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Global</span>
                    <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
                </div>
                <div class="block-global-contain">
                    <div class="glb-item my-account">
                        <b class="title">My Account</b>
                        <ul class="list">
                            <li class="list-item"><a href="#">Login/register</a></li>
                            <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                            <li class="list-item"><a href="#">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="glb-item currency">
                        <b class="title">Currency</b>
                        <ul class="list">
                            <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                            <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                            <li class="list-item"><a href="#">£ GBP (Pound)</a></li>
                            <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                        </ul>
                    </div>
                    <div class="glb-item languages">
                        <b class="title">Language</b>
                        <ul class="list inline">
                            <li class="list-item"><a href="#"><img src="assets/images/languages/us.jpg" alt="flag" width="24" height="18"></a></li>
                            <li class="list-item"><a href="#"><img src="assets/images/languages/fr.jpg" alt="flag" width="24" height="18"></a></li>
                            <li class="list-item"><a href="#"><img src="assets/images/languages/ger.jpg" alt="flag" width="24" height="18"></a></li>
                            <li class="list-item"><a href="#"><img src="assets/images/languages/jap.jpg" alt="flag" width="24" height="18"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Scroll Top Button -->
            <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

            <script src="assets/js/jquery-3.4.1.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.countdown.min.js"></script>
            <script src="assets/js/jquery.nice-select.min.js"></script>
            <script src="assets/js/jquery.nicescroll.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/biolife.framework.js"></script>
            <script src="assets/js/functions.js"></script>
        </body>

        </html>