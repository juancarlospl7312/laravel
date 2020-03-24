<section>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit | News</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form data-action="<?php echo e(action('Backend\NewsController@update')); ?>" role="form" class="form-crud-edit" enctype="multipart/form-data">
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
                                    <div class="form-group">
                                        <label for="description_en">Description *</label>
                                        <textarea class="form-control" name="description_en" rows="1" id="description_en" required="required"><?php echo e($entity->description); ?></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ckeditor_en">Content *</label>
                                        <textarea id="ckeditor_en" class="form-control editor" name="content_en" rows="3" required="required"><?php echo e($entity->content); ?></textarea>
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
                                    <div class="form-group">
                                        <label for="description_es">Descripción *</label>
                                        <textarea class="form-control" name="description_es" rows="1" id="description_es" required="required"><?php echo e($translations['es']->description); ?></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ckeditor_es">Contenido *</label>
                                        <textarea id="ckeditor_es" class="form-control editor" name="content_es" rows="3" required="required" ><?php echo e($translations['es']->content); ?></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <div class="form-group">
                            <label for="tags_many">Tags *</label>
                            <select class="form-control select2" multiple="multiple" name="tags_many[]" id="tags_many" data-value="<?php echo e($entity->tags); ?>" required="required" style="width: 100%;">
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9">
                                <label for="file">Imagen *</label>
                                <input type="file" id="file" name="file">
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-3">
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
