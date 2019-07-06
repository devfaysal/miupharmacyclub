@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Add Donation</h1>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                <form method="POST" action="/manage/donations">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="amount">
                            Amount
                        </label>
                        <input class="miu-input" value="{{old('amount')}}" id="amount" name="amount" type="text" required>
                        @if ($errors->has('amount'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="donor_id">
                            Donor
                        </label>
                        <div class="relative">
                            <select class="miu-select" name="donor_id" id="donor_id">
                                <option value="">-- Select Donor --</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}" {{$user->id == old('donor_id') ? 'selected':''}}>{{$user->name}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @if ($errors->has('donor_id'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('donor_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <button class="miu-button" type="submit">
                            Add Donation
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
