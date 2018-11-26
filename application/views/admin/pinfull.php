
<!-- CSS -->
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/css/magnific-popup.assets/css">    




                        <?php 
                            foreach ($pinfull->result_array() as $row){
                            
                                echo ('
                                    <div class="blog-item" align="center" style="padding: 30px;">
                                        <!-- Date -->
                                        <div class="blog-item-title font-alt">
                                            <span class="date-num" align="left">'.$row['date_post'].'</span>
                                            <!-- Post Title -->
                                        <h2 class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html">'.$row['post_title'].'</a></h2>
                                        </div>
                                        
                                        
                                        <!-- Author, Categories, Comments -->
                                        <div class="blog-item-data">
                                            <i class="fa fa-user"></i>'.$row['who_made_post'].'
                                            
                                            <span class="separator">&nbsp;</span>
                                            <a href=""><i class="fa fa-comments"></i>'.$row['comment_num'].' Comments</a>
                                        </div>
                                        
                                        <!-- Image -->
                                        <div class="blog-media">
                                            <a href="blog-single-sidebar-right.html"><img style="width:320px; height:240px;" src="'.base_url().'assets/images/uploads/'.$row['pic'].'" alt="" /></a>
                                        </div>
                                        
                                        <!-- Text Intro -->
                                        <div class="blog-item-body">
                                            <p>
                                                '.$row['main_post'].'
                                            </p>
                                        </div>
                                    
                                    
                                    </div>

                                ');   
                            }        

                        ?>



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
