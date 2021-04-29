@extends('layouts.auth')

@section('content')
    <!-- title-->
    <h2 class="mt-1">Sign Up</h2>
    <p class="text-muted mb-2">Don't have an account? Create your account, it takes less than a minute.</p>

    <!-- form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group mb-0 text-center">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="mdi mdi-login"></i> {{ __('Register') }}
            </button>
        </div>
    </form>
    <!-- end form-->

    <!-- Footer-->
    <footer class="footer footer-alt">
        <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted ml-1"><b>Log In</b></a></p>
    </footer>
@endsection                   
