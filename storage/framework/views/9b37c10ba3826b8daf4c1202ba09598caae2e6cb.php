<?php $__env->startSection('content'); ?>
    
        
            
        
        
        
            

            
                
                
                    
                    
                
                
                
                    
                    
                        
                    
                    
                
                
                    
                        
                    
                    
                
            

            
                
                
                    
                
                    
            
            

            
            

        
        
    
    


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form class="login" role="form" action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <fieldset>
                                <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autocomplete="off">
                                    <span class="form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span>
                                    <?php endif; ?>
                                    <span class="form-control-feedback"></span>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>