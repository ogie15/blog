
 <!-- CSS -->
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/magnific-popup.assets/css">    
<!-- Comments -->
                   


 <!--   top heading -->
    
                





                    <?php
                        foreach ($viewcomm->result_array() as $row) {
                   
                        echo('



                            <div class="row page-title-div dark-title">
                                <div class="col-md-6">
                                    <h4 class="title">FULL COMMENTS </h4>
                                    <p class="sub-title">POST IT BELONGS TO: '.$row['comm_post_be'].'</p>
                                </div>
                                <!-- /.col-md-6 -->
                                
                                <!-- /.col-md-6 text-right -->
                            </div>  
    

                            <li class="media comment-item" style="padding-left: 20px;">
                            	
                                <a class="pull-left" href="#"><img class="media-object comment-avatar" src="'.base_url().'assets/images/user-avatar.png" alt="" width="50" height="50"></a>
                                
								<div class="media-body">
                                    <div class="comment-item-data">
                                        <div class="comment-author">
                                            <a href="#">'.$row['made_by_who'].'</a>
                                        </div>
                                        '.$row['date_made'].'<span class="separator">&mdash;</span>
                                        <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                    </div>
									
                                    <p>
                                       '.$row['main_comm'].'
                                    </p>
									
                                </div>
								
                            </li>

                           ');
                    	 }

                	?>   
                           
                <!-- End Comments -->
            	 <!-- End Comment Item -->

                  </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/gmap3.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/contact-form.js"></script>
        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->