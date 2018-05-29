<?php

    include_once 'includes/head.inc.php';

?>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Welcome to CapeAnn</strong> </h1>
                            <div class="description">
                            	<p>
	                            	This is a page about   <strong>"CapeAnn library"</strong>  Thank you for visting!! <strong> Enjoy </strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-sm-8 col-sm-offset-2">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Log in now</h3>
	                            		<p>Fill in the email and password below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                           
                                <div class="form-bottom">
				                    <form role="form" action="includes/login.inc.php" method="post" class="registration-form">
				                    
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
                                        
				                        <button type="submit" name="submit" class="btn">Log in!</button>

				                    </form>
				                    

				                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Don't have an account? </h3>
                                            <p><a href="signup.php"><strong>Sign up here !</strong></a></p>
                                        </div>
                                    
                                    </div>
			                    </div>
                                
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

<?php

    include_once 'includes/foot.inc.php';

?>