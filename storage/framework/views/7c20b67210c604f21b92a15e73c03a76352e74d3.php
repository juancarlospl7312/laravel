<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(action('Backend\DefaultController@index')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e(asset('../storage/app/' . Auth::user()->path)); ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo e(asset('../storage/app/' . Auth::user()->path)); ?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo e(Auth::user()->name); ?>

                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a data-href="<?php echo e(action('Backend\UserController@showProfile')); ?>"
                                   class="btn btn-default btn-flat navbar-ajax">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(route('logout')); ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    jQuery(document).ready(function() {
        $(".navbar-ajax").click(function() {
            $(".page-content").load($(this).attr("data-href"));
            $(".main-sidebar ul.sidebar-menu li").each(function(){
                $(this).removeClass("active");
            });
        });
    });
</script>