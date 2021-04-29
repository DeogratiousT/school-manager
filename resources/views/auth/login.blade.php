@extends('layouts.auth')

@section('content')
    <!-- title-->
    <h2 class="mt-0">Log In</h2>
    <p class="text-muted mb-2">Enter your email address and password to access account.</p>

    <!-- form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="form-group mb-0 text-center">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="mdi mdi-login"></i> {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
    <!-- end form-->

    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ml-1"><b>Sign Up</b></a></p>
    </footer>
@endsection
