
{{-- @extends('layouts.app') --}}
@extends('layouts.header')
@section('content')
<div class="container" style="margin-top: 350px;">
    <!--Form Sign In-->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mx-auto">
        <div class="signin-container">
           <form method="POST" action="{{ route('register') }}">
            @csrf
            <p class="form-row">
                <label for="fid-name">{{ __('Name') }}<span class="requite">*</span></label>
                <input type="text" id="fid-name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p class="form-row">
                <label for="fid-name">{{ __('E-Mail Address') }}<span class="requite">*</span></label>
                <input type="email" id="fid-name" name="email" value="{{ old('email') }}" class="txt-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p class="form-row">
                <label for="fid-pass">{{ __('Password') }}<span class="requite">*</span></label>
                <input type="password" id="fid-pass" name="password" class="txt-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p class="form-row">
                <label for="fid-pass">{{ __('Confirm Password') }}<span class="requite">*</span></label>
                <input type="password" id="fid-pass"  value="" class="txt-input" name="password_confirmation" required autocomplete="new-password">
            </p>
            <p class="form-row wrap-btn">
                <button class="btn btn-submit btn-bold" type="submit">{{ __('Register') }}</button>
                <a href="#" class="link-to-help">Forgot your password</a>
            </p>
        </form>
    </div>
</div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <h4 class="box-title">Already Joined?</h4>
                                <p class="sub-title">Login to Your account with us and you’ll be able to:</p>
                                <ul class="lis">
                                    <li>Check out faster</li>
                                    <li>Save multiple shipping anddesses</li>
                                    <li>Access your order history</li>
                                    <li>Track new orders</li>
                                    <li>Save items to your Wishlist</li>
                                </ul>
                                <a href="{{ url('/login') }}" class="btn btn-bold">Login</a>
                            </div>
                        </div>
                    </div>
</div>
@endsection


