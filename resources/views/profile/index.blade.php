@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <caption>{{ __('Your information') }}</caption>
        <thead class="thead-light">
            <tr>
                <th scope="col" width="30%">{{ __('Information') }}</th>
                <th scope="col" width="70%">{{ __('Data') }}</th>
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
            <tr>
                <th scope="row">{{ __('Roles') }}</th>
                <td>
                    @foreach($user->employees as $employee)
                        {{ $employee->role->name }}<br>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
