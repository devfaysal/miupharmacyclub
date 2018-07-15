@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('donation.create')}}">Add Donation</a>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Donations') }}</div>
                    <div class="card-body">
                        <ol>
                            @foreach ($donations as $donation)
                                <li> {{$donation->created_at->format('d F Y')}} - {{$donation->donor->name}} - {{$donation->amount}}BDT </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
