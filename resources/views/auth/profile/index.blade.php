@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <caption>{{ __('Your information') }}</caption>
        <thead class="thead-light">
            <tr>
                <th scope="col">{{ __('Information') }}</th>
                <th scope="col">{{ __('Data') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ __('Name') }}</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th scope="row">{{ __('E-mail') }}</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th scope="row">{{ __('E-mail Verification') }}</th>
                @if(is_null($user->email_verified_at))
                    <td class="text-danger">{{ __('Not verified') }}</td>
                @else
                    <td class="text-success">{{ __('Verified') }}</td>
                @endif
            </tr>
        </tbody>
    </table>
</div>
@endsection