<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Details | Tag</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_en" data-toggle="tab">EN</a></li>
                            <li><a href="#tab_es" data-toggle="tab">ES</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_en">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Title</label>
                                    <div class="col-md-9"><?php echo e($entity->title); ?></div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Slug</label>
                                    <div class="col-md-9"><?php echo e($entity->slug); ?></div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_es">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Título</label>
                                    <div class="col-md-9"><?php echo e($translations['es']->title); ?></div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Slug</label>
                                    <div class="col-md-9"><?php echo e($translations['es']->slug); ?></div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
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