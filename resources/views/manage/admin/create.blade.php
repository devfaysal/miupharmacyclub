@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Add Admin') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.store') }}">
                            {{csrf_field()}}
    
                            <div class="form-group row">
                                <label for="student_id" class="col-sm-4 col-form-label text-md-right">{{ __('University ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="student_id" type="text" class="form-control{{ $errors->has('student_id') ? ' is-invalid' : '' }}" name="student_id" value="{{ old('username') }}" required autofocus>
    
                                    @if ($errors->has('student_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('student_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
    
                                <div class="col-md-6">
                                    <select id="role" class="form-control {{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" required>
                                        <option value="">--Select Role--</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->name}}" {{$role->name == old('role') ? 'selected':''}}>{{$role->display_name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
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
