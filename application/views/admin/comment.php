

<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">COMMENTS SECTION</h2>
                <p class="sub-title">Admin comment Platform</p>
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
    <section class="section" ng-app="myHHH" ng-controller="myThing" >
        <div class="container-fluid">

            
            </div>
            <!-- /.row -->


                <!-- comment admin view -->
            <div class="row">
                <div class="col-md-12 col-md-offset-0">

                    <div class="panel" >
                        <!-- <div class="row"> -->
                            <div class="panel-heading" >
                                <div class="panel-title row">
                                    <h5 class="col-sm-2">Comments Table</h5>

                                    <form class="col-sm-7" align="right">
                                      <input type="radio" ng-model="sele" value="date" checked> Date &nbsp
                                      <input type="radio" ng-model="sele" value="name"> Name &nbsp
                                      <input type="radio" ng-model="sele" value="post"> Post &nbsp
                                      <input type="radio" ng-model="sele" value="comment"> comment &nbsp 
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

                       <!--  </div> -->
                

                        <div class="panel-body p-20">

                        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Name of person that made comment</th>
                                    <th>Comment Made</th>
                                    <th>Post that comment Belongs TO</th>
                                    <th>Date Comment was Made</th>
                                    <th>View in full</th>
                                    <th>Reply</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>


                            <!-- add comments -->
                
                            <tbody >
                                <tr ng-repeat="x in fgh">
                                    <td>{{x.id}}</td>
                                    <td>{{x.made_by_who}}</td>
                                    <td>{{x.main_comm | limitTo:20}}</td>
                                    <td>{{x.comm_post_be | limitTo:20}}</td>
                                    <td>{{x.date_made}}</td>
                                    <td>
                                        <a href="<?php echo(base_url());?>admin_controller/Admin_controller/viewcomm?id={{x.id}}"><button type="button" class="btn btn-default border-info btn-rounded btn-wide">view</button>
                                        </a>
                                    </td>
                                    <td><button type="button" class="btn btn-success btn-rounded icon-only"><i class="fa fa-pencil"></i></button></td>
                                    <td>
                                        <a href="<?php echo(base_url());?>admin_controller/Admin_controller/deletecomm?comment_id={{x.comment_id}}&id={{x.id}}"><button type="submit" class="btn btn-danger btn-rounded icon-only"><i class="fa fa-trash-o"></i></button>
                                        </a>
                                    </td>
                                </tr>

                                <div class="pagnation" style=" background-color: grey; color: red; border-radius: 5px; padding: 0px; margin:0px;">
                                    <a href="" ng-click= "page(90)"><i class="fa fa-angle-left" ></i></a>
                                    <span ng-repeat="x in numArrayu"> <a href="" ng-click= "page(x.pag)" class="active" style="font-weight: 20px;" >{{x.i}}</a></span>
                                    <!-- <a href="" ng-click= "page(3)">2</a>
                                    <a href="" ng-click= "page(6)">3</a> -->
                                    <a class="no-active">...</a>
                                    <a href="" ng-click= "page(lass)">{{rlvar}}</a>
                                    <a href="" ng-click= "page(91)"><i class="fa fa-angle-right"></i></a>
                                </div>

                            </tbody>
                         </table>
                         <div class="row">
                            

                            
                        </div>

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

</div>
<!-- /.main-page -->


<script>
    console.log("oj");
    var app = angular.module('myHHH',[]);
    app.controller('myThing' , function($scope, $http, $interval){
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

        
            $interval(function (){$http.get("<?php echo(base_url());?>admin_controller/Admin_controller/comload").then(function (response){
            $scope.myData = response.data;
            chk = response.data;
            console.log(chk);
            console.log($scope.sele);
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
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getCBid')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="date"){
                var jsun = {"date" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getCBd')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="post"){
                var jsun = {"post" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getCBp')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="name"){
                var jsun = {"name" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getCBn')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
            }else if ($scope.sele=="comment"){
                var jsun = {"comment" : $scope.hit};
                $.post("<?php echo(base_url().'admin_controller/Admin_controller/getCBc')?>",jsun, function(data,status){console.log(data); $scope.fgg=data;})
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

    }); 
</script>