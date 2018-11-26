                   




                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                    <p class="sub-title">welcome Admin!</p>
                                </div>
                                <!-- /.col-sm-6 -->
                                <!-- <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div> -->
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <!-- <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
                                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                                        <li class="active">Dashboard</li>
                                    </ul>
                                </div> -->
                                <!-- /.col-sm-6 -->
                                <!-- <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div> -->
                                <!-- /.col-sm-6 -->
                         <!--    </div> -->
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->


                <?php
                    $numberrow = $numpost->num_rows();
                    $numbercom = $numcomm->num_rows();
                    $nrcomm = $rcomm->num_rows();
                    $pmvp = "";
                    if($mvp->num_rows() > 1){
                        if( ($mvp->result_array()[0]['mvp'] ==  $mvp->result_array()[1]['mvp'])){
                            $pmvp = "None";
                        }else{
                            $pmvp = $mvp->result_array()[0]['post_title'];
                        }
                    }else{
                        
                    }
                    
                    echo('


                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter">'.$numberrow.'</span>
                                            <span class="name">Total Number of Post</span>
                                            <span class="bg-icon"><i class="fa fa-comments"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-primary" href="#"&gt;
    &lt;span class="number counter"&gt;1,411&lt;/span&gt;
    &lt;span class="name"&gt;Comments&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-comments"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $(".counter").counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <span class="number counter">'.$pmvp.'</span>
                                            <span class="name">Most Viewed Post</span>
                                            <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-danger" href="#"&gt;
    &lt;span class="number counter"&gt;322&lt;/span&gt;
    &lt;span class="name"&gt;Total Tickets&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-ticket"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $(".counter").counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <span class="number counter">'.$numbercom.'</span>
                                            <span class="name">Total Number of Comments</span>
                                            <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-warning" href="#"&gt;
    &lt;span class="number counter"&gt;5,551&lt;/span&gt;
    &lt;span class="name"&gt;Bank Credits&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-bank"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $(".counter").counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <span class="number counter">'.$nrcomm.'</span>
                                            <span class="name">Recently Added Comment</span>
                                            <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-success" href="#"&gt;
    &lt;span class="number counter"&gt;16,710&lt;/span&gt;
    &lt;span class="name"&gt;Thumbs Up&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $(".counter").counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->
                    ');

                ?>
                   

                    
                    </div>
                    <!-- /.main-page -->