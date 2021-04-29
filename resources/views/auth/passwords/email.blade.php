@extends('layouts.auth')

@section('content')
    <!-- title-->
    <h2 class="mt-1">{{ __('Reset Password') }}</h2>
    <p class="text-muted mb-2">Enter your Email to reset for password Reset.</p>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <!-- form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-0 text-center">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="mdi mdi-email"></i> {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
    <!-- end form-->
@endsection
