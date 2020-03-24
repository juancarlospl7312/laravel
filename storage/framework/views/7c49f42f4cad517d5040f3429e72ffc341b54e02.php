<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/timeline.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/startmin.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/dataTables/dataTables.bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/dataTables/dataTables.responsive.css    ')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/summernote/dist/summernote.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/select2/select2.min.css')); ?>">

    <script src="<?php echo e(asset('ThemeBackend/js/jquery.min.js')); ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php echo $__env->make('backend.default.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make('backend.default.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<script src="<?php echo e(asset('ThemeBackend/js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('ThemeBackend/js/raphael.min.js')); ?>"></script>


<script src="<?php echo e(asset('ThemeBackend/js/startmin.js')); ?>"></script>
<script src="<?php echo e(asset('ThemeBackend/js/dataTables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('ThemeBackend/js/dataTables/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/summernote/dist/summernote.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/select2/select2.min.js')); ?>"></script>

<script>
    jQuery(document).ready(function() {
        $(".page-content").empty().load("<?php echo e(action('Backend\DefaultController@dashboard')); ?>");
    });
</script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/layouts/master.blade.php ENDPATH**/ ?>