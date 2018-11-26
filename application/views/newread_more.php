

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
  

            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-route.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular-route.js"></script>
            <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/angular.js"></script>
            <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/jquery.min.js"></script>
            <!-- Section -->
            <section class="page-section" ng-app="myHHH" ng-controller="myThing">
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
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Last posts</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-posts">
                                        <li class="clearfix">
                                            <!-- <a href=""><img src="<?php echo (base_url()); ?>assets/images/blog/previews/post-prev-1.jpg" alt="" class="widget-posts-img" /></a> -->
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
                          
                                <div class="widget-body" ng-repeat="x in myData">
                                    <ul class="clearlist widget-comments" >
                                        <li>
                                            {{x.made_by_who}}<a href="#" title="">{{x.main_comm}}</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                           
                            </div>
                            <!-- End Widget -->
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Archive </h5>
                                
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
                        <div class="col-sm-8 col-md-offset-1">

                            <!-- Post -->
                            <div class="blog-item mb-80 mb-xs-40">

                                <!-- Text -->
                                <div class="blog-item-body"> 
                                    <h1 class="mt-0 font-alt">{{myDatam[0].post_title}}</h1>
                                    <div class="lead">
                                        <p>
                                            
                                        </p>
                                    </div> 
                                    
                                    <!-- Media Gallery -->
                                    <div class="blog-media mt-40 mb-40 mb-xs-30">
                                        <ul class="clearlist content-slider">
                                            <li>
                                                <img src="<?php echo (base_url()); ?>assets/images/uploads/{{myDatam[0].pic}}" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                        
                                    <p>
                                       
                                        {{myDatam[0].main_post}}              
                                        
                                    </p>
                    
                                </div>
                                <!-- End Text -->

                            </div>
                            <!-- End Post -->

                         
                            <!-- Comment Item -->
                            <!-- Comments -->   
                            <div class="mb-80 mb-xs-40" >

                                <h4 class="blog-page-title font-alt">Comments<small class="number" > ( {{myData.length}} ) </small></h4>
                                
                                <ul class="media-list text comment-list clearlist"  ng-repeat="x in myData">
                                    <li class="media comment-item" >
                                        <a class="pull-left" href="#"><img class="media-object comment-avatar" src="<?php echo (base_url()); ?>assets/images/user-avatar.png" alt="" width="50" height="50"></a>
                                        
                                        <div class="media-body">
                                            <div class="comment-item-data" >
                                                <div class="comment-author" >
                                                    <a href="#">{{x.made_by_who}}</a>
                                                </div>
                                                {{x.date_made}}<span class="separator">&mdash;</span>
                                                <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                            </div>
                                            
                                            <p >
                                                {{x.main_comm}}
                                            </p> 
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                            <!-- End Comments -->
                            <!-- End Comment Item -->
                                                      
                            

                            <!-- Add Comment -->
                            <div class="mb-80 mb-xs-40">
                                
                                <h4 class="blog-page-title font-alt">Leave a comment</h4>
                                
                                <!-- Form -->
                                <!-- <form method="post" action="#" id="form" role="form" class="form"> -->
                                    
                                    <div class="row mb-20 mb-md-10">
                                        <div class="col-md-6 mb-md-10">
                                            <!-- Name -->
                                            <input type="text" ng-model="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required>
                                        </div>
                                    </div>
                                    
                                    <!-- Comment -->
                                    <div class="mb-30 mb-md-10" >
                                        <textarea  id="text" ng-model="text" class="input-md form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                        <!-- <span>{{name}} &nbsp {{text}} &nbsp {{pId}} &nbsp {{pTitle}} &nbsp {{pCid}}</span> -->
                                        <span>{{dataw.err}}</span>
                                        <!-- <span>{{sts}}</span> -->
                                      <!--   <input type="hidden" name="comment_id" value="{{pCid}}">
                                        <input type="hidden" name="id" value="{{pId}}">
                                        <input type="hidden" name="post_title" value="{{pTitle}}"> -->
                                    </div>
                                    
                                    <!-- Send Button -->
                                    <button class="btn btn-mod btn-medium" ng-click= "myfunction()";>
                                        Send comment
                                    </button>
                                    
                    <!--             </form> -->
                                <!-- End Form -->
              
                            </div>
                            <!-- End Add Comment -->
                            

                            <!-- Prev/Next Post -->
                            <div class="clearfix mt-40">
                                <button style="background-color: white;" class="blog-item-more left" ng-click= "myprev()"><i class="fa fa-angle-left"></i>&nbsp;Prev post</button>
                                <button style="background-color: white;" class="blog-item-more right" ng-click= "mynext()"> Next post &nbsp;<i class="fa fa-angle-right"></i></button>
                            </div>
                            <!-- End Prev/Next Post -->
                          
                            <?php $comId = $_GET['comment_id']; $mvp = $_GET['mvp']; $id = $_GET['id']; ?>
                        </div>
                        <!-- End Content -->
                        
                    </div>
                    <!-- End of row -->
                </div>
                <!-- End of container -->
            </section>
            <!-- End Section -->

            <script>  
                
                var app = angular.module('myHHH',[]);
                app.controller('myThing', function($scope, $http, $interval){
                    $scope.name;
                    $scope.text;
                    var p = 0;
                    var id;
                    var comid;
                    var oldid = ("<?php echo($id)?>");
                    var oldcid = ("<?php echo($comId)?>");
                    var newid ;
                    var newcid;
                    var james;
                    var i;
                    var j;
                    var k;
                    var zero;
                    var last;
                    var jamy;
                    
                    
                    $interval(function(){
                        if (p == 1){
                            id = newid;
                            comid =newcid;

                        }else{
                            id = oldid;
                            comid = oldcid;
                        }

                        $http.get("<?php echo(base_url().'Blog_controller/selBid?id=')?>"+id).then(function (response){
                        $scope.myDatam = response.data;
                        $scope.pTitle = response.data[0].post_title;
                        $scope.pId = response.data[0].id;
                        $scope.pCid = response.data[0].comment_id;
                        console.log("gggf");
                        var jsun = {
                        name : $scope.name,
                        text : $scope.text,
                        id : $scope.pId,
                        post_title : $scope.pTitle,
                        comment_id : $scope.pCid,
                        }
                        });

                        $http.get("<?php echo(base_url().'Blog_controller/comBcid?comment_id=')?>"+comid).then(function (response){
                        $scope.myData = response.data;
                        console.log("jjah");
                        });

                        $http.get("<?php echo(base_url().'Blog_controller/allid')?>").then(function(response){jamy= response.data;
                        k = jamy.length -1;
                        zero = jamy[0].id;
                        last = jamy[k].id;
                        })


                    },500);

                    

                    $scope.myfunction= function(){
                        var jsun = {
                        "name" : $scope.name,
                        "text" : $scope.text,
                        "id" : $scope.pId,
                        "post_title" : $scope.pTitle,
                        "comment_id" : $scope.pCid,
                        }
                        $.post("<?php echo(base_url().'Blog_controller/newcomment')?>",jsun, function(data,status){$scope.dataw = JSON.parse(data);})
                        $scope.name = "";
                        $scope.text = "";
                       
                    }


                    $scope.mynext= function(){
                        if (last != oldid){
                            $http.get("<?php echo(base_url().'Blog_controller/allid')?>").then(function(response){james= response.data;
                            p= 1;
                                for (i=0; i<james.length; i++){
                                    text=james[i].id ;
                                    j = i+1;
                                    if (oldid == text){
                                        newid =james[j].id;
                                        var send = {"id":newid} ;
                                        $.post("<?php echo(base_url().'Blog_controller/allcid')?>",send, function(data,status){newcid = data;})
                                        oldid = newid;
                                        oldcid =newcid;
                                        g=i;
                                        break;
                                    }else if(j==james.length && g == null){ 
                                        break;
                                    }else{
                                        continue;
                                    }   
                                }    
                            }); 
                        }else if(last==oldid){console.log("shit");}
                    }    
                    
               
                    $scope.myprev= function(){
                        if (zero != oldid){
                            $http.get("<?php echo(base_url().'Blog_controller/allid')?>").then(function(response){james= response.data;
                            p= 1;
                                for (i=0; i<james.length; i++){
                                    text=james[i].id ;
                                    if (oldid == text){
                                        j = i-1;
                                        newid =james[j].id;
                                        var send = {"id":newid} ;
                                        $.post("<?php echo(base_url().'Blog_controller/allcid')?>",send, function(data,status){newcid = data;})
                                        oldid = newid;
                                        oldcid =newcid;
                                        k= i;
                                        break;
                                    }else if(j== -1){
                                        break;
                                    }else{
                                        continue;
                                    }
                                }   
                            });
                        }else if(zero==oldid){console.log("shit");} 
                    }

              

                }); 
            </script>
