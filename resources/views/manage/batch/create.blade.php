@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Add New Batch</h1>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                <form method="POST" action="{{ route('batch.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="year">
                            Year
                        </label>
                        <input class="miu-input" value="{{old('year')}}" id="year" name="year" type="text" required autofocus>
                        @if ($errors->has('year'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('year') }}</strong>
                            </span>
                        @endif
                    </div>
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
                        <button class="miu-button" type="submit">
                            Add Batch
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
