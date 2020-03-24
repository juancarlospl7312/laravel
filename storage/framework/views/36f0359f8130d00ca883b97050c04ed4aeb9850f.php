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

        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/metisMenu.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/startmin.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('ThemeBackend/css/font-awesome.min.css')); ?>">

        <script src="<?php echo e(asset('ThemeBackend/js/jquery.min.js')); ?>"></script>

    </head>
    <body class="hold-transition login-page">

        <?php echo $__env->yieldContent('content'); ?>

        <script src="<?php echo e(asset('ThemeBackend/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('ThemeBackend/js/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('ThemeBackend/js/startmin.js')); ?>"></script>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>