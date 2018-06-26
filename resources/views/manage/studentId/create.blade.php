@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Bulk Add Student Id') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student-id.store') }}">
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
                                <label for="batch" class="col-sm-4 col-form-label text-md-right">{{ __('batch') }}</label>

                                <div class="col-md-6">
                                    <input id="batch" type="text" class="form-control{{ $errors->has('batch') ? ' is-invalid' : '' }}" name="batch" value="{{ old('batch') }}" required>
                                    @if ($errors->has('batch'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('batch') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start" class="col-sm-4 col-form-label text-md-right">{{ __('start') }}</label>

                                <div class="col-md-6">
                                    <input id="start" type="text" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" value="{{ old('start') }}" required>
                                    @if ($errors->has('start'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('start') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="end" class="col-sm-4 col-form-label text-md-right">{{ __('end') }}</label>

                                <div class="col-md-6">
                                    <input id="end" type="text" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}" name="end" value="{{ old('end') }}" required>
                                    @if ($errors->has('end'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('end') }}</strong>
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
