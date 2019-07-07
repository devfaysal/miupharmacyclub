@extends('v2.layouts.app')

@section('content')
    <div class="container">
        <div class="w-full">
            <div class="flex flex-wrap justify-center py-4">
                <h1 class="text-2xl text-gray-700 text-center mr-3">Update Information</h1>
            </div>
            <div class="w-full max-w-sm mx-auto mt-3">
                <form method="POST" action="{{ route('profile.update', Auth::user()->student_id) }}" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->name }}" id="name" name="name" type="text" required>
                        @if ($errors->has('name'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="batch">
                            Batch
                        </label>
                        <div class="relative">
                            <select class="miu-select" name="batch" id="batch">
                                <option value="">-- Select Batch --</option>
                                @foreach ($batches as $batch)
                                    <option value="{{$batch->name}}" {{$batch->name == Auth::user()->batch ? 'selected':''}}>{{$batch->name}}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @if ($errors->has('batch'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('batch') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="student_id">
                            Student Id
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->student_id }}" id="student_id" name="student_id" type="text" disabled>
                        @if ($errors->has('student_id'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('student_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->email }}" id="email" name="email" type="email" required>
                        @if ($errors->has('email'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                            Phone (Optional)
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->phone }}" id="phone" name="phone" type="text">
                        @if ($errors->has('phone'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="current_organization">
                            Current Organization
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->current_organization }}" id="current_organization" name="current_organization" type="text">
                        @if ($errors->has('current_organization'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('current_organization') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="designation">
                            Designation
                        </label>
                        <input class="miu-input" value="{{ Auth::user()->designation }}" id="designation" name="designation" type="text">
                        @if ($errors->has('designation'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('designation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Image
                        </label>
                        <input onchange="previewFile()" id="image" type="file" class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                        <p class="text-danger">To get best view, upload a square size image and must be less than 250KB</p>
                        <img style="width: 100px;" src="{{Auth::user()->image != '' ? asset('storage/'.Auth::user()->image) :  asset('images/placeholder.png')}}" class="img-thumbnail" height="">
                        @if ($errors->has('image'))
                            <span class="text-red-500 text-sm">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="flex items-center justify-between pt-3">
                        <button class="miu-button" type="submit">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
@section('javascript')
    <script>
        function previewFile() {
            var preview = document.querySelector('img');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
@endsection
