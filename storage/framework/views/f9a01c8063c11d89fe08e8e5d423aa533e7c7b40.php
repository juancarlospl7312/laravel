<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">List | Page</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <a class="btn btn-primary form-ajax-action" data-href="<?php echo e(action('Backend\PageController@create')); ?>">New</a>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="datatable_ajax" class="table table-bordered table-striped">
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-xs-6 page-content-crud"></div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<script>
    jQuery(document).ready(function(){
        $('#datatable_ajax').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": true,
            "ajax": {
                "url": "<?php echo e(action('Backend\PageController@table')); ?>",
                "type": "POST",
                "data": { _token: "<?php echo e(csrf_token()); ?>" }
            },
            "order": [[ 3, "desc" ]],
            "columns": [
                {
                    "data": "id",
                    "visible": false,
                },
                {
                    "data": "title",
                    "title": "Title"
                },
                {
                    "data": "updated_at",
                    "title": "Updated at",
                    "width": "80"
                },
                {
                    "data": "actions",
                    "sortable": false,
                    "width": "80"
                }
            ]
        });
    });
</script>

<?php echo $__env->make('backend.includes.actions_datatable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>