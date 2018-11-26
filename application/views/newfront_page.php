
            
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
            
           <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/angular.js"></script>
            <!-- Section -->
            <section class="page-section" ng-app="myHHH" ng-controller="myThing" >
                <div class="container relative">
                    
                    <div class="row">
                        <!-- Content -->
                        <div class="col-sm-10 col-sm-offset-1" >
                            


                            <!-- Post -->
                               
                                            <div class="blog-item" ng-repeat="x in fgh">
                                                <!-- Date -->
                                                <div class="blog-item-date">
                                                    <span class="date-num">{{x.date_post}}</span>
                                                </div>
                                                <!-- Post Title -->
                                                <h2 class="blog-item-title font-alt"><a href="<?php echo(base_url());?>Blog_controller/newReadmore?id={{x.id}}&comment_id={{x.comment_id}}&post_title={{x.post_title}}&mvp={{x.mvp}}">{{x.post_title}}</a></h2>
                                                
                                                <!-- Author, Categories, Comments -->
                                                <div class="blog-item-data">
                                                    <i class="fa fa-user"></i>{{x.who_made_post}}
                                                    
                                                    <span class="separator">&nbsp;</span>
                                                    <a href="#"><i class="fa fa-comments"></i>{{x.comment_num}}  Comments</a>
                                                </div>
                                                
                                                <div class="blog-media">
                                                    <a href="blog-single-sidebar-right.html"><img style="width:800px; height:600px;" src="<?php echo(base_url());?>assets/images/uploads/{{x.pic}}" alt="" /></a>
                                                </div>
                                                
                                                <!-- Text Intro -->
                                                <div class="blog-item-body">
                                                    <p>
                                                       {{x.main_post | limitTo: 20}}
                                                    </p>
                                                </div>
                                                
                                                <!-- Read More Link -->
                                                <div class="blog-item-foot">
                                                    <a href="<?php echo(base_url());?>Blog_controller/newReadmore?id={{x.id}}&comment_id={{x.comment_id}}&post_title={{x.post_title}}&mvp={{x.mvp}}" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
                                                </div>
                                                
                                            </div>
                   

                            <!-- End Post -->
                             <div class="pagination">
                                <a href="" ng-click= "page(90)"><i class="fa fa-angle-left" ></i></a>
                               <span ng-repeat="x in numArrayu"> <a href="" ng-click= "page(x.pag)" class="{{act}}" >{{x.i}}</a></span>
                                <!-- <a href="" ng-click= "page(3)">2</a>
                                <a href="" ng-click= "page(6)">3</a> -->
                                <a class="no-active">...</a>
                                <a href="" ng-click= "page(lass)">{{rlvar}}</a>
                                <a href="" ng-click= "page(91)"><i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                        <!-- End Content -->
                        

                    </div>
                    
                </div>

                
            </section>
            <!-- End Section -->



            <script>
                console.log("oj");
                var app = angular.module('myHHH',[]);
                app.controller('myThing', function($scope, $http, $interval){
                    var chk;
                    var chklength;
                    var values;
                    var x;
                    var remain;
                    var d;
                    var fgh = [];
                    var timer;
                    var lvar;
                    var rlvar;
                    var p;
                    var q;
                    var s = 0;
                    var z;
                    var pag;
                    var numArray=[];

                    
                        $interval(function (){$http.get("<?php echo(base_url());?>Blog_controller/pingFpage").then(function (response){
                        $scope.myData = response.data;
                        chk = response.data;
                        console.log(chk);
                        chklength =chk.length;
                        lvar = Math.ceil(chklength/3);
                        rlvar = lvar;
                        for (var i =1; i < rlvar; i++) {
                            if (i==1){
                                pag=0;
                            }else{
                                pag= pag+3;
                            }
                            numArray.push({"i":i, "pag":pag})
                        }
                        $scope.numArrayu = numArray
                        $scope.lass= pag+3;
                        $scope.rlvar = rlvar;

                        $scope.page= 
                        function(q){
                            s=1;
                            if (q==90){
                                if (z!=0){
                                    p=z-3;
                                }else{
                                    P=0;
                                }
                            }else if(q==91){
                                if (z == $scope.lass){
                                    p= $scope.lass;
                                }else {
                                    p=z+3;
                                }
                            }else if(q!=90 || q!=91){
                                p = q; 
                            }
                        }
                            if (s==1){
                                p=p;
                            }else if (s==0){
                                p=0;
                            }
                            d= p+3;
                            z=p;
                            for(x=p; x<d; x++){
                                $scope.myData[x];
                                if (response.data[x] == null){
                                    break;
                                }else{fgh.push(response.data[x]);}
                            }
                            $scope.fgh = fgh;
                            fgh = [];
                            numArray=[];
                            })}
                        ,500);

                }); 
            </script>

            
            
 
    