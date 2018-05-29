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
                            <h1><strong>Welcome Client To Our Library in CapeAnn</strong> </h1>
                            <div class="description">
                            	<p>
	                            	This is a page about   <strong>"CapeAnn library"</strong>  and the books we have in store for you!! <strong> Enjoy </strong></a>
                            	</p>

                            	
                            </div>
                            

                          

                        </div>
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-sm-8 col-sm-offset-2">

								<table class="table table-hover">
								  <thead>
								    <tr class="bg-warning">
								      
								      <th scope="col" class="text-primary">Title of the Book</th>
								      <th scope="col" class="text-primary">Author of the Book</th>
								      <th scope="col" class="text-primary">Genre of the Book</th>
								      
								    </tr>
								  </thead>
								  <tbody>
								   <?php
									

									$result = mysqli_query($conn,"SELECT * FROM books");


									

									while($row = mysqli_fetch_array($result))
									{
									echo "<tr>";
									echo "<td class='bg-warning'>" . $row['title'] . "</td>";
									echo "<td class='bg-warning'>" . $row['author'] . "</td>";
									echo "<td class='bg-warning'>" . $row['genre'] . "</td>";
									
									echo "</tr>";
									}
									


								


									
                                        

									mysqli_close($conn);
									?>
								  </tbody>
								</table>
								<div>
									<form action="search.php" method="POST">
	                        			<input type="text" name="search" placeholder="Search by title or author">
	                        			<button type="submit" name="submit-search" class="btn btn-dark">Search</button>
	                        		</form>';
								</div>


								  <div>
	                        		<form action="includes/logout.inc.php" method="POST">
	                        			<button type="submit" name="submit" class="btn btn-dark">Logout</button>
	                        		</form>';
                        		
                        		  </div>


                        	

				       </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

<?php

    include_once 'includes/foot.inc.php';

?>