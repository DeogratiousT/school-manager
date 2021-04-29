@extends('layouts.auth')

@section('content')
    <!-- title-->
    <h2 class="mt-0">{{ __('Reset Password') }}</h2>
    <p class="text-muted mb-2">Almost there, Fill the required fiels to complete password reset.</p>

    <!-- form -->
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

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
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group mb-0 text-center">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="mdi mdi-login"></i> {{ __('Reset Password') }}
            </button>
        </div>
    </form>
    <!-- end form-->
@endsection
