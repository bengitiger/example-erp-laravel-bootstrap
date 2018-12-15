<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title-app'){{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />
</head>
<body>
    <nav class="navbar navbar-light bg-white border-bottom shadow-sm">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mr-auto">{{ config('app.name') }}</a>
            @guest
                @if(Request::is('register'))
                    <a href="{{ route('login') }}" class="btn btn-outline-primary ml-auto"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                @else
                    <a href="{{ route('register') }}" class="btn btn-outline-primary ml-auto"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a>
                @endif
            @elseif(Request::is('profile'))
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</button>
                </form>
            @else
                <a href="{{ route('profile.index') }}" class="btn btn-primary ml-auto"><i class="fas fa-user"></i> {{ __('My Profile') }}</a>
            @endguest
        </div>
    </nav>
    <main class="container my-3">
        @if(isset($errors))
            @if($errors->any())
                <ul class="list-group mb-2">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        @endif
        @yield('content')
    </main>
</body>
</html>