<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('content_css')
    <title>REALHOST</title>
</head>
<body cz-shortcut-listen="true">
@include('layouts.includes.nav')

@yield('content')

</body>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/ajax-token.js') }}"></script>
@yield('content_js')

@yield('modals')


</html>