@extends('layouts.manage')

@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="card">
        <div class="card-header">{{ __('Students') }}</div>
        <div class="card-body">
            <ul>
                @foreach ($users as $user)
                    <li>{{$user->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
