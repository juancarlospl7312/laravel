<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(action('Backend\DefaultController@index')); ?>">Startmin</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo e(Auth::user()->name); ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a class="navbar-ajax" href="javascript:;" data-href="<?php echo e(action('Backend\UserController@showProfile')); ?>">
                        <i class="fa fa-user fa-fw"></i> User Profile
                    </a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->
</nav>



<script>
    jQuery(document).ready(function() {
        $(".navbar-ajax").click(function() {
            $(".page-content").empty().load($(this).attr("data-href"));
            $(".main-sidebar ul.sidebar-menu li").each(function(){
                $(this).removeClass("active");
            });
        });
    });
</script><?php /**PATH D:\xampp\htdocs\workspace\laravel\resources\views/backend/default/navbar.blade.php ENDPATH**/ ?>