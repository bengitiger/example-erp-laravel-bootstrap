@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
    </div>
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
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
        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
    </div>
</form>
@endsection