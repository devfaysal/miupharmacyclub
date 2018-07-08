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
                    <h3 class="text-center"><a class="btn btn-success btn-lg" href="{{route('home')}}">Members Home</a></h3>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection