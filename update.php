<?php
    include 'includes/dbh.inc.php';
    include_once 'includes/head.inc.php';

$id = "";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

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
	                            	Please update existing book in  <strong>"CapeAnn library"</strong>   <strong> Enjoy </strong></a>
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
    				                 <?php
                                            
                                        $result = mysqli_query($conn,"SELECT * FROM books WHERE id = '$id'");

                                        while($row = mysqli_fetch_array($result)){

                                            echo '<form role="form" method="POST" action=" '.bookUpdate($conn). '"  class="registration-form">
                                           
                                                        <div>  
                                                            <input type="hidden"  name="id" value="'.$row['id'].'"  >
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="book-name">Name of the Book</label>
                                                            <input type="text" name="book-name" value="'.$row['title'].'" class="form-control" id="book-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="author-name">Author name</label>
                                                            <input type="text" name="author-name" value="'.$row['author'].'" class="form-control" id="author-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="genre-book">Genre</label>
                                                            <input type="text" name="genre-book" value="'.$row['genre'].'" class="form-control" id="genre-book">
                                                        </div>
                                                           <button type="submit" name="bookUpdate" class="btn">Update Book</button>
                                                </form>';
                                              }



                                          function bookUpdate($conn){
                                                if (isset($_POST['bookUpdate'])) {
                                                    $id = $_POST['id'];
                                                    $title = $_POST['book-name'];
                                                    $author = $_POST['author-name'];
                                                    $genre = $_POST['genre-book'];
                   
                                                                        
                    

                                                    $sql = "UPDATE books SET title = '$title', author = '$author', genre = '$genre' WHERE id = '$id'";
                                                    $result = $conn->query($sql);
                                                    header("Location: admin.php");
                                                    
                                                }

                                            
                                            }


                                     ?>
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