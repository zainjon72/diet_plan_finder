@extends('layouts.header')
@section('content')

<div class="container text-center" style="margin: 50px auto">
  <h1>Product card</h1>
  <span>Create With <i class="zmdi zmdi-favorite red"></i>  By: <strong>Deni Kurniawan</strong> From: <i><a href="http://blog.wingerdstok.com" class="wsk-btn">Wingerdstok</a></i></span>
</div>

@if(count($wishlist) < 1)
<h1 class="mt-5" style="margin-top: 300px; text-align: center; font-weight: 800; font-size: 50px; margin-bottom: 200px;">You Don't Have Wishlist plan Yet <br> <a href="{{ url('/plans') }}" style="text-align: center; font-size: 30px; font-weight: 800;">See Plans</a></h1> 
@else
{{-- <div class="shell"> --}}
  {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
      {{-- @dd() --}}
      <h1 style="text-align: center; margin-top: 150px; font-size: 30px; font-weight: 700;"><i style="color: green; background: white;" class="fas fa-heart"></i><br>My Wishlist</h1>
      <table class="border-0" style="width: 70%; margin: 50px auto;vertical-align: center;border: none;">
        <thead>
          <tr>
            {{-- <th style="border: none;">Image</th> --}}
            <th style="border: none; text-align: left;">Diet Plan</th>
            <th style="border: none;">Price</th>
            <th style="border: none;">Quantity</th>
            <th style="border: none;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($wishlist as $wish)
          @foreach($wish['plans'] as $plan)
          <tr>
            <td style=" text-align:left;border-top: 1px solid #e6e6e6 !important; border: none;"><img style="width: 100px; margin-right: 20px;" src="{{ url('/storage/app/public/'.$plan['image']) }}" alt="">
            {{ $plan['title'] }}</td>
            <td style="border-top: 1px solid #e6e6e6 !important; border: none;">${{ $plan['price'] }}</td>
            <form action="{{ url('/cart') }}" method="post">
              @csrf
              <td class="form-group" style="width: 150px; border-top: 1px solid #e6e6e6 !important; border: none;">
                <input name="quantity" type="number" value="1" class="form-control" style="width: 50%; margin: auto;">
              </td>
              <td style="border-top: 1px solid #e6e6e6 !important; border: none;">
                <input name="diet_plan_id" type="hidden" value="{{ $plan['id'] }}">
                <span style="display: flex;justify-content: space-around;">
                  <button type="submit" value="" class="form-control btn btn-success" style="width: 30%; margin: auto;padding: 0px 30px;height: 50px;border-radius: 40px;">Add to Cart</button>
                  <a href="{{ url('/delete_wishlist/'.$plan['id'])}}" type="submit" value="" class="form-control btn btn-danger" style="width: 30%; margin: auto;padding: 15px 15px;height: 50px;border-radius: 40px;">Delete from Wishlist</a>
                </span>

              </td>
            </form>
          </tr>
          @endforeach
          @endforeach
        </tbody>
      </table>
      @endif

    {{-- </div> --}}
  {{-- </div> --}}
{{-- </div> --}}
@endsection

