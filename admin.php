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
                            <h1><strong>Welcome Admin To Our Library in CapeAnn</strong> </h1>
                            <div class="description">
                            	<p>
	                            	This is a page about   <strong>"CapeAnn library"</strong>  and the books we have in store for you!! <strong> Enjoy </strong></a>
                            	</p>

                            	
                            </div>
                            <div>
                            	<h3 ><a href="add.php"><strong class="bg-primary">Add new Book</strong></a></h3>
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
								      <th scope="col" class="text-primary">Update</th>
								      <th scope="col" class="text-primary">Delete</th>
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
									echo "<td class='bg-warning'>
										<form action='update.php' method='POST'>
											<input type='hidden' name='id' value='".$row['id']."'>
											<input type='hidden' name='title' value='".$row['title']."'>
											<input type='hidden' name='author' value='".$row['author']."'>
											<input type='hidden' name='genre' value='".$row['genre']."'>
											 <a class='btn btn-primary button' href='update.php?id=".$row['id']."'>Update</a>	

										</form>

										</td>";
									echo "<td class='bg-warning'>
											<form action='".delete($conn)."' method='POST'>
											<input type='hidden' name='id' value='".$row['id']."'>
											<button class='btn btn-danger button' type='submit' name='bookDelete'>Delete</button>	

											</form>

	
										</td>";
									echo "</tr>";
									}
									echo "</table>";


									function delete($conn){
										if (isset($_POST['bookDelete'])) {
											$id = $_POST['id'];

											$sql = "DELETE FROM books WHERE id = '$id'";
											$result = $conn->query($sql);
											header("Location: admin.php");
										}

									
									}

									
                                        

									mysqli_close($conn);
									?>
								  </tbody>
								</table>

							<div>
                        		<form action="includes/logout.inc.php" method="POST">
                        			<button type="submit" name="submit" class="btn btn-warning">Logout</button>
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