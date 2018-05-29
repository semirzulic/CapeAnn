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
                            <h1><strong>Welcome Admin</strong> </h1>
                            <div class="description">
                            	<p>
	                            	Please add new book to   <strong>"CapeAnn library"</strong>   <strong> Enjoy </strong></a>
                            	</p>
                            </div>
                            <div>
                            	<h3><a href="admin.php"><strong class="bg-primary">Go back to library</strong></a></h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-sm-8 col-sm-offset-2">

								   <div class="form-bottom">
				                    <form role="form" action="includes/add.inc.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="book-name">Name of the Book</label>
				                        	<input type="text" name="book-name" placeholder="Name of the Book" class="form-control" id="book-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="author-name">Author name</label>
				                        	<input type="text" name="author-name" placeholder="Author name..." class="form-control" id="author-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="genre-book">Genre</label>
				                        	<input type="text" name="genre-book" placeholder="Genre" class="form-control" id="genre-book">
				                        </div>
                                            <button type="submit" name="submit" class="btn">Add Book</button>
                                    </form>
				                        
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