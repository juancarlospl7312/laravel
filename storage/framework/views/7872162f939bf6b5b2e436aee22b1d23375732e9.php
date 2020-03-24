<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- Google Font -->
    
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/select2/dist/css/select2.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/dist/css/skins/_all-skins.min.css')); ?>">
    <!-- custom style -->
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/dist/css/custom.css')); ?>">

    <!-- jQuery 3 -->
    <script src="<?php echo e(asset('ThemeBackend/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php echo $__env->make('backend.default.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('backend.default.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper page-content">

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('ThemeBackend/bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('ThemeBackend/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('ThemeBackend/dist/js/adminlte.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('ThemeBackend/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('ThemeBackend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- Notify -->
<script src="<?php echo e(asset('vendors/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<!-- CK Editor -->
<script src="<?php echo e(asset('ThemeBackend/bower_components/ckeditor/ckeditor.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('ThemeBackend/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>

<script>
    jQuery(document).ready(function() {
        var page_content = $(".page-content");
        page_content.empty().load("<?php echo e(action('Backend\DefaultController@dashboard')); ?>");
    });
</script>

</body>
</html>
