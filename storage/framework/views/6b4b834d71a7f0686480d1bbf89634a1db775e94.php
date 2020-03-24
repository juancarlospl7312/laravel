<script>

    jQuery(document).ready(function(){
        var page_content_crud = $(".page-content-crud");
        var datatable_ajax = $("#datatable_ajax");
        var form_crud_edit = $(".form-crud-edit");
        var form_action_cancel = $(".form-action-cancel");
        var form_action_ok = $(".form-action-ok");
        var textarea_editor = $("textarea.editor");
        var select2 = $("select.select2");

        for(var i = 0; i < textarea_editor.length; i++){
            CKEDITOR.replace(textarea_editor[i].id, {
                language: (textarea_editor[i].id).substr(-2),
                toolbarGroups: [
                    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
                    { name: 'forms' },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                    { name: 'links' },
                    { name: 'insert' },
                    { name: 'styles' },
                    { name: 'colors' },
                    { name: 'tools' },
                    { name: 'others' },
                    { name: 'about' }
                ],
                extraPlugins: 'videoembed'
            });
            CKEDITOR.instances[textarea_editor[i].id].setData(textarea_editor[i].value);
            $("#" + textarea_editor[i].id).attr('required', 'required');
        }

        select2.each(function(){
            $(this).select2({
                placeholder: "Select",
                allowClear: true
            });
            var data_value_select2 = $(this).attr('data-value');
            if(data_value_select2 !== ''){
                data_value_select2 = jQuery.parseJSON(data_value_select2);
            }
            if($(this).attr('multiple') === undefined){
                $(this).val(data_value_select2).trigger('change');
            }
            else{
                var array_select2_multiple = [];
                for(var i = 0; i < data_value_select2.length; i++){
                    array_select2_multiple[i] = data_value_select2[i].pivot.tag_id;
                }
                $(this).val(array_select2_multiple).trigger('change');
            }
        });

        form_action_cancel.on('click', function(){
            page_content_crud.empty();
        });
        form_action_ok.on('click', function(){
            form_crud_edit.submit();
        });

        form_crud_edit.on('submit', function(e){
            e.preventDefault();
            for(var i = 0; i < textarea_editor.length; i++){
                $("#" + textarea_editor[i].id).val(CKEDITOR.instances[textarea_editor[i].id].getData());
            }
            $.ajax({
                url: $(this).attr('data-action'),
                method: "POST",
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: validate_custom
            })
            .done(function(response){
                if(response !== undefined){
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
                if(validate_custom()){
                    showAlert('error', 'fa fa-times', 'Failed operation');
                }
            });
        });


        /*VALIDATE*/

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
        };

        /* Validate */
        var validate_custom = function(){
            var form_crud = form_crud_edit[0];
            var result = true;
            for (var i = 0; i < form_crud.length; i++) {
                var name = form_crud[i].name;
                var parent = $('*[name*="' + name + '"]').parent();
                if (form_crud[i].required === true) {
                    if(isEmptyCustom(form_crud[i].value)){
                        showMessage(parent, 'The field is required');
                        result = false;
                    }
                    else if(form_crud[i].type === 'email' && !isEmailCustom(form_crud[i].value)){
                        showMessage(parent, 'The email is not correct');
                        result = false;
                    }
                    else if(form_crud[i].type === 'file' && !checkSizeFile(form_crud[i].files[0])){
                        showMessage(parent, 'File size must be less than 1 MB');
                        result = false;
                    }
                    else{
                        deleteMessage(parent);
                    }
                }
                if(form_crud[i].type === 'password' && form_crud[i].id === 'password_confirmation'){
                    var password = $("#password");
                    if(password.val() !== null){
                        if(form_crud[i].value !== password.val()){
                            showMessage(parent, 'Passwords do not match');
                            result = false;
                        }
                    }
                }
                if(form_crud[i].type === 'file' && !isEmptyCustom(form_crud[i].value)){
                    if(!checkSizeFile(form_crud[i].files[0])){
                        showMessage(parent, 'File size must be less than 1 MB');
                        result = false;
                    }
                }
            }
            return result;
        };
        var isEmptyCustom = function(value){
            var expresion = /^\s*$/;
            return expresion.test(value)
        };
        var isEmailCustom = function(value){
            var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
            return expresion.test(value)
        };
        var checkSizeFile = function(value){
            return value.size < 1048576;/*1MB*/
        };
        var showMessage = function(field, text) {
            field.addClass('has-error');
            field.children('.help-block').html(text);
        };
        var deleteMessage = function(field) {
            field.removeClass('has-error');
            field.children('.help-block').html('');
        }
    });

</script>