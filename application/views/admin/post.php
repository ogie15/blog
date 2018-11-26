            
                    <div class="main-page" >
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">POST SECTION</h2>
                                    <p class="sub-title">Admin Post Platform</p>
                                </div>
                                <!-- /.col-md-6 -->
                                <!-- <div class="col-md-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div> -->
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            
                        </div>
                        <!-- /.container-fluid -->

                        <script type="text/javascript" src="<?php echo (base_url()); ?>assets/js/angular.js"></script>
                        <section class="section" ng-app="myHHH" ng-controller="myThing">
                            <div class="container-fluid">

                                
                                </div>
                                <!-- /.row -->


                                
                                <div class="row" align="center">
                                    <a href="<?php echo(base_url()) ?>admin_controller/Admin_controller/addpost" class="btn btn-primary btn-rounded">Add Post</a>
                                </div>
                                <div>&nbsp</div>

                                
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5 class="col-sm-2">Post Table</h5>

                                                    <!-- SEARCH BAR SIDE -->
                                                    <form class="col-sm-7" align="right">
                                                      <input type="radio" ng-model="sele" value="date"> Date &nbsp
                                                      <!-- <input type="radio" name="gender" value="female"> Name &nbsp -->
                                                      <input type="radio" ng-model="sele" value="post"> Post &nbsp
                                                      <!-- <input type="radio" name="gender" value="other"> comment &nbsp  -->
                                                      <input type="radio" ng-model="sele" value="idd"> ID &nbsp
                                                    </form>

                                                    <!-- search bar -->
                                                    <div id="custom-search-input" align="right" class="input-group col-sm-2">
                                                    <!--  <div > -->
                                                        <input type="text" class="form-control input-sm" placeholder="search" ng-keydown="search($event)" ng-model="hit">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-info btn-sm" type="button">
                                                                <i class="glyphicon glyphicon-search"></i>
                                                            </button>
                                                        </span>
                                                    <!-- </div> -->
                                                    </div>
                                                    <!-- end search bar -->

                                                </div>
                                                
                                            </div>
                                            <div class="panel-body p-20">


                                            
                                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%" >
                                            <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>The Post</th>
                                                    <th>Date Added</th>
                                                    <th>View Post in Details</th>
                                                    <th>Edit Post</th>
                                                    <th>Delete Post</th>
                                                    <th>Number of Comments</th>
                                                    <th>View Comments On this Post</th>
                                                    

                                                </tr>
                                            </thead>
                                    
                                            <!-- POST CONTENT LOOPER -->
                                            <tbody >
                                                <tr ng-repeat="x in fgh">
                                                    <td>{{x.id}}</td>
                                                    <td>{{x.main_post}}</td>
                                                    <td>{{x.date_post}}</td>
                                                    <td><button ng-click="viewp(x.id)" type="button" data-toggle="modal" data-target="#modal9" class="btn btn-default border-info btn-rounded btn-wide">view</button></a>
    
                                                   </td>
                                                    <td><button ng-click="load_edit(x.comment_id,x.id)" type="button" data-toggle="modal" data-target="#editModal" class="btn btn-success btn-rounded icon-only"><i class="fa fa-pencil"></i></button>
                                                    </td>
                                                    <td><a href="<?php echo(base_url());?>admin_controller/Admin_controller/deletepost?comment_id={{x.comment_id}}&id={{x.id}}"><button type="submit" class="btn btn-danger btn-rounded icon-only"><i class="fa fa-trash-o"></i></button></a>
                                                        
                                                    </td>
                                                    <td>{{x.comment_num}}</td>
                                                    <td><a href="<?php echo(base_url());?>admin_controller/Admin_controller/viewcompost?comment_id={{x.comment_id}}"><button type="button" class="btn btn-default border-info btn-rounded btn-wide">view</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>

                                            <!-- PAGNATION PART -->
                                            <div class="pagnation" style=" background-color: grey; color: red; border-radius: 5px; padding: 0px; margin:0px;">
                                                <a href="" ng-click= "page(90)"><i class="fa fa-angle-left" ></i></a>
                                               <span ng-repeat="x in numArrayu"> <a href="" ng-click= "page(x.pag)" class="active" style="font-weight: 20px;" >{{x.i}}</a></span>
                                                <!-- <a href="" ng-click= "page(3)">2</a>
                                                <a href="" ng-click= "page(6)">3</a> -->
                                                <a class="no-active">...</a>
                                                <a href="" ng-click= "page(lass)">{{rlvar}}</a>
                                                <a href="" ng-click= "page(91)"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                                   
                                        </table>

                                   
                   

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;System Architect&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;Accountant&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example').DataTable();
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->



                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

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
        $scope.sele;
        $scope.hit;
        var searchval;
        var newsearchval="";
        var inter;
        var e;

            
            // PINGER FOR POST ALL INFO 
            inter = setInterval(function (){$http.get("<?php echo(base_url());?>admin_controller/Admin_controller/pingPost").then(function (response){
            $scope.myData = response.data;
            chk = response.data;
            // console.log(chk);
            // console.log($scope.sele);
            chklength =chk.length;
            lvar = Math.ceil(chklength/5);
            rlvar = lvar;
            for (var i =1; i < rlvar; i++) {
                if (i==1){
                    pag=0;
                }else{
                    pag= pag+5;
                }
                numArray.push({"i":i, "pag":pag})
            }
            $scope.numArrayu = numArray
            $scope.lass= pag+5;
            $scope.rlvar = rlvar;

            // PAGNATION START
            $scope.page= 
            function(q){
                s=1;
                if (q==90){
                    if (z!=0){
                        p=z-5;
                    }else{
                        P=0;
                    }
                }else if(q==91){
                    if (z == $scope.lass){
                        p= $scope.lass;
                    }else {
                        p=z+5;
                    }
                }else if(q!=90 || q!=91){
                    p = q; 
                }
            }
            // PAGNATION CONTINUE PICKER
            if (s==1){
                p=p;
            }else if (s==0){
                p=0;
            }
            d= p+5;
            z=p;
            for(x=p; x<d; x++){
                $scope.myData[x];
                if (response.data[x] == null){
                    break;
                }else{fgh.push(response.data[x]);}
            }

            // SEARCH BAR
            if ($scope.sele=="idd"){
                var jsun = {"id" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getPBid')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="date"){
                var jsun = {"date" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getPBd')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="post"){
                var jsun = {"post" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getPBp')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else{console.log("EMPTY SEARCH")}
           
            // DIFF FOR PAGNATION AND SEARCH CONTROL
            if ($scope.hit == "" || $scope.hit == null){
                $scope.fgh = fgh;
            }else{
                $scope.fgh = $scope.fgg;
            }
            console.log($scope.fgh);
            fgh = [];
            numArray=[];
                })}
            ,500);


        

       

// KEYLOGGER MISTAKLY MADE SNIPPET
        //  $scope.search=function(nj){
        //     // clearInterval(inter);
        //     console.log('start');
        //     // e=nj.keyCode;
        //     // searchval =nj.key ;
        //     // // String.fromCharCode(e);
        //     // console.log(e);
        //     // console.log(searchval);
        //     // if (e!=8 && e!=9 && e!=13 && e!=16 && e!=17 && e!=18 && e!=19 && e!=20  && e!= 27 && e!=33 && e!=34 && e!=46 && e!=35  && e!=36 && e!=37 && e!=38 && e!=39 && e!=40 && e!=44 && e!=45 && e!=46 && e!=91 && e!=92 && e!=93 && e!=112 && e!=113 && e!=114 && e!=115 && e!=116 && e!=117 && e!=118 && e!=119 && e!=120 && e!=121 && e!=122 && e!=123 && e!=144 && e!=145){
        //     //     newsearchval= newsearchval+searchval;
        //     // }else if (e==8){
        //     //     newsearchval = newsearchval.slice(0, newsearchval.length-1);
        //     // }else{}

        //     if ($scope.sele=="idd"){
        //         var jsun = {"id" : $scope.hit};
        //         $.post("<?php echo(base_url().'admin_controller/Admin_controller/getPBid')?>",jsun, function(data,status){console.log(data); $scope.fgh=data;})
        //     }else{console.log(newsearchval);  console.log($scope.sele);  console.log($scope.hit);}
        // }

        // // setInterval(
        // // function(){
            
        // // } 
        // // ,1000);



        // VIEW POST CONTROL
        $scope.viewp=
        function(id){
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

        // EDIT POST CONTROL
        $scope.load_edit=
        function(comment_id, id){
            console.log(comment_id + " : " + id);
            $.get("http://localhost/blog/admin_controller/Admin_controller/veditpost?comment_id="+comment_id, function(data, status){

              $("#content_disp").text(data.content);
              $("#title_disp").val(data.title);
              $("#who").val(data.who);
              $("#cmd_id").val(data.cmd_id);
              console.log(data);

            });
         } 


    }); 
</script>


                       
                    <!-- beginning of edit post modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Edit Post <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                    </div>
                                    <div class="modal-body">
                                       
                                    <?php
                                        echo('<form method="post" action="'.base_url().'admin_controller/Admin_controller/editpostdb" enctype="multipart/form-data" class="form-horizontal" align="center">');
                                        // foreach($send->result_array() as $row){
                                        // '.$row['post_title'].' '.$row['main_post'].' '.$row['who_made_post']. '.$row['comment_id'].'
                                          
                                    ?>

                                                <div class="form-group">
                                                    <label for="text1" class="col-sm-2 control-label">POST TITLE</label>
                                                    <div class="col-sm-10">
                                                        <input id="title_disp" type="text" name="title" class="form-control" id="text1"  required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-2 control-label">CONTENT</label>
                                                    <div class="col-sm-10 show">
                                                        <textarea id="content_disp" name="main" rows="10" cols="100" required/>
                                                            
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="text1" class="col-sm-2 control-label">UPLOAD FILE</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                                        <input id="who" type="hidden" name="who" >
                                                        <input id="cmd_id" type="hidden" name="comment_id">
                                                    </div>
                                                </div>
                                                   
                                            
                                        
                                   
                                                                         
                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                            <button type="submit" class="btn bg-success btn-wide btn-rounded"><i class="fa fa-check"></i>Commit</button>
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end of edit post modal -->

                    <!-- view post modal -->

                        <div class="modal fade modal-full-screen" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal9Label">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modal9Label">View Post <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                    </div>
                                    <div class="modal-body">
                                       

                            <?php 
                            
                                echo ('
                                    <div class="blog-item" align="center" style="padding: 30px;">
                                        <!-- Date -->
                                        <div class="blog-item-title font-alt">
                                            <span id="date" class="date-num" align="right"> </span>
                                            <!-- Post Title -->
                                        <h2  class="blog-item-title font-alt"><a href="blog-single-sidebar-right.html" id="title"> </a></h2>
                                        </div>
                                        
                                        
                                        <!-- Author, Categories, Comments -->
                                        <div class="blog-item-data">
                                            <i class="fa fa-user"></i><span id="who"> </span>
                                            
                                            <span class="separator">&nbsp;</span>
                                            <a href="#"><i  class="fa fa-comments"></i><span id="commentnum"> </span> Comments</a>
                                        </div>
                                        
                                        <!-- Image -->
                                        <div class="blog-media">
                                            <a href="blog-single-sidebar-right.html"><img id="pic" style="width:320px; height:240px;" src="" alt="" /></a>
                                        </div>
                                        
                                        <!-- Text Intro -->
                                        <div class="blog-item-body">
                                            <p id="main"> </p>
                                        </div>
                                    
                                    
                                    </div>

                                ');           
                            ?>



                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                           <!--  <button type="button" class="btn bg-success btn-wide btn-rounded"><i class="fa fa-check"></i>Save</button> -->
                                        </div>
                                        <!-- /.btn-group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of view post modal -->

                    </div>
                    <!-- /.main-page -->

