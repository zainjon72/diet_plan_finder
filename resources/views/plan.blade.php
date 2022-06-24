@extends('layouts.header')
{{-- @dd($order[0]) --}}
@section('style')
<style>

</style>
@endsection
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
            <li class="nav-item"><a href="#" class="permal-link">Diet Plans</a></li>
            <li class="nav-item"><span class="current-page">{{ $plan['title'] }}</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain single-product mt-5" style="margin-top: 100px;">
    <div class="container">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!-- summary info -->
            {{-- @dd($plan) --}}
            {{-- @foreach($plan as $plans) --}}
            <div class="sumary-product single-layout mt-5">
                <div class="media">
                    <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                        <li><img src="{{ url('/storage/app/public/'.$plan['image']) }}" alt="" width="500" height="500"></li>
                    </ul>
                    <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>

                    </ul>
                </div>
                <div class="product-attribute">
                    <h3 class="title">{{ $plan['title'] }}</h3>
                    <div class="rating">
                        <div class="rating-info">
                            @if(count($feedbacks) == 0)
                            @php
                            $average = 0;
                            @endphp
                            @else
                            @php
                            $rating = [];
                            @endphp
                            @foreach($feedbacks as $feedback)
                            @php
                            $rating[] = $feedback['rating'];
                            @endphp
                            @endforeach
                            @php
                                // $a = array_filter($a);
                            $a = array_sum($rating);
                                // echo $a;
                            $average = $a/count($feedbacks);
                            $average = round($average, 1)
                                // echo $average;
                            @endphp
                            @endif

                            <div class="rating">
                                @if($average == 5)
                                <div class="rating"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                @endif
                                @if($average < 5 && $average >3.9)
                                <div class="rating"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                @endif
                                @if($average < 4 && $average >2.9)
                                <div class="rating"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                @endif
                                @if($average < 3 && $average >1.9)
                                <div class="rating"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                @endif
                                @if($average < 2 && $average >0.9)
                                <div class="rating"> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                @endif
                                <span class="review-count">(0{{ count($feedbacks) }} Review)</span> 
                            </div>


                        </div>
                        <span class="qa-text" style="margin: 0px !important">Q&A</span>
                        <a href="{{ url('/nutritionist/'.$plan['user']['id']) }}"><b class="category">By: {{ $plan['user']['name'] }}</b></a>
                    </div>
                    <span class="sku">Sku: #{{ $plan['id'] }}</span>
                    <p class="excerpt">{{ $plan['discription'] }}.</p>
                    <div class="price">
                        <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan['price'] }}</span></ins>

                    </div>

                </div>
                @if(in_array($plan->id, $order_items))
                {{-- <form method="post" action="{{ url('/cart') }}"> --}}
                    @csrf
                    
                    <div class="action-form">
                        {{-- <div class="quantity-box"> --}}
                            {{-- <span class="title"></span> --}}
                            <div class="qty-input">
                                {{-- <input type="number" name="quantity" value="1" data-max_value="20" data-min_value="1" data-step="1" class="form-control"> --}}
                                <input type="hidden" name="diet_plan_id" value="{{ $plan['id'] }}">

                            </div>
                        {{-- </div> --}}


                        <div class="" style="display: block;text-align: center;">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Already Purchased !</h4>
                                <p>You Can't Buy This Plan Because You Already Purchased It...</p>
                            </div>
                            <a href="{{ url('/my-plans') }}" class=" checkplans btn btn-success btn-block rounded add-to-cart-btn" type="submit">See Your Plans</a>
                            <p class="pull-row">
                                {{-- <a href="#" class="btn wishlist-btn">wishlist</a> --}}
                                {{-- <a href="#" class="btn compare-btn">compare</a> --}}
                            </p>
                        </div>

                    </form>
                    @else
                    <form method="post" action="{{ url('/cart') }}">
                        @csrf

                        <div class="action-form">
                            <div class="quantity-box">
                                <span class="title">Quantity:</span>
                                <div class="qty-input">
                                    <input type="number" name="quantity" value="1" data-max_value="20" data-min_value="1" data-step="1" class="form-control" style="width: 100%;">
                                    <input type="hidden" name="diet_plan_id" value="{{ $plan['id'] }}">

                                </div>
                            </div>


                            <div class="buttons">


                              <button class="btn  add-to-cart-btn" type="submit" style="width: 100%;">add to cart</button> 


                              <p class="pull-row">
                                <a href="#" class="btn wishlist-btn">wishlist</a>
                                <a href="#" class="btn compare-btn">compare</a>
                            </p>
                        </div>

                    </form>
                    @endif
                    <div class="social-media">
                        <ul class="social-list">
                            <li><a href="https://twitter.com/" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://facebook.com/" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://pinterest.com/" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="https://youtube.com/" class="social-link"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://instagram.com/" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            <div class="meals">
                <table class="border-0" style="border: 0px;">

                    {{-- @dd($order_items['dietplans']['id']) --}}
                    {{-- @dd($meal_one) --}}
                    {{-- @dd($plan->id) --}}
                    {{-- <h1 class="text-center">Diet Plan's Meal</h1> --}}
                    @foreach($meals as $meal)
                    @if(in_array($plan->id, $order_items))

                    <tr style="">
                        <td style="padding: 0px 20px;">Meal&nbsp;Id <br>{{$meal->id}}</td>
                        <td><img style="width: 300px; height: 150px;" src="{{ url('/storage/app/public/'.$meal->image) }}" alt=""></td>
                        <td  style="text-align: left; padding: 10px 40px;"><h2>{{ $meal->title }}</h2><br>{{ $meal->discription }}</td>
                        {{-- <td></td> --}}
                    </tr>
                    @else
                    {{-- <h1 style="text-align: center; margin-bottom: 50px; background: green; color: white">Buy Diet Plan to View All Meals</h1> --}}
              {{--   <div class="alert alert-danger" role="alert" style="width: 50%; text-align: center; margin: 0px auto; margin-bottom: 50px;">
                    <h4 class="alert-heading">Buy Now</h4>
                    <p>Buy Diet Plan to View All Meals</p>
                    <hr>
                    <p>You can See Only One Meal If You Don't Buy</p>

                </div> --}}
                <div>
                    <tr>
                      <td>Meal No. 1</td>
                      <td><img style="width: 200px;" src="{{ url('/storage/app/public/'.$meal->image) }}" alt=""></td>
                      <td style="text-align: left;padding: 50px;"><h2 style="text-align: left;">{{ $meal->title }}</h2><br>{{ $meal->discription }}</td>
                      {{-- <td></td> --}}

                  </div>


                  @break
                  @endif
                  @endforeach

                  {{-- @dd($meal_one) --}}


                  {{-- @foreach($meal_one as $meal) --}}
                  {{-- @endforeach --}}

              </table>
              @if(!in_array($plan->id, $order_items))
              <img src="{{ url('/storage/app/public/all_images/blur.png') }}" alt="">
              <button onclick="alert('Buy plan to View All Meals')" class="btn btn-success" style="padding: 10px 30px; border-radius: 40px;margin-left: 900px;margin-top: -340px;"><i style="color: black;" class="fas fa-eye"></i> View Meals</button>
              @endif
          </div>

          <!-- Tab info -->
          <div class="product-tabs single-layout biolife-tab-contain">
            <div class="tab-head">
                <ul class="tabs">
                    <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                {{-- <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li> --}}
                <li class="tab-element" ><a href="#tab_4th" class="tab-link">Customer Reviews <sup>({{ count($feedbacks) }})</sup></a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="tab_1st" class="tab-contain desc-tab active">
                <p class="desc">{{ $plan['discription'] }}</p>
                <div class="desc-expand">

                </div>
            </div>
           {{--  <div id="tab_2nd" class="tab-contain addtional-info-tab">
                <table class="tbl_attributes">
                    <tbody>
                        <tr>
                            <th>Color</th>
                            <td><p>Black, Blue, Purple, Red, Yellow</p></td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td><p>S, M, L</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                <div class="accodition-tab biolife-accodition">
                    <ul class="tabs">
                        <li class="tab-item">
                            <span class="title btn-expand">How long will it take to receive my order?</span>
                            <div class="content">
                                <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                <div class="desc-expand">
                                    <span class="title">Shipping mode</span>
                                    <ul class="list">
                                        <li>Standard (in transit 3-5 business days)</li>
                                        <li>Priority (in transit 2-3 business days)</li>
                                        <li>Express (in transit 1-2 business days)</li>
                                        <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="tab-item">
                            <span class="title btn-expand">How is the shipping cost calculated?</span>
                            <div class="content">
                                <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                            </div>
                        </li>
                        <li class="tab-item">
                            <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                            <div class="content">
                                <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                            </div>
                        </li>
                        <li class="tab-item">
                            <span class="title btn-expand">Shipping Restrictions?</span>
                            <div class="content">
                                <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                            </div>
                        </li>
                        <li class="tab-item">
                            <span class="title btn-expand">Undeliverable Packages?</span>
                            <div class="content">
                                <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
            @if(in_array($plan->id, $order_items))

            <div id="tab_4th" class="tab-contain review-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <div class="rating-info">
                                @if(count($feedbacks) == 0)
                                @php
                                $average = 0;
                                @endphp
                                @else
                                @php
                                $rating = [];
                                @endphp
                                @foreach($feedbacks as $feedback)
                                @php
                                $rating[] = $feedback['rating'];
                                @endphp
                                @endforeach
                                @php
                                // $a = array_filter($a);
                                $a = array_sum($rating);
                                // echo $a;
                                $average = $a/count($feedbacks);
                                $average = round($average, 1)
                                // echo $average;
                                @endphp
                                @endif
                                <p class="index"><strong class="rating">{{ $average }}</strong>out of 5</p>
                                <div class="rating">
                                    @if($average == 5)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    @endif
                                    @if($average < 5 && $average >3.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 4 && $average >2.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 3 && $average >1.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 2 && $average >0.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                </div>
                                <p class="see-all">See all {{ count($feedbacks) }} reviews</p>

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                            <div class="review-form-wrapper">
                                <span class="title">Submit your review</span>
                                <form action="{{ url('/plan/'.$plan['id']) }}" name="frm-review" method="post">
                                    @csrf
                                    <div class="comment-form-rating">
                                        <label>1. Your rating of this products:</label>

                                        <div class="star-ratingg">
                                          <input type="radio" id="5-stars" name="rating" value="5" />
                                          <label for="5-stars" class="star">&#9733;</label>
                                          <input type="radio" id="4-stars" name="rating" value="4" />
                                          <label for="4-stars" class="star">&#9733;</label>
                                          <input type="radio" id="3-stars" name="rating" value="3" />
                                          <label for="3-stars" class="star">&#9733;</label>
                                          <input type="radio" id="2-stars" name="rating" value="2" />
                                          <label for="2-stars" class="star">&#9733;</label>
                                          <input type="radio" id="1-star" name="rating" value="1" />
                                          <label for="1-star" class="star">&#9733;</label>
                                      </div>
                                  </div>
                                  <p class="form-row">
                                    {{-- <input type="hidden" name="item_id" id="txt-comment" value="{{ $order[0] }}"> --}}
                                </p>
                                <p class="form-row">
                                    <input type="hidden" name="plan_id" id="txt-comment" value="{{ $plan['id'] }}">
                                </p>
                                <p class="form-row wide-half">
                                    <input type="text" name="name" value="" placeholder="Your name" required="">
                                </p>

                                <p class="form-row wide-half">
                                    <input type="email" name="email" value="" placeholder="Email address" required="">
                                </p>
                                <p class="form-row">
                                    <textarea name="comment" id="txt-comment"rows="10" placeholder="Write your review here..." required=""></textarea>
                                </p>

                                <p class="form-row">
                                    <button type="submit">submit review</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="comments">
                    <ol class="commentlist">
                        @foreach($feedbacks as $feedback)
                        <li class="review">
                            <div class="comment-container">
                                <div class="row">
                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                        <p class="comment-in"><span class="post-name">Diet Plan Feedback</span></p>

                                        @if($feedback['rating'] == 5)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 4)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 3)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 2)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 1)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        <p class="author">by: <b>{{ $feedback['name'] }}</b></p>
                                        <p class="comment-text">{{ $feedback['comment'] }}</p>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                    <div class="biolife-panigations-block version-2">

                    </div>
                </div>
            </div>
        </div>
        @else
        <div id="tab_4th" class="tab-contain review-tab">
            <div class="container">
                <div class="row" style="">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="rating-info" style="">
                            <div class="rating">
                                @if(count($feedbacks) == 0)
                                @php
                                $average = 0;
                                @endphp
                                @else
                                @php
                                $rating = [];
                                @endphp
                                @foreach($feedbacks as $feedback)
                                @php
                                $rating[] = $feedback['rating'];
                                @endphp
                                @endforeach
                                @php
                                // $a = array_filter($a);
                                $a = array_sum($rating);
                                // echo $a;
                                $average = $a/count($feedbacks);
                                // echo $average;
                                @endphp
                                @endif
                                <p class="index"><strong class="rating">{{ $average }}</strong>out of 5</p>
                                <div class="rating">
                                    @if($average == 5)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    @endif
                                    @if($average < 5 && $average >3.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 4 && $average >2.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 3 && $average >1.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                    @if($average < 2 && $average >0.9)
                                    <div class="rating">Rating: <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    @endif
                                </div>
                                <p class="see-all">See all {{ count($feedbacks) }} reviews</p>
                                
                                
                            </div>
                        </div>
                    </div>

                </div>
                <div id="comments">
                    <ol class="commentlist">
                        @foreach($feedbacks as $feedback)
                        <li class="review">
                            <div class="comment-container">
                                <div class="row">
                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                        <p class="comment-in"><span class="post-name">Diet Plan Feedback</span></p>

                                        @if($feedback['rating'] == 5)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 4)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 3)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 2)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        @if($feedback['rating'] == 1)
                                        <div class="rating">Rating: <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                        @endif
                                        <p class="author">by: <b>{{ $feedback['name'] }}</b></p>
                                        <p class="comment-text">{{ $feedback['comment'] }}</p>
                                    </div>

                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ol>

                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- related products -->
                {{-- <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>

                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-21.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div> --}}
                
            </div>
        </div>
    </div>

    @endsection