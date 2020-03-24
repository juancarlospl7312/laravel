<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Carousel | Details</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <div>
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

<?php echo $__env->make('backend.includes.actions_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/carousel/show.blade.php ENDPATH**/ ?>