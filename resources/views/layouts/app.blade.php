<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <header>
        <ul>
            <a href="{{route('home')}}">
                @foreach ($viaggis as $viaggio)
                    <h2>{{$viaggio->luogo}}</h2>    
                @endforeach
            </a>
            
        </ul>
    </header>
    <body>
        {{-- @include('partials.header') --}}

        <main>
            <!-- Yield the main page content -->
            @yield('content')
        </main>
        
        {{-- @include('partials.footer') --}}

        <script src="{{asset('js/app.js')}}" defer></script>
    </body>
</html>
