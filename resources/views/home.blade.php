@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h1 class="text-center">MIU Pharmacy Club Members</h1>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div id="accordion">
                            @foreach($users as $user)
                                <div class="card">
                                    <div class="card-header" id="heading{{$user[0]->batch}}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link btn-lg btn-block" data-toggle="collapse" data-target="#collapse{{$user[0]->batch}}" aria-expanded="true" aria-controls="collapse{{$user[0]->batch}}">
                                                Batch: {{$user[0]->batch}}
                                            </button>
                                        </h5>
                                    </div>
                                
                                    <div id="collapse{{$user[0]->batch}}" class="collapse" aria-labelledby="heading{{$user[0]->batch}}" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Student ID</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($user as $u)
                                                        <tr>
                                                            <td>{{$u->name}}</td>
                                                            <td>{{$u->student_id}}</td>
                                                            <td><a href="{{route('profile.show', $u->student_id)}}">View Details</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection