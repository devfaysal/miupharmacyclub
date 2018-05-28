<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                @if(Session::has('message'))
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        </div>
                    </div>
                @endif
                <div class="row justify-content-md-center">
                    @guest
                        <form method="POST" action="{{ route('takeMeHome') }}">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="studentId" class="form-control" placeholder="Your MIU ID">
                                </div>
                                <div class="form-group col-md-6">
                                    <button class="btn btn-success" type="submit">Take me Home</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <a class="btn btn-success" href="{{route('home')}}">Take me Home</a>
                    @endguest
                </div>
            </div>
        </main>
    </div>
</body>
</html>
