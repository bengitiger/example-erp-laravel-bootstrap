@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>
    </div>
    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
      <a class="btn btn-outline-primary" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    </div>
</form>
@endsection