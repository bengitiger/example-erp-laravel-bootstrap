@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="E-Mail Address" required autofocus>
    </div>
    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
    </div>
</form>
@endsection
