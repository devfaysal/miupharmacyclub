@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Donations</h1> <a class="miu-button-sm" href="/manage/donations/create">Add Donation</a>
            </div>
            <div class="justify-center px-4">
                @foreach ($donations as $donation)
                    <div class="pl-4 py-3 {{$loop->odd ? 'bg-white' : ''}}"> {{$donation->created_at->format('d F Y')}} - {{$donation->donor->name}} - {{$donation->amount}}BDT </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
