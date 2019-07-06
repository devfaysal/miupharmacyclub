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
                            amount
                        </label>
                        <input class="miu-input" value="{{old('amount')}}" id="amount" amount="amount" type="text" required>
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







{{-- 



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add Donor') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('donation.store') }}">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="donor" class="col-md-4 col-form-label text-md-right">{{ __('Donor') }}</label>
    
                                <div class="col-md-6">
                                    <select id="donor" class="form-control {{ $errors->has('donor') ? ' is-invalid' : '' }}" amount="donor_id" required>
                                        <option value="">--Select Member--</option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}" >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('donor'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('donor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-sm-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" amount="amount" value="{{ old('amount') }}" required>
                                    @if ($errors->has('amount'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
