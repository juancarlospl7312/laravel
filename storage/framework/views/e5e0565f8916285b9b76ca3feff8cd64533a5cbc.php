<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
        
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/dist/css/AdminLTE.min.css')); ?>">

        <!-- jQuery 3 -->
        <script src="<?php echo e(asset('ThemeBackend/bower_components/jquery/dist/jquery.min.js')); ?>"></script>

        <!-- Google Font -->
        
    </head>
    <body class="hold-transition login-page">

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo e(asset('ThemeBackend/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    </body>
</html>
