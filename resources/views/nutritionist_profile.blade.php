@extends('layouts.header')
@section('content')

<div class="container" style="margin-top: 300px !important; margin: auto;">
<div class="row">
{{-- <h1>MY PROFILE</h1> --}}
{{-- <p>You can use with Twitter API, bot or manual.</p> --}}
<!-- code start -->
<div class="twPc-div">
    <a class="twPc-bg twPc-block"></a>

  <div>
    <div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
            {{-- <a href="https://twitter.com/zj_khan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true"></a> --}}
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Twitter Button -->   
    </div>

    <a title="Mert S. Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
      <img alt="Mert S. Kaplan" src="{{ url('/storage/app/public/'.$user['image']) }}" class="twPc-avatarImg">
    </a>

    <div class="twPc-divUser">
      <div class="twPc-divName">

        <a style="color: white !important" href="">{{ $user['name'] }}</a>
      </div><br>
      <span>
        <a style="margin: 0px 10px;" href=""><span>{{ $user['email'] }}</span></a>
      </span>
    </div>

    <div class="twPc-divStats">
      <ul class="twPc-Arrange">
        <li class="twPc-ArrangeSizeFit" style="display: flex;justify-content: flex-start;">
          <a href="#" title="9.840 Tweet">
            <span class="twPc-StatLabel twPc-block">Nutritionist's Plan</span>
            <span class="twPc-StatValue">{{ count($plans) }}</span>
          </a>
          
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="shell">
  <div class="container">
    <div class="row">
      {{-- <h1>My Plans</h1> --}}
    @foreach($plans as $plan)
      {{-- @foreach($plan['user'] as $nutr) --}}
      <div class="col-md-3 p_card" style="margin-bottom: 150px;">
        <li class="product-item" style="list-style: none;">
                  <div class="contain-product layout-default">
                    <div class="product-thumb">
                      <a href="#" class="link-to-product">
                        <img src="{{ url('/storage/app/public/'.$plan['image']) }}" alt="Vegetables" width="270" height="270" class="product-thumnail">
                      </a>
                      {{-- <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a> --}}
                    </div>
                    <div class="info">
                      {{-- <b class="categories">Vegetables</b> --}}
                      <h4 class="product-title"><a href="#" class="pr-name">{{ $plan['title'] }}</a></h4>
                      <div class="price ">
                        {{-- <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $plan-> }}</span></ins> --}}
                        {{-- <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del> --}}
                      </div>
                      <div class="slide-down-box">
                        <p class="message">{{ $plan['discription'] }}</p>
                        <div class="buttons">
                          <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                          <a href="{{ url('/plan/'.$plan['id']) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View</a>
                          {{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
      </div>
      {{-- @endforeach --}}
      @endforeach
    </div>
  </div>
</div>
{{-- <div class="form-group add-exp mt-s w-75 mx-auto" style="width: 70%; margin: 0px auto;">
  <h2>Add Experiences</h2>
  <div class="all-exps">
    <div class="new-exp">
      <label>Title:</label>
      <input type="text" name="exp[title][]" class="form-control cv_field" placeholder="Ex: Web Developer" value="Web Designer">
      <label>Company:</label>
      <input type="text" name="exp[company][]" class="form-control cv_field" placeholder="Ex: ProgressSoft" value="ProgressSoft">
      <label>Description (optional):</label>
      <textarea name="exp[description][]" class="form-control cv_field" placeholder="Enter your Description:">Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; user interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization.</textarea>
    </div>
  </div>
  <div class="add-blk btn btn-info" id="add-exp">
    <i class="fa fa-plus"></i>
    <span>Add another experience</span>
  </div>
</div> --}}
@endsection