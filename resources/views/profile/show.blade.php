@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3 card-box-shadow">
                <div class="card-header">
                    <h1>{{$user->name}}</h1>
                </div>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Name: </td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Batch: </td>
                                    <td>{{$user->batch}}</td>
                                </tr>
                                <tr>
                                    <td>ID: </td>
                                    <td>{{$user->student_id}}</td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Phone: </td>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Current Organization: </td>
                                    <td>{{$user->current_organization}}</td>
                                </tr>
                                <tr>
                                    <td>Designation: </td>
                                    <td>{{$user->designation}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <img style="max-width:300px;" class="img-thumbnail rounded-circle" src="{{ $user->image != '' ? asset('storage/'.$user->image) :  asset('images/placeholder.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
