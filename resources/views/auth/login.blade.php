{{-- @extends('layouts.app') --}}
@extends('layouts.header')
@section('content')
<div class="container" style="margin-top: 250px;">
    <!--Form Sign In-->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="signin-container">
           <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="form-row">
                <label for="fid-name">Email Address:<span class="requite">*</span></label>
                <input type="email" id="fid-name" name="email" value="{{ old('email') }}" class="txt-input" required autocomplete="email" autofocus >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p class="form-row">
                <label for="fid-pass">Password:<span class="requite">*</span></label>
                <input type="password" id="fid-pass" name="password" value="" class="txt-input @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p class="form-row wrap-btn">
                <button class="btn btn-submit btn-bold" type="submit">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                {{-- {{ route('password.request') }} --}}
                <a class="btn btn-link" href="#">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </p>
        </form>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="register-in-container">
        <div class="intro">
            <h4 class="box-title">New Customer?</h4>
            <p class="sub-title">Create an account with us and you’ll be able to:</p>
            <ul class="lis">
                <li>Check out faster</li>
                <li>Save multiple shipping anddesses</li>
                <li>Access your order history</li>
                <li>Track new orders</li>
                <li>Save items to your Wishlist</li>
            </ul>
            <a href="{{ url('/register') }}" class="btn btn-bold">Create an account</a>
        </div>
    </div>
</div>
</div>
@endsection
