@extends('layouts.app')
@section('content')
    <div class="w-full max-w-sm mx-auto mt-3">
        <form method="POST" action="{{ route('register') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="pb-3">
                <p class="text-center text-3xl text-gray-700 font-semibold">Register</p>
                <h4 class="text-center text-red-500 font-semibold">If you face any problem, send me a message in facebook <a target="_blank" href="https://www.facebook.com/messages/t/miufaysal"><span class="text-blue-600">fb.com/miufaysal</span></a></h4>
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
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="miu-input" value="{{old('name')}}" id="name" name="name" type="text" required>
                @if ($errors->has('name'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="batch">
                    Batch
                </label>
                <div class="relative">
                    <select class="miu-select" name="batch" id="batch">
                        <option value="">-- Select Batch --</option>
                        @foreach ($batches as $batch)
                            <option value="{{$batch->name}}" {{$batch->name == old('batch') ? 'selected':''}}>{{$batch->name}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                @if ($errors->has('batch'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('batch') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="student_id">
                    Student Id
                </label>
                <input class="miu-input" value="{{old('student_id')}}" id="student_id" name="student_id" type="text" required>
                @if ($errors->has('student_id'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('student_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email Address
                </label>
                <input class="miu-input" value="{{old('email')}}" id="email" name="email" type="email" required>
                @if ($errors->has('email'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                    Phone (Optional)
                </label>
                <input class="miu-input" value="{{old('phone')}}" id="phone" name="phone" type="text">
                @if ($errors->has('phone'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="current_organization">
                    Current Organization
                </label>
                <input class="miu-input" value="{{old('current_organization')}}" id="current_organization" name="current_organization" type="text">
                @if ($errors->has('current_organization'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('current_organization') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="designation">
                    Designation
                </label>
                <input class="miu-input" value="{{old('designation')}}" id="designation" name="designation" type="text">
                @if ($errors->has('designation'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('designation') }}</strong>
                    </span>
                @endif
            </div> --}}
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="miu-input" id="password" name="password" type="password" required>
                @if ($errors->has('password'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                    Confirm Password
                </label>
                <input class="miu-input" id="password_confirmation" name="password_confirmation" type="password" required>
                @if ($errors->has('password_confirmation'))
                    <span class="text-red-500 text-sm">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <div class="flex items-center justify-between pt-3">
                <button class="miu-button" type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>
@endsection