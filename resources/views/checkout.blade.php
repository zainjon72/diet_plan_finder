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
            <li class="nav-item"><span class="current-page">Checkout</span></li>
        </ul>
    </nav>
</div>
<div class="page-contain checkout">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container sm-margin-top-37px">
            <div class="row">
                <!--checkout progress box-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 info">
                    <div class="contact-form-container sm-margin-top-112px">
                        <form action="{{ url('checkout') }}" class="checkout_form" method="post">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="fname">Full name</label>
                                    <input type="text" name="name" placeholder="" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="fname">Email</label>
                                    <input type="email" name="email" placeholder="you@example.com" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="fname">Address</label>
                                    <input type="text" name="address" placeholder="1234 Main St" class="form-control" required="">
                                </div> 
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <select class="form-control" name="country" required="">
                                        <option value="">Select Country</option>
                                        <option value="pakistan">Pakistan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fname" style="padding: 0px;">State</label>
                                    <select class="form-control" name="state" required="">
                                        <option value="">Select State</option>
                                        <option value="punjab">Punjab</option>
                                        <option value="sindh">Sindh</option>
                                        <option value="kpk">KPK</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="checkout_btn btn btn-success form-control" type="submit">Continue to Checkout</button>
                                </div>
                                <div class="form-group">
                                    @foreach($cart_items as $cart_item)
                                    @php
// $total = [];
                                    $total[] = $cart_item->dietplans->price * $cart_item->quantity
                                    @endphp
                                    @endforeach
                                    @if(count($cart_items) > 0)
                                    <input type="hidden" name="total" value="{{ array_sum($total) }}">
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="payment">
                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                    id="payment-form">
                    @csrf

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> 
                            <input class='form-control' size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> 
                            <input autocomplete='off' class='form-control card-number' size='20'
                            type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> 
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4'
                            type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> 
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                            type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                            again.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now </button>
                        </div>
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
                    <a href="{{ url('/cart') }}" class="link-forward">Edit cart</a>
                </div>
                <div class="cart-list-box short-type">
                    <span class="number">

                        @if(count($cart_items) > 1)
                        @php
                        echo count($cart_items)." items";
                        @endphp
                        @endif
                        @if(count($cart_items) <= 1)
                        @php
                        echo count($cart_items)." item";
                        @endphp
                        @endif
                    </span>
                    <ul class="cart-list">
                        @foreach($cart_items as $cart_item)
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
                                @if(count($cart_items) > 0)
                                <span class="stt-price">${{ array_sum($total) }}</span>
                                @endif
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
                                @if(count($cart_items) > 0)
                                <span class="stt-price">${{ array_sum($total) }} </span>
                                @endif
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
@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $('.payment').hide();
    $(document).on('submit','.checkout_form', function(e){
        e.preventDefault();
        var action = $('.checkout_form').attr('action');
        var form_data = $('.checkout_form').serialize();
        $.ajax({
            url: '{{ url('checkout') }}',
            type: "post",
            data: form_data,
            headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
            success: function (response) {
                $('.info').remove();
                $('.payment').show();

            }
        });
    });
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
            'input[type=text]', 'input[type=file]',
            'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
@endsection