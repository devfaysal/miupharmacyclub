@extends('v2.layouts.app')
@section('content')
    <div class="w-full max-w-sm mx-auto mt-3">
        <form method="POST" action="{{ route('password.email') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="pb-3">
                <p class="text-center text-3xl text-gray-700 font-semibold">Reset Password</p>
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('status') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                @endif
            </div>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email Address
                </label>
                <input class="miu-input" value="{{old('email')}}" id="email" name="email" type="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="flex items-center justify-between">
                <button class="miu-button" type="submit">
                    Send Passowrd Reset Link
                </button>
            </div>
        </form>
    </div>
@endsection