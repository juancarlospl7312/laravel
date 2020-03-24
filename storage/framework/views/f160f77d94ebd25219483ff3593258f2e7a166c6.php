<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit | Carousel</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form data-action="<?php echo e(action('Backend\CarouselController@update')); ?>" role="form"
                      class="form-crud-edit" enctype="multipart/form-data">
                    <div class="box-body">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($entity->id); ?>">
                        <div class="form-group row">
                            <div class="col-md-8">
                                <label for="file">Image *</label>
                                <input type="file" id="file" name="file" required="required">
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="<?php echo e(asset('../storage/app/' . $entity->path)); ?>">
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
