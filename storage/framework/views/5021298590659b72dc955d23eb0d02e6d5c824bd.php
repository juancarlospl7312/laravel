<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Details | Carousel</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <div>
                            <img class="img-responsive" src="<?php echo e(asset('../storage/app/' . $entity->path)); ?>">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" class="btn btn-danger form-action-cancel">OK</button>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<?php echo $__env->make('backend.includes.actions_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>