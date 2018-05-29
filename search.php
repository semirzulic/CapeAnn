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
                            <h1><strong>Welcome To Our Search Engine</strong> </h1>
                            <div class="description">
                            	<p>
	                            	This is the result of your search of   <strong>"CapeAnn library"</strong>   <strong> Enjoy </strong></a>
                            	</p>
                            </div>
                            <div>
                            	<h3><a href="client.php"><strong class="bg-primary">Go back to library</strong></a></h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                  
                        <div class="col-sm-8 col-sm-offset-2">

								   <div class="form-bottom">

                                    <table class="table table-hover">
                                  <thead>
                                    <tr class="bg-warning">
                                      
                                      <th scope="col" class="text-primary">Title of the Book</th>
                                      <th scope="col" class="text-primary">Author of the Book</th>
                                      <th scope="col" class="text-primary">Genre of the Book</th>
                                   
                                    </tr>
                                  </thead>
                                  <tbody>
				                    
                                    <?php if (isset($_POST['submit-search'])) {
                                        $search = mysqli_real_escape_string($conn, $_POST['search']);

                                        $sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%' ";
                                        $result = mysqli_query($conn, $sql);
                                        $queryResult = mysqli_num_rows($result);


                                        if ($queryResult > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td class='bg-warning srch'>" . $row['title'] . "</td>";
                                                echo "<td class='bg-warning srch'>" . $row['author'] . "</td>";
                                                echo "<td class='bg-warning srch'>" . $row['genre'] . "</td>";
                                                
                                                echo "</tr>";

                                                
                                            }
                                        }else{
                                            echo "<p class='bg-warning'>There are no results matching your search</p>";
                                        }

                                    }


                                    ?>

                                </tbody>
                            </table>
                                        
                                    
                                   
			                       </div>

				       </div>
                    </div>
                    
                </div>
            </div>
            
        </div>




<?php

    include_once 'includes/foot.inc.php';

?>