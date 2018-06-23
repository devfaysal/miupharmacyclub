@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('batch.create')}}">Add Batch</a>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Batches') }}</div>
                    <div class="card-body">
                        <ul>
                            @foreach ($batches as $batch)
                                <li>{{$batch->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
