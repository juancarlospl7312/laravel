<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Carousel | Edit</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form data-action="<?php echo e(action('Backend\CarouselController@update')); ?>" role="form"
                      class="form-crud-edit" enctype="multipart/form-data">
                    <div class="box-body">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($entity->id); ?>">
                        <div class="form-group row">
                            <div class="col-md-8">
                                <label for="path">Image *</label>
                                <input type="file" id="path" name="path" required="required">
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-4">
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
        </div>
    </div>
</div>

<?php echo $__env->make('backend.includes.actions_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/carousel/edit.blade.php ENDPATH**/ ?>