<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($news); ?></h3>
                    <p>News</p>
                </div>
                <div class="icon">
                    <i class="fa fa-newspaper-o"></i>
                </div>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\NewsController@index')); ?>" class="small-box-footer action-ajax" data-id-sidebar="sidebar_news">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($user); ?></h3>
                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="javascript:;" data-href="<?php echo e(action('Backend\UserController@index')); ?>" class="small-box-footer action-ajax" data-id-sidebar="sidebar_user">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<script>
    jQuery(document).ready(function() {

        var page_content = $(".page-content");
        $(".action-ajax").click(function() {
            page_content.empty().load($(this).attr("data-href"));
            $(".main-sidebar ul.sidebar-menu li").each(function(){
                $(this).removeClass("active");
            });
            $("li#"+($(this).attr('data-id-sidebar'))).addClass('active');
        });

    });
</script>