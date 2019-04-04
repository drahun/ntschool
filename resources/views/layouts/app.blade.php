<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <base href="{{ url('/') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">


    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic|Roboto:400,700,500|Open+Sans:400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('css/default.css')}}?{{ sha1(microtime(true)) }}" />
    <!-- Scripts -->
    <script src="{{asset('js/default.js')}}?{{ sha1(microtime(true)) }}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head_scripts')
    @yield('style')
</head>
<body>
@include('parts._nav')
@yield('content')
@include('parts._footer')
@include('parts._copyrights')

@yield('bottom_scripts')
</body>
</html>