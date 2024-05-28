<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('/images/logo.png')); ?>" alt="" height="15">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('/images/logo.png')); ?>" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('/images/logo.png')); ?>" alt="" height="15">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('/images/logo.png')); ?>" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="<?php echo e(route('home-index')); ?>" class="nav-link">Inicio</a>
                            </li>
                           
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span>Layouts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('config-index')); ?>" class="nav-link">Configuração</a> 
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('banner-index')); ?>" class="nav-link">Banner Principal</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('endereco-index')); ?>" class="nav-link">Localização</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('propriedade-index')); ?>" class="nav-link">Propiedades</a>
                            </li>


                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\laragon\www\TEMPLETE\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>