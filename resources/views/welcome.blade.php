@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4 text-success text-center">Welcome to MIU Pharmacy Club!</h1>
                @guest
                    <h3 class="text-center"><a class="btn btn-success btn-lg" href="{{route('login')}}">Login</a> <a class="btn btn-info btn-lg" href="{{route('register')}}">Register</a></h3>
                @else
                    <h3 class="text-center"><a class="btn btn-lg btn-info" href="{{route('home')}}"><i class="fas fa-users"></i> {{ __('All Members') }}</a> </h3>

                    <h3>{{count($users)}} Registered members from {{$batches}} batches</h3>
                    <div class="progress" style="background-color: #fff;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{(count($users)/$studentid)*100}}%" aria-valuenow="{{count($users)}}" aria-valuemin="0" aria-valuemax="{{$studentid}}"></div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection