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
	                            	This is a page about   <strong>"CapeAnn library"</strong>  Thank you for visting!! <strong> Enjoy </strong>
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-sm-8 col-sm-offset-2">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="includes/signup.inc.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
                                          <div class="form-group">  
                                            <p class="bg-info">Please select your preferred user role:</p>        
                                         <div class="form-check">
                                          <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Admin" checked>
                                          <label class="form-check-label  " for="Admin">
                                            Admin
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="radio" id="Client" value="Client">
                                          <label class="form-check-label " for="Client">
                                            Client
                                          </label>
                                        </div>
                                        </div>
                                              
                                                
                                                 
                                             
				                        <button type="submit" name="submit" class="btn">Sign me up!</button>
				                    </form>
                                        <div class="bot-content">
                                            <div class="text">
                                                <h3 class="bg-info">Already have an account? </h3>
                                                <p><a href="login.php"><strong>Log in here !</strong></a></p>
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