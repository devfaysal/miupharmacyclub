@extends('v2.layouts.app')

@section('content')
<div class="container">
    <div class="bg-white mt-3 md:flex max-w-sm md:max-w-4xl mx-auto rounded overflow-hidden shadow-lg">
        <img class="w-full md:w-1/3" src="{{ $user->image != '' ? asset('storage/'.$user->image) :  asset('images/placeholder.png') }}" alt="{{$user->name}}">
        <div class="w-full md:w-2/3 px-6 py-4">
            <div class="font-bold text-xl mb-4 text-center">{{$user->name}}</div>
            <div>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">Batch:</span> {{$user->batch}}</p>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">ID:</span> {{$user->student_id}}</p>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">Email:</span> {{$user->email}}</p>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">Phone:</span> {{$user->phone}}</p>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">Organization:</span> {{$user->current_organization}}</p>
                <p class="text-gray-700 text-base border-b py-2"><span class="font-semibold w-32 inline-block">Designation:</span> {{$user->designation}}</p>
            </div>
            <div class="py-4">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
            </div>
        </div>
    </div>
</div>
@endsection
