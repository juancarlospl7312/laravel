<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit | User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form data-action="<?php echo e(action('Backend\UserController@update')); ?>" role="form"
                      class="form-crud-edit" enctype="multipart/form-data">
                    <div class="box-body">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($entity->id); ?>">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" required="required" value="<?php echo e($entity->name); ?>">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" name="email" id="email" required="required" value="<?php echo e($entity->email); ?>">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="role_id">Role *</label>
                            <select class="form-control select2" name="role_id" id="role_id" data-value="<?php echo e($entity->role_id); ?>" required="required" style="width: 100%;">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <label for="path">Image</label>
                                <input type="file" id="path" name="path">
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $entity->path)); ?>">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="javascript:;" class="btn btn-primary form-action-ok">Update</a>
                        <a href="javascript:;" class="btn btn-danger form-action-cancel">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- END PAGE CONTENT-->

<?php echo $__env->make('backend.includes.actions_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
