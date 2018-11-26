



                    <div class="row" align="center">
                        <div class="col-md-12" align="center" >
                            <div class="panel" align="center">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h3>COMMENT SECTION<small>ADD COMMENT</small></h3>
                                    </div>
                                </div>
                                <div class="panel-body" align="center">

                                    <form method="post" action="<?php echo (base_url());?>admin_controller/Admin_controller/addcommdb" class="form-horizontal" align="center">
                                        <div class="form-group">
                                    		<label for="email2" class="col-sm-2 control-label">COMMENT</label>
                                    		<div class="col-sm-10">
                                    			<textarea name="message" rows="10" cols="30">
                                        
                                                </textarea>
                                    		</div>
                                    	</div>
                                        <div class="form-group">
                                    		<label for="date" class="col-sm-2 control-label">DATE</label>
                                    		<div class="col-sm-10">
                                    			<input type="date"  name="date" class="form-control" id="date">
                                                <input type="hidden" name="admin_name" value="Okougbo Ibhadogiemu E.">
                                    		</div>
                                    	</div>
                                    	<div class="form-group">
                                    		<div class="col-sm-offset-2 col-sm-10">
                                    			<button type="submit" class="btn btn-primary">Submit</button>
                                    		</div>
                                    	</div>
                                    </form>

                                    <div class="col-md-12 mt-15 src-code">
                                        <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
&lt;div class="form-group"&gt;
&lt;label for="text1" class="col-sm-2 control-label"&gt;Text&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="text" class="form-control" id="text1" placeholder="Input type text"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="email2" class="col-sm-2 control-label"&gt;Email&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="email" class="form-control" id="email2" placeholder="Input type Email"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="pass1" class="col-sm-2 control-label"&gt;Password&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="password" class="form-control" id="pass1" placeholder="Input type password"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="date" class="col-sm-2 control-label"&gt;Date&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="date" class="form-control" id="date"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="datetimelocal" class="col-sm-2 control-label"&gt;Datetime&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="datetime-local" class="form-control" id="datetimelocal"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="color" class="col-sm-2 control-label"&gt;Color&lt;/label&gt;
&lt;div class="col-sm-10"&gt;
&lt;input type="color" class="form-control" id="color"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;div class="col-sm-offset-2 col-sm-10"&gt;
&lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;
                                        </code></pre>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->