@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Available Member Ids</h1> <a class="miu-button-sm" href="/manage/student-id/create">Bulk Add</a>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                @foreach ($ids as $id)
                    <a href="{{route('student-id.edit', $id->id)}}">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mx-2 my-2">
                            {{$id->number}}
                        </span>
                    </a>
                @endforeach
            </div>
            <div class="py-3">
                {{ $ids->links('pagination') }}
            </div>
        </div>
    </div>
@endsection
