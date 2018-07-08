@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Students') }}</div>
                    <div class="card-body">
                        <ol>
                            @foreach ($users as $user)
                                <li>{{$user->name}}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
