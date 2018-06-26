@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Bulk Add Student Id') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student-id.update', $studentId->id) }}">
                            {{method_field('PATCH')}}
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="number" class="col-sm-4 col-form-label text-md-right">{{ __('ID') }}</label>

                                <div class="col-md-6">
                                    <input id="number" type="text" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ $studentId->number }}" required>
                                    @if ($errors->has('number'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('number') }}</strong>
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
