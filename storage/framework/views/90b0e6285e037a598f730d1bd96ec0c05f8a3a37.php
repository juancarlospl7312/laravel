<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Category | Edit</div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form data-action="<?php echo e(action('Backend\CategoryController@update')); ?>" role="form" class="form-crud-edit" enctype="multipart/form-data">
                    <div class="box-body">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="id" value="<?php echo e($entity->id); ?>">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_en" data-toggle="tab">EN</a></li>
                                <li><a href="#tab_es" data-toggle="tab">ES</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_en">
                                    <div class="form-group">
                                        <label for="title_en">Title *</label>
                                        <input type="text" class="form-control" name="title_en" id="title_en" required="required" value="<?php echo e($entity->title); ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_es">
                                    <div class="form-group">
                                        <label for="title_es">Título *</label>
                                        <input type="text" class="form-control" name="title_es" id="title_es" required="required" value="<?php echo e($translations['es']->title); ?>">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
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
<?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/category/edit.blade.php ENDPATH**/ ?>