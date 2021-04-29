@extends('layouts.auth')

@section('content')
    <!-- title-->
    <h2 class="mt-1">{{ __('Verify Your Email Address') }}</h2>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},

    <!-- form -->
    <form method="POST" action="{{ route('verification.resend') }}" class="mt-2">
        @csrf

        <div class="form-group mb-0 text-center">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('click here to request another') }}
            </button>
        </div>
    </form>
    <!-- end form-->
@endsection
