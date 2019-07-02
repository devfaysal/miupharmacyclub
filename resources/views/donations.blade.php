@extends('v2.layouts.app')

@section('content')
    <div class="container">
        <div class="w-full md:w-1/2 mx-auto bg-white p-3 mt-3">
            <h1 class="text-3xl py-3">Donations</h1>
            <ol>
                @foreach ($donations as $donation)
                    <li> {{$donation->created_at->format('d F Y')}} - {{$donation->donor->name}} - {{$donation->amount}}BDT </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection
