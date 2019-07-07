@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex flex-wrap mt-3">
            <div class="w-1/4 px-2">
                <div class="bg-white p-4">
                    <h1 class="text-gray-700 text-2xl mb-3">Dashboard</h1>
                    <ul class="">
                        <li class="ml-2 mb-2">
                            <a class="text-blue-500 hover:text-blue-800" href="/manage/batch">Batch</a>
                        </li>
                        <li class="ml-2 mb-2">
                            <a class="text-blue-500 hover:text-blue-800" href="/manage/student-id">Student Id</a>
                        </li>
                        <li class="ml-2 mb-2">
                            <a class="text-blue-500 hover:text-blue-800" href="/manage/students">Students</a>
                        </li>
                        <li class="ml-2 mb-2">
                            <a class="text-blue-500 hover:text-blue-800" href="/manage/donations">Donation</a>
                        </li>
                        <li class="ml-2 mb-2">
                            <a class="text-blue-500 hover:text-blue-800" href="/manage/admin">Admins</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-3/4 px-2">
                <div class="bg-white p-4">
                    @yield('manage')
                </div>
            </div>
        </div>
    </div>
@endsection
