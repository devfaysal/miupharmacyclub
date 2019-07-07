@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="w-full">
            <h1 class="text-gray-800 text-2xl text-center py-4">Members of {{$batch}} Batch</h1>
            <div class="w-full md:max-w-2xl mx-auto shadow-md mb-6">
                @foreach ($members as $member)
                    <div class="p-3 flex items-center {{$loop->odd ? 'bg-white' : ''}}">
                        <div class="w-3/4 md:flex">
                            <div class="text-gray-700 w-full mb-1 md:w-1/2">{{$member->name}}</div>
                            <div class="text-gray-700 w-full md:w-1/2 md:text-center">{{$member->student_id}}</div>
                        </div>
                        <div class="text-gray-700 w-1/4 md:text-right"><a class="miu-button-sm" href="{{route('profile.show', $member->student_id)}}">View</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection