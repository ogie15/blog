

			 <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo(base_url()); ?>assets/images/full-width-images/full.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Koboko's Blog</h1>
                            <div class="hs-line-4 font-alt">
                                Read More On Post
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Post</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
			

 			<!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                        
                        <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 sidebar">
                            
                            <!-- Search Widget -->
                            <div class="widget">
                                <form class="form-inline form" role="form">
                                    <div class="search-wrap">
                                        <button class="search-button animate" type="submit" title="Start Search">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control search-field" placeholder="Search...">
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Widget -->
                            
                            <!-- Widget -->
                            <!-- <div class="widget">
                                
                                <h5 class="widget-title font-alt">Categories</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-menu">
                                        <li>
                                            <a href="#" title="">Branding</a>
                                            <small>
                                                - 7
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" title="">Design</a>
                                            <small>
                                                - 15
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" title="">Development</a>
                                            <small>
                                                - 3
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" title="">Photography</a>
                                            <small>
                                                - 5
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" title="">Other</a>
                                            <small>
                                                - 1
                                            </small>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div> -->
                            <!-- End Widget -->
                            
                            <!-- Widget -->
                            <!-- <div class="widget">
                                
                                <h5 class="widget-title font-alt">Tags</h5>
                                
                                <div class="widget-body">
                                    <div class="tags">
                                        <a href="">Design</a>
                                        <a href="">Portfolio</a>
                                        <a href="">Digital</a>
                                        <a href="">Branding</a>
                                        <a href="">Theme</a>
                                        <a href="">Clean</a>
                                        <a href="">UI & UX</a>
                                        <a href="">Love</a>
                                    </div>
                                </div>
                                
                            </div> -->
                            <!-- End Widget -->
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Last posts</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-posts">
                                        <li class="clearfix">
                                            <a href=""><img src="images/blog/previews/post-prev-1.jpg" alt="" class="widget-posts-img" /></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Minimalistic Design Forever</a>
                                                Posted by John Doe 7 Mar 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- End Widget -->
                            
                            <!-- Widget -->

            
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Comments</h5>
            <?php 
                if( $result1->num_rows() != 0 ){  
                    foreach ($result1->result_array() as $row){
                        echo ('
                                <div class="widget-body">
                                    <ul class="clearlist widget-comments">
                                        <li>
                                            '.$row['made_by_who'].'<a href="#" title="">'.$row['main_comm'].'</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                         ');   
                    } 
                }else{ echo "NO commment!!!!!!!";}

            ?>
                            </div>


                 
                            <!-- End Widget -->
                            
                            <!-- Widget -->
                            <!-- <div class="widget">
                                
                                <h5 class="widget-title font-alt">Text widget</h5>
                                
                                <div class="widget-body">
                                    <div class="widget-text clearfix">
                                        
                                        <img src="images/user-avatar.png" alt="" width="70" class="img-circle left img-left">
                                        
                                        Consectetur adipiscing elit. Quisque magna ante eleifend eleifend. 
                                        Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
                                        Quisque magna ante eleifend eleifend. 
                                    
                                    </div>
                                </div>
                                
                            </div>  -->                           
                            <!-- End Widget -->
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Archive</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-menu">
                                        <li>
                                            <a href="#" title="">  </a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- End Widget -->
                            
                        </div>
                        <!-- End Sidebar -->
                        

<!-- Content -->
<?php 

    foreach ($result->result_array() as $row){
                                    
        echo ('
            <div class="col-sm-8 col-md-offset-1">

            <!-- Post -->
            <div class="blog-item mb-80 mb-xs-40">

            <!-- Text -->
            <div class="blog-item-body">
                
                <h1 class="mt-0 font-alt">'.$row['post_title'].'</h1>

                <div class="lead">
                    <p>
                        
                    </p>
                </div>
                <!-- End Text -->   
                
                <!-- Media Gallery -->
                <div class="blog-media mt-40 mb-40 mb-xs-30">
                    <ul class="clearlist content-slider">
                        <li>
                            <img src="'.base_url().'assets/images/uploads/'.$row['pic'].'" alt="" />
                        </li>
                    </ul>
                </div>
            	
                <p>
                    '.$row['main_post'].'              
                </p>
                
            </div>
            <!-- End Text -->

            </div>
         ');   
    }        
?>
                        <!-- End Post -->
                        
                <div class="mb-80 mb-xs-40">
                   <?php  
                    $comment_count  = $result1->num_rows();
                    echo (' 

                    <h4 class="blog-page-title font-alt">Comments<small class="number">( '.$comment_count.')</small></h4>
                    
                    <ul class="media-list text comment-list clearlist">
                    ')
                    ?>
                                    
                                    <!-- Comment Item -->

    			<!-- Comments -->
                <?php 
                    if( $result1->num_rows() != 0 ){  

                        foreach ($result1->result_array() as $row){
                            echo ('

                                
                                <li class="media comment-item">
                                	
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
                    }else{ echo "NO commment!!!!!!!";}

                ?>
                <!-- End Comments -->
            	 <!-- End Comment Item -->
                                    
                    </ul>
                    
                </div>					
    						
    						<!-- Add Comment -->

                 <?php 
                    
                    foreach ($result->result_array() as $row){   
                        echo ('
    						<div class="mb-80 mb-xs-40">
    							
                                <h4 class="blog-page-title font-alt">Leave a comment</h4>
    							
    							<!-- Form -->
                                <form method="post" action="'. base_url().'Blog_controller/comment" id="form" role="form" class="form">
                                    
                                    <div class="row mb-20 mb-md-10">
                                        
                                        <div class="col-md-6 mb-md-10">
                                            <!-- Name -->
                                            <input type="text" name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <!-- Comment -->
                                    <div class="mb-30 mb-md-10">
                                        <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                        <input type="hidden" name="comment_id" value="'.$row['comment_id'].'">
                                        <input type="hidden" name="id" value=" '.$row['id'].' ">
                                        <input type="hidden" name="post_title" value="'.$row['post_title'].'">
                                    </div>
                                    
                                    <!-- Send Button -->
                                    <button type="submit" class="btn btn-mod btn-medium">
                                        Send comment
                                    </button>
    								
                                </form>
    							<!-- End Form -->
    								
    						</div>

                        ');   
                    }        
                ?>


    						<!-- End Add Comment -->
    						
                            <!-- Prev/Next Post -->
                            <div class="clearfix mt-40">
                                <a href="#" class="blog-item-more left"><i class="fa fa-angle-left"></i>&nbsp;Prev post</a>
                                <a href="#" class="blog-item-more right">Next post&nbsp;<i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- End Prev/Next Post -->
                            
                        </div>
                        <!-- End Content -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->

