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
                <li class="nav-item"><span class="current-page">ShoppingCart</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr style="border: none;">
                                            <th style="border: none; text-align: left;" class="product-name">Product </th>
                                            <th style="border: none;" class="product-price">Price</th>
                                            <th style="border: none;" class="product-quantity">Quantity</th>
                                            <th style="border: none;" class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @php
                                        $total = [];
                                        @endphp
                                        @foreach($cart_items as $cart_item)
                                        @php
                                        $total[]= $cart_item->dietplans['price'] * $cart_item->quantity;
                                        // print_r($total);
                                        @endphp
                                        <tr class="cart_item" style="border: none;">
                                            <td class="product-thumbnail" data-title="Product Name">
                                                <a class="prd-thumb" href="#">
                                                    <figure><img width="113" height="113" src="{{ url('/storage/app/public/'.$cart_item->dietplans->image) }}" alt="shipping cart"></figure>
                                                </a>
                                                <a class="prd-name" href="#">{{ $cart_item->dietplans->title }}</a>
                                                <div class="action">
                                                  {{--   <a href="{{ url('/edit_plan/'.$cart_item->id) }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a> --}}
                                                    <a href="{{ url('/delete_plan/'.$cart_item->id) }}" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $cart_item->dietplans->price }}</span></ins>
                                                    
                                                </div>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                               
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><span class="currencySymbol"></span>{{ $cart_item->quantity }}</span></ins>
                                                    </div>
                                               
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $cart_item->dietplans->price * $cart_item->quantity }}</span></ins>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="4">
                                                <a class="btn back-to-shop" href="{{ url('/plans') }}">Back to Shop</a>
                                               {{--  <button class="btn btn-update" type="submit" disabled>update</button> --}}
                                                <a href="{{ url('/delete_cart') }}" class="btn btn-clear" type="reset">clear all</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    <b class="stt-name">Subtotal <span class="sub"></span></b>
                                    <span class="stt-price">${{ array_sum($total) }}</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">$0.00</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>
                                    <p class="desc">Based on 56789</p>
                                </div>
                                <div class="btn-checkout">
                                    <a href="{{ url('/checkout') }}" class="btn checkout">Check out</a>
                                </div>
                                <div class="biolife-progress-bar">
                           
                                </div>
                                <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Related Product-->
                

            </div>
        </div>
    </div>

    <!-- FOOTER -->
@endsection