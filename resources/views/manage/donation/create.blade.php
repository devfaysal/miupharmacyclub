@extends('layouts.app')

@section('content')
    <div class="container">
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
                                    <select id="donor" class="form-control {{ $errors->has('donor') ? ' is-invalid' : '' }}" name="donor_id" required>
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
                                    <input id="amount" type="text" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" value="{{ old('amount') }}" required>
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
        </div>
    </div>
@endsection
