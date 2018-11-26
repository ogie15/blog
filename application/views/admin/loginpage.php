<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>blog Admin - Responsive Web Application Kit - Login</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/animate-css/animate.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/icheck/skins/flat/blue.css" >

        <!-- ========== THEME CSS ========== -->
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-gray">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Koboko's Blog - Admin Login</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                                <div class="section-title">
                                    <p class="sub-title text-muted" align="center"> PLS LOGIN AS A BADASS!!</p>
                                </div>

                                <form method="post" action="<?php echo(base_url())?>admin_controller/Admin_controller/index" class="form-horizontal">
                                    <div class="form-group left-icon">
                                    <label for="exampleInputEmail1" class="col-sm-3 control-label">User Name</label>
                                    <div class="col-sm-9">
                                            <span class="glyphicon glyphicon-envelope form-left-icon"></span>
                                      <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" required>
                                    </div>
                                  </div>
                                    <div class="form-group left-icon">
                                    <label for="exampleInputPassword1" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                            <span class="glyphicon glyphicon-tags form-left-icon"></span>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                                    </div>
                                  </div>
                                    <!-- <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox op-check">
                                                <label>
                                                    <input type="checkbox" name="remember" class="flat-blue-style" checked> <span class="ml-10">Remember me</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group mt-20">
                                        <div class="">
                                            <!-- <a href="#" class="form-link"><small class="muted-text">Forgot Password?</small></a> -->
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>

                               <!--  <hr>

                                <h5 class="text-center mt-10 mb-20">Or Login With</h5>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary bg-primary-600 btn-labeled">Facebook<span class="btn-label btn-label-right"><i class="fa fa-facebook"></i></span></button>
                                    <button type="button" class="btn btn-primary bg-primary-300 btn-labeled ml-5">Twitter<span class="btn-label btn-label-right"><i class="fa fa-twitter"></i></span></button>
                                    <button type="button" class="btn btn-danger bg-danger-300 btn-labeled ml-5">Google<span class="btn-label btn-label-right"><i class="fa fa-google-plus"></i></span></button>
                                </div>
                                <!-- /.text-center -->

                                <!-- <hr> --> 

                                <!-- <div class="text-center">
                                    <a href="#" class="form-link"><small class="muted-text">Not registered yet?</small></a>
                                </div> -->
                                <!-- /.text-center -->

                            </div>
                        </div>
                        <!-- /.panel -->
                        <p class="text-muted text-center"><small>Copyright © koBOko 2018</small></p>
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/jquery/jquery-2.2.4.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/pace/pace.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/lobipanel/lobipanel.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
