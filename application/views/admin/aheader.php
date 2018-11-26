<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Admin - Responsive Web Application Kit</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/icheck/skins/line/green.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <nav class="navbar top-navbar bg-white box-shadow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?php echo(base_url())?>assets/admin/images/logo-dark.svg" alt="Options - Admin Template" class="logo">
                            </a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- /.navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <!-- <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li> -->
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                                <!-- <li class="hidden-sm hidden-xs"><a href="#"><i class="fa fa-search"></i></a></li> -->
                               <!--  <li class="hidden-xs hidden-xs"> --><!-- <a href="#">My Tasks</a> --><!-- </li> -->
                                <!-- <li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li> -->
                            </ul>
                            <!-- /.nav navbar-nav -->

                            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle bg-gray-500" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle"></i> Add New <span class="caret"></span></a>
                                    <ul class="dropdown-menu" >
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Customer</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Employee</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Estimate</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Task</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Team Member</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Create Order</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Generate Report</a></li>
                                    </ul>
                                </li> -->
                                <!-- /.dropdown -->
                       
                                <li><a href="#" class=""><i class="fa fa-bell"></i><span class="badge badge-danger"><?php $nrcomm = $rlcomm->num_rows(); echo($nrcomm);?></span></a></li>
                                <!-- <li><a href="#" class=""><i class="fa fa-comments"></i><span class="badge badge-warning">2</span></a></li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Okougbo Esemuede<span class="caret"></span></a>
                                    <ul class="dropdown-menu profile-dropdown">
                                        <li class="profile-menu bg-gray">
                                            <div class="">
                                                <img class="img-circle profile-img" src="<?php echo(base_url())?>assets/admin/images/oj.jpg">
                                                <div class="profile-name">
                                                    <h6>Okougbo Esemuede</h6>
                                                    <a href="<?php echo(base_url())?>admin_controller/Admin_controller/profile">View Profile</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <!-- <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                        <li><a href="#"><i class="fa fa-sliders"></i> Account Details</a></li> -->
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo(base_url())?>admin_controller/Admin_controller/logout" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    </ul>
                                </li>
                        
                                <!-- /.dropdown -->
                                <!-- <li><a href="#" class="hidden-xs hidden-sm open-right-sidebar"><i class="fa fa-ellipsis-v"></i></a></li> -->
                            </ul>
                            <!-- /.nav navbar-nav navbar-right -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </nav>

             <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <div class="left-sidebar fixed-sidebar bg-gray-500 box-shadow">
                        <div class="sidebar-content">
                            <!-- <div class="user-info closed">
                                <img class="img-circle profile-img" style="width:240px ; height:320px ;" src="<?php echo(base_url())?>assets/admin/images/oj.jpg" > >
                                <h6 class="title">Okougbo Esemuede</h6>
                                <small class="info">PHP Developer</small>
                            </div> -->
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav">

                                    <li><a href="<?php echo (base_url());?>admin_controller/Admin_controller/dashboard"><i class="fa fa-bookmark"></i> <span>DASHBOARD</span></a></li>


                                    <li><a href="<?php echo (base_url());?>admin_controller/Admin_controller/comment"><i class="fa fa-bookmark"></i> <span>COMMENT</span></a></li>


                                    <li><a href="<?php echo (base_url());?>admin_controller/Admin_controller/post"><i class="fa fa-bookmark"></i> <span>POST</span></a></li>



                                    <li><a href="<?php echo (base_url());?>admin_controller/Admin_controller/profile"><i class="fa fa-bookmark"></i> <span>PROFILE</span></a></li>

                                    
                                    <li><a href="<?php echo(base_url())?>admin_controller/Admin_controller/logout"><i class="fa fa-bookmark"></i> <span>LOGOUT</span></a></li>
                                
                                </ul>
                                
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    
                        