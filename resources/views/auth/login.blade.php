@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row content" style="margin: 7%;
    background-color: #ffffff;
    padding: 4rem 1rem 4rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0,.05);
    opacity: 0.95;">
        <div class="col-md-6 mb-3">
            <img src="{{ asset('assets/logo.PNG') }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h3 class="login-text mb-3" style="font-style: normal;
            font-weight: 600 !important;">SIGN IN AND SHOP NOW!</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-dark" style="border-radius: 10px;">{{ __('Login') }}</button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
        <footer class="py-2 mt-2 bg-dark text-center">
            <p class=" text-center text-white"> Follow Us :</p>
            <div class="template-demo" style="align-center"> 
                <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-facebook btn-ro mr-2 "><i class="fa fa-facebook"></i></button> 
                <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-youtube btn-ro mr-2"><i class="fa fa-youtube"></i></button> 
                <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-twitter btn-ro mr-2"><i class="fa fa-twitter"></i></button> 
                <button type="button" style="color: #ffffff " class="bg-secondary btn btn-social-icon btn-instagram btn-ro mr-2"><i class="fa fa-instagram"></i></button> 
            </div>
            <br>
            <p class=" text-center text-white">Copyright &copy; cande 2020</p>
        </footer>
@endsection
