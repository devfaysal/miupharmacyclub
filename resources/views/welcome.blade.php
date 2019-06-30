@extends('v2.layouts.app')

@section('content')
<div class="container">
    <div class="flex flex-wrap mt-3 -mx-2">
        <div class="w-full px-2">
            <h1 class="text-4xl text-center text-gray-700">Welcome to MIU Pharmacy Club!</h1>

            <h3 class="text-center text-gray-700">{{count($users)}} Registered members</h3>
        </div>
    </div>
</div>
@endsection