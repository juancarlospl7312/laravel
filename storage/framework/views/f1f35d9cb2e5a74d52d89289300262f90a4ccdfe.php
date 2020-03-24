<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">User | Details</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="box-body">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <p><?php echo e($entity->name); ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-9">
                            <p><?php echo e($entity->email); ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Role</label>
                        <div class="col-md-9">
                            <p><?php echo e($entity->role->name); ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Image</label>
                        <div class="col-md-2">
                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $entity->path)); ?>">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="btn btn-danger form-action-cancel">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('backend.includes.actions_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/user/show.blade.php ENDPATH**/ ?>