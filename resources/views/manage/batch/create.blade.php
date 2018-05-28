@extends('layouts.manage')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Bulk Add Student Id') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('batch.store') }}">
                {{csrf_field()}}

                <div class="form-group row">
                    <label for="year" class="col-sm-4 col-form-label text-md-right">{{ __('Year') }}</label>

                    <div class="col-md-6">
                        <input id="year" type="text" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required>
                        @if ($errors->has('year'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('year') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
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
@endsection
