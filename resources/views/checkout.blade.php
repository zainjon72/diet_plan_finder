@extends('layouts.app')
@section('content')
 <nav class="navbar navbar-expand  bg-light navbar-light sticky-top px-4 py-0" w-100>
                                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                                    </a>
                                    <a href="#" class="sidebar-toggler flex-shrink-0">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <form class="d-none d-md-flex ms-4">
                                        <input class="form-control border-0" type="search" placeholder="Search">
                                    </form>

                                    <div class="navbar-nav align-items-center ms-auto">
                                        <div class="nav-item dropdown">

                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="fa fa-envelope me-lg-2"></i>
                                                <span class="d-none d-lg-inline-flex">Message</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                                <a href="#" class="dropdown-item">
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                        <div class="ms-2">
                                                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                            <small>15 minutes ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                        <div class="ms-2">
                                                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                            <small>15 minutes ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="d-flex align-items-center">
                                                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                        <div class="ms-2">
                                                            <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                            <small>15 minutes ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item text-center">See all message</a>
                                            </div>
                                        </div>
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="fa fa-bell me-lg-2"></i>
                                                <span class="d-none d-lg-inline-flex">Notificatin</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                                <a href="#" class="dropdown-item">
                                                    <h6 class="fw-normal mb-0">Profile updated</h6>
                                                    <small>15 minutes ago</small>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <h6 class="fw-normal mb-0">New user added</h6>
                                                    <small>15 minutes ago</small>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <h6 class="fw-normal mb-0">Password changed</h6>
                                                    <small>15 minutes ago</small>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item text-center">See all notifications</a>
                                            </div>
                                        </div>
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                <span class="d-none d-lg-inline-flex">John Doe</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                                <a href="#" class="dropdown-item">My Profile</a>
                                                <a href="#" class="dropdown-item">Settings</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>
                                        </div>
                                    </div>
                                </div>

		
		<div class="wrapper">

			<div class="row">
				<form method="get">
					
					<div class="col-8 mx-auto col order">
						<h3 class="topborder"><span>Your Order</span></h3>
						<div class="row">
							<h4 class="inline">Product</h4>
							<h4 class="inline alignright">Total</h4>
						</div>
						<div>
							{{-- @dd($carts) --}}
							@foreach($carts as $cart)
							@php
							$total[] = $cart['quantity'] * $cart->dietplans->price;
							// echo array_sum($total);
							@endphp
							<p class="prod-description inline">{{ $cart->dietplans->title }}<div class="qty inline"><span class="smalltxt">x</span> {{ $cart['quantity'] }}</div>
							</p>
							@endforeach
							
						</div><h5 class="mt-1">Subtotal = ${{ array_sum($total) }}</h5>
						{{-- <div><h6>${{ array_sum($total) }}</h6></div> --}}
						<div><h5>Order Total = ${{ array_sum($total) }}</h5></div>

						<div>
							<h3 class="topborder"><span>Payment Method</span></h3>
							<input type="radio" value="banktransfer" name="payment" checked><p>Direct Bank Transfer</p>
							<p class="padleft">
								Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.
							</p>
						</div>

						
						<div>
							<input type="radio" value="paypal" name="payment"><p>Paypal</p>
							<fieldset class="paymenttypes">
								<legend><img src="images/pay-pal.jpg" alt="PayPal Logo" class="paypal"></legend>
								<img src="images/cards.jpg" alt="Visa, Mastercard, Maestro and Amex Credit Cards" class="cards">
							</fieldset>
							<a href="#" class="padleft">What is Paypal?</a>
						</div>
						<input type="submit" name="submit" value="Place Order" class="redbutton">
					</div>
				</form>
			</div>
		</div>
@endsection