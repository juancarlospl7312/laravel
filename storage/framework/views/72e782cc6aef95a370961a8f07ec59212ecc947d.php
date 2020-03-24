<?php $__env->startSection('content'); ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="javascript:;"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required="required" autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>