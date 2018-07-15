@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
