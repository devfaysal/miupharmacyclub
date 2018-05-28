@extends('layouts.manage')

@section('content')
    <a class="btn btn-primary" href="{{route('studentId.create')}}">Bulk Add Student ID</a>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="card">
        <div class="card-header">{{ __('Student Ids') }}</div>
        <div class="card-body">
            <ul>
                @foreach ($ids as $id)
                    <li>{{$id->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
