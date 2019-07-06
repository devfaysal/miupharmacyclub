@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Bulk Add Student Id</h1>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                <form method="POST" action="{{ route('student-id.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="year">
                            Year (Id starting year e.g 08)
                        </label>
                        <input class="miu-input" value="{{old('year')}}" id="year" name="year" type="text" placeholder="{{date('y')}}" required autofocus>
                        @if ($errors->has('year'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('year') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="batch">
                            Batch
                        </label>
                        <input class="miu-input" value="{{old('batch')}}" id="batch" name="batch" type="text" placeholder="35" required>
                        @if ($errors->has('batch'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('batch') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                            Start Id
                        </label>
                        <input class="miu-input" value="{{old('start')}}" id="start" name="start" type="text" placeholder="1520" required>
                        @if ($errors->has('start'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('start') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="end">
                            End Id
                        </label>
                        <input class="miu-input" value="{{old('end')}}" id="end" name="end" type="text" placeholder="1580" required>
                        @if ($errors->has('end'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('end') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <button class="miu-button" type="submit">
                            Add Ids
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
