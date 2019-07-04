@extends('v2.layouts.app')

@section('content')
    <div class="container">
        <div class="w-full md:w-1/2 mx-auto">
            <h1 class="text-gray-800 text-2xl text-center py-4">Donations</h1>
            <div class="shadow">
                @foreach ($donations as $donation)
                    <div class="pl-4 py-3 {{$loop->odd ? 'bg-white' : ''}}"> {{$donation->created_at->format('d F Y')}} - {{$donation->donor->name}} - {{$donation->amount}}BDT </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
