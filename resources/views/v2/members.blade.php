@extends('v2.layouts.app')
@section('content')
    <div class="container">
        <div class="mt-3 bg-white w-full py-4">
            <h1 class="text-2xl text-center py-4">Members of All Batches</h1>
            <div class="flex flex-wrap justify-center px-4">
                @foreach ($batches as $batch)
                    <a href="">
                        <span class="inline-block bg-gray-200 rounded px-3 py-1 text-sm font-semibold text-gray-700 mx-2 my-2">
                            Batch: {{$batch->name}} <span class="ml-3 rounded-full bg-white p-1">0</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection