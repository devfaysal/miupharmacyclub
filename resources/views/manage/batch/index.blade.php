@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">All Batches</h1> <a class="miu-button-sm" href="/manage/batch/create">Add New Batch</a>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                @foreach ($batches as $batch)
                    <a href="{{$batch->path()}}">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mx-2 my-2">
                            {{$batch->name}} Batch <span class="ml-3 rounded-full bg-red-400 text-gray-100 inline-block w-6 h-6 text-center">{{$batch->members()->count()}}</span>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
