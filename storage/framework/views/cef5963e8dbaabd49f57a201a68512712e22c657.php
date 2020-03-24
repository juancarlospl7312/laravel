<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\DefaultController@dashboard')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\CarouselController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> Carousel</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\PageController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> Page</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\NewsController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> News</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\CategoryController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> Category</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\TagController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> Tag</a>
            </li>
            <li>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\UserController@index')); ?>" class="sidebar-ajax">
                    <i class="fa fa-dashboard fa-fw"></i> User</a>
            </li>
        </ul>
    </div>
</div>


<script>
    jQuery(document).ready(function() {
        $(".sidebar-ajax").click(function() {
            $(".page-content").empty().load($(this).attr("data-href"));
            $(".main-sidebar ul.sidebar-menu li").each(function(){
                $(this).removeClass("active");
            });
            $(this).parent().addClass('active');
        });
    });
</script><?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/default/sidebar.blade.php ENDPATH**/ ?>