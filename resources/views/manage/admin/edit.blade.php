@extends('layouts.manage')

@section('manage')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Update</h1>
            </div>
            <div class="flex flex-wrap justify-center px-4">
                <form method="POST" action="{{ route('admin.update', $user->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="student_id">
                            University ID
                        </label>
                        <input class="miu-input" value="{{ $user->student_id }}" id="student_id" name="student_id" type="text" required>
                        @if ($errors->has('student_id'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('student_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                            Role
                        </label>
                        <div class="relative">
                            <select class="miu-select" name="role" id="role">
                                <option value="">-- Select Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->name}}" {{$role->name == old('role') ? 'selected':''}}>{{$role->display_name}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @if ($errors->has('role'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div> --}}
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
