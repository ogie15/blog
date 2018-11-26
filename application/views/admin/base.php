                        





                   

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
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
        <script src="<?php echo(base_url())?>assets/admin/js/prism/prism.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/waypoint/waypoints.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/counterUp/jquery.counterup.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/amcharts/amcharts.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/amcharts/serial.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="<?php echo(base_url())?>assets/admin/js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="<?php echo(base_url())?>assets/admin/js/amcharts/themes/light.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/toastr/toastr.min.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="<?php echo(base_url())?>assets/admin/js/main.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/production-chart.js"></script>
        <script src="<?php echo(base_url())?>assets/admin/js/traffic-chart.js"></script>
         <script src="<?php echo(base_url())?>assets/admin/js/task-list.js"></script>
        
        

        <!-- ========== THEME JS ========== -->
        
        
        <script>
            $(function($) {
                $('#example').DataTable({
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                });

                // $('#example2').DataTable( {
                //     "scrollY":        "300px",
                //     "scrollCollapse": true,
                //     "paging":         false
                // } );

                // $('#example3').DataTable();
            });
        </script>
        
        <!-- <script type="text/javascript">

          function load_edit(comment_id, id){
            console.log(comment_id + " : " + id);
            $.get("http://localhost/blog/admin_controller/Admin_controller/veditpost?comment_id="+comment_id, function(data, status){

              $("#content_disp").text(data.content);
              $("#title_disp").val(data.title);
              $("#who").val(data.who);
              $("#cmd_id").val(data.cmd_id);
              console.log(data);

            });
         }

        </script>
 -->
        <!-- <script type="text/javascript">

          $scope.viewp=function(id){
            console.log(id);
            $.get("http://localhost/blog/admin_controller/Admin_controller/pinfull?id="+id, function(data, status){
              console.log(data);
              $("#main").html(data.mainpost);
              $("#title").html(data.title);
              $("#who").html(data.who);
              $("#date").html(data.date);
              $("#commentnum").html(data.commentnum);
              var pic = (data.pic);
              $("#pic").attr("src", "<?php echo(base_url().'assets/images/uploads/') ?>" + pic);
          
            });
          }
        </script> -->
        <!-- <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]("One stop solution to your website admin panel!", "Welcome to Options!");

            });
        </script> -->

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>