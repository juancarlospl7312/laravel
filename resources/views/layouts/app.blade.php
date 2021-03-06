<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('ThemeBackend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('ThemeBackend/css/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('ThemeBackend/css/startmin.css') }}">
        <link rel="stylesheet" href="{{ asset('ThemeBackend/css/font-awesome.min.css') }}">

        <script src="{{ asset('ThemeBackend/js/jquery.min.js') }}"></script>

    </head>
    <body class="hold-transition login-page">

        @yield('content')

        <script src="{{ asset('ThemeBackend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ThemeBackend/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('ThemeBackend/js/startmin.js') }}"></script>
    </body>
</html>
