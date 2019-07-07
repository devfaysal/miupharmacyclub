@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Students</h1>
            </div>
            <div class="justify-center px-4">
                @foreach ($users as $user)
                    <div class="pl-4 py-3 {{$loop->odd ? 'bg-white' : ''}}">{{$user->name}} <a class="miu-button-sm" href="{{route('student.show', $user->id)}}">View Details</a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
