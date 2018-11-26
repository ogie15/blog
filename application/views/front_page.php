
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php echo(base_url()); ?>assets/images/full-width-images/full.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Koboko's Blog</h1>
                            <div class="hs-line-4 font-alt">
                                Providing You With The Latest
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>
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
                        
                        <!-- Content -->
                        <div class="col-sm-10 col-sm-offset-1">
                            


                        <!-- Post -->
                            <?php 
                            
                                foreach ($result->result_array() as $row){
                                
                                    echo ('
                                        <div class="blog-item">
                                        <!-- Date -->
                                        <div class="blog-item-date">
                                            <span class="date-num">'.$row['date_post'].'</span>
                                        </div>
                                        <!-- Post Title -->
                                        <h2 class="blog-item-title font-alt"><a href="'.base_url().'blog_controller/read_more?id='.$row['id'].'&comment_id='.$row['comment_id'].'&post_title='.$row['post_title'].'&mvp='.$row['mvp'].'">'.$row['post_title'].'</a></h2>
                                        
                                        <!-- Author, Categories, Comments -->
                                        <div class="blog-item-data">
                                            <i class="fa fa-user"></i>'.$row['who_made_post'].'
                                            
                                            <span class="separator">&nbsp;</span>
                                            <a href="#"><i class="fa fa-comments"></i>'.$row['comment_num'].' Comments</a>
                                        </div>
                                        
                                        <!-- Image -->
                                        <div class="blog-media">
                                            <a href="blog-single-sidebar-right.html"><img style="width:800px; height:600px;" src="'.base_url().'assets/images/uploads/'.$row['pic'].'" alt="" /></a>
                                        </div>
                                        
                                        <!-- Text Intro -->
                                        <div class="blog-item-body">
                                            <p>
                                                '.word_limiter($row['main_post'],5).'
                                            </p>
                                        </div>
                                        
                                        <!-- Read More Link -->
                                        <div class="blog-item-foot">
                                            <a href="'.base_url().'blog_controller/read_more?id='.$row['id'].'&comment_id='.$row['comment_id'].'&post_title='.$row['post_title'].'&mvp='.$row['mvp'].'" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                                        </div>
                                        
                                        </div>
                                    ');   
                                }        

                            ?>

                            


                        <!-- End Post -->

                        <!-- Pagination -->
                        <div class="pagination">
                            <?php 
                                if($pos!=1){
                                    echo('<a href="'.base_url().'blog_controller/index/'.($pos-1).'"><i class="fa fa-angle-left"></i></a>');
                                }
                                
                                $page_num = ceil($all_result->num_rows()/5);
                                for($i=1; $i<=$page_num; $i++){
                                    if($pos == $i){
                                         echo('<a href="'.base_url().'blog_controller/index/'.$i.'" class="active">'.$i.'</a>');
                                    }else{
                                        echo('<a href="'.base_url().'blog_controller/index/'.$i.'" class="">'.$i.'</a>');
                                    }
                                   

                                }
                                if($pos != $page_num){
                                     echo('<a href="'.base_url().'blog_controller/index/'.($pos+1).'"><i class="fa fa-angle-right"></i></a>');
                                }
                               

                            ?>
                           
                        </div>
                        <!-- End Pagination -->



                        </div>
                        <!-- End Content -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
 
    