@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Update {{ $studentId->number }}</h1>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                <form method="POST" action="{{ route('student-id.update', $studentId->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="number">
                            ID
                        </label>
                        <input class="miu-input" value="{{ $studentId->number }}" id="number" name="number" type="text" required autofocus>

                        @if ($errors->has('number'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <button class="miu-button" type="submit">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
