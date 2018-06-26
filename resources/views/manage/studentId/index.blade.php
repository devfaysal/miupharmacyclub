@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('student-id.create')}}">Bulk Add Student ID</a>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Student Ids') }}</div>
                    <div class="card-body">
                        <ul>
                            @foreach ($ids as $id)
                                <li>{{$id->number}} <a href="{{route('student-id.edit', $id->id)}}">Edit</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
