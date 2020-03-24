<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/bootstrap.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/metisMenu.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/timeline.css') }}">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">--}}
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/startmin.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/morris.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/dataTables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/dataTables/dataTables.responsive.css    ') }}">
    <link rel="stylesheet" href="{{ asset('ThemeBackend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">

    <script src="{{ asset('ThemeBackend/js/jquery.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('backend.default.navbar')
    <!-- Left side column. contains the logo and sidebar -->
    @include('backend.default.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper page-content">

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2019.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<script src="{{ asset('ThemeBackend/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('ThemeBackend/js/metisMenu.min.js') }}"></script>--}}
<script src="{{ asset('ThemeBackend/js/raphael.min.js') }}"></script>
{{--<script src="{{ asset('ThemeBackend/js/morris.min.js') }}"></script>--}}
{{--<script src="{{ asset('ThemeBackend/js/morris-data.js') }}"></script>--}}
<script src="{{ asset('ThemeBackend/js/startmin.js') }}"></script>
<script src="{{ asset('ThemeBackend/js/dataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('ThemeBackend/js/dataTables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('vendors/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>

<script>
    jQuery(document).ready(function() {
        $(".page-content").empty().load("{{ action('Backend\DefaultController@dashboard') }}");
    });
</script>

</body>
</html>
