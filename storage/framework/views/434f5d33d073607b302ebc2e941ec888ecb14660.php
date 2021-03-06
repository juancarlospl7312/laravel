
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <a data-href="" class="btn btn-primary btn-remove-custom">Delete</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>

    jQuery(document).ready(function(){
        var page_content_crud = $(".page-content-crud");
        var datatable_ajax = $("#datatable_ajax");
        var modal_default = $("#modal-default");
        var modal_btn_remove = $("a.btn-remove-custom");
        var form_ajax_action = $(".form-ajax-action");

        form_ajax_action.on('click', function(){
            loadContentCrud($(this).attr("data-href"));
        });

        datatable_ajax.on('click', '.action-table', function(){
            loadContentCrud($(this).attr("data-href"));
        });
        datatable_ajax.on('click', '._delete', function(){
            modal_default.modal('show');
            modal_btn_remove.attr('data-href', $(this).attr('data-href'));
        });

        modal_default.on('click', 'a.btn-remove-custom', function(){
            var formdata = new FormData();
            formdata.append('_token', '<?php echo e(csrf_token()); ?>');
            $.ajax({
                url: $(this).attr("data-href"),
                method: "POST",
                data: formdata,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function(response) {
                    if(response !== undefined){
                        modal_default.modal('hide');
                        if(response.success === true){
                            showAlert('success', 'fa fa-check', 'Successful operation');
                            datatable_ajax.DataTable().ajax.reload();
                            page_content_crud.empty();
                        }
                        if(response.success === false){
                            showAlert('error', 'fa fa-times', 'Failed operation');
                        }
                    }
                })
                .fail(function(){
                    modal_default.modal('hide');
                    showAlert('error', 'fa fa-times', 'Failed operation');
                });
        });

        function loadContentCrud(url){
            page_content_crud.empty().load(url);
        }

        /* Notify */
        var showAlert = function(type, icon, message){
            $.notify(
                {
                    icon: icon,
                    message: message
                },
                {
                    allow_dismiss: true,
                    type: type,
                    placement: {
                        from: "bottom",
                        align: "right"
                    }
                }
            );
        }
    });

</script>