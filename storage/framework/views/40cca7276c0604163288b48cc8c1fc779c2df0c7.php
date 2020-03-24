<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Details | News</h3>
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
                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <div><?php echo e($entity->title); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <div><?php echo e($entity->slug); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Description</label>
                                    <div><?php echo e($entity->description); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Content</label>
                                    <div><?php echo $entity->content; ?></div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_es">
                                <div class="form-group">
                                    <label class="control-label">Título</label>
                                    <div><?php echo e($translations['es']->title); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Slug</label>
                                    <div><?php echo e($translations['es']->slug); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Descripción</label>
                                    <div><?php echo e($translations['es']->description); ?></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Contenido</label>
                                    <div><?php echo $translations['es']->content; ?></div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tags</label>
                        <div>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <i><?php echo e($item); ?> <?php if(!$loop->last): ?> , <?php endif; ?></i>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <div>
                            <img class="img-responsive" src="<?php echo e(asset('../storage/app/' . $entity->path)); ?>" style="max-width: 300px;">
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