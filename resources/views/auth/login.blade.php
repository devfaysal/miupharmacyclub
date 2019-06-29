@extends('v2.layouts.app')
@section('content')
    <div class="w-full max-w-sm mx-auto mt-3">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="pb-3">
                <p class="text-center text-3xl text-gray-700 font-semibold">Login</p>
            </div>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="student_id">
                    University ID
                </label>
                <input class="miu-input" value="{{old('student_id')}}" id="student_id" name="student_id" type="text" required autofocus>
                @if ($errors->has('student_id'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('student_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="miu-input" id="password" name="password" type="password" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="miu-button" type="submit">
                    Login
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </div>
        </form>
        <div class="border border-gray-400 rounded px-8 pt-2 pb-4 mb-4">
            <div class="flex items-center mt-3">
                <p class="mr-2">Not Registered yet?</p> 
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('register') }}">
                    Register Now
                </a>
            </div>
        </div>
    </div>
@endsection