<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>
            <?php echo $__env->yieldContent('title', 'Models'); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- App js -->
        

        <?php echo $__env->yieldContent('head-section'); ?>

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/admin/assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/admin/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/admin/assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/admin/assets/images/logo-light.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                  

                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/admin/assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                
                                <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                     

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="/auth">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                              
                            </li>


                            


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-celebrity">Model</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo e(route('create-celebrity')); ?>" key="t-invoice-list">Create Model</a></li>
                                    <li><a href="<?php echo e(route('all-celebrity')); ?>" key="t-invoice-detail">All Models</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-celebrity">Post</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo e(route('create-post')); ?>" key="t-invoice-list">Create Post</a></li>
                                    <li><a href="<?php echo e(route('all-posts')); ?>" key="t-invoice-detail">All Posts</a></li>

                                    <li><a href="<?php echo e(route('trash-posts')); ?>" key="t-invoice-detail">Trash Posts</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo e(route('all-contact')); ?>">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Contact</span>
                                </a>
                              
                            </li>


                         


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php echo $__env->yieldContent('body'); ?>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

             

                <?php echo $__env->yieldContent('after-body'); ?>

                

              

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->

        <!-- JAVASCRIPT -->
        <script src="/admin/assets/libs/jquery/jquery.min.js"></script>
        <script src="/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/admin/assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="/admin/assets/js/app.js"></script>



        <?php echo $__env->yieldContent('script'); ?>
        
    </body>


</html><?php /**PATH C:\Users\DESKTOP\Desktop\Models Laravel\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>