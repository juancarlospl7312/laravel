<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('../storage/app/' . Auth::user()->path)); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active" id="sidebar_dashboard">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\DefaultController@dashboard')); ?>">
                    <i class="fa fa-dashboard "></i> <span>Dashboard</span>
                </a>
            </li>
            <li id="sidebar_carousel">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\CarouselController@index')); ?>">
                    <i class="fa fa-sliders"></i> <span>Carousel</span>
                </a>
            </li>
            <li id="sidebar_news">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\PageController@index')); ?>">
                    <i class="fa fa-file"></i> <span>Page</span>
                </a>
            </li>
            <li id="sidebar_news">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\NewsController@index')); ?>">
                    <i class="fa fa-newspaper-o"></i> <span>News</span>
                </a>
            </li>
            <li id="sidebar_news">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\TagController@index')); ?>">
                    <i class="fa fa-tag"></i> <span>Tag</span>
                </a>
            </li>
            <li id="sidebar_user">
                <a class="sidebar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\UserController@index')); ?>">
                    <i class="fa fa-user"></i> <span>User</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


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
</script>