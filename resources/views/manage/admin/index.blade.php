@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Admins</h1> <a class="miu-button-sm" href="/manage/admin/create">Add Admin</a>
            </div>
            <div class="justify-center px-4">
                @foreach ($users as $user)
                    <div class="pl-4 py-3"> {{$user->name}} <a class="miu-button-sm" href="{{route('admin.edit', $user->id)}}">Edit</a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
