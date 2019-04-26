<!DOCTYPE html>

<html lang="en">
<?php session_start() ;?>
<!-- This is the page admin users use to remove a category from the system -->
<!-- Head section -->
<head>
    <meta charset="UTF-8">
    <!-- Title -->
    <title>FDM Quizzes</title>
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Stylesheets and scripts used -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="AddDelCategory.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<!-- Navbar with logo -->
<nav class="navbar navbar-dark bg-dark navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- FDM logo with PHP to ensure the GIF plays whenever the page is reloaded -->
            <a class="navbar-brand">
                <img alt="FDM Logo" id="fdmlogo" src="fdmlogo.gif?<?php echo time();?>">
            </a>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="usersection">
            <span id="usersectionheading">
                <h2>
                    Delete Category
                </h2>
            </span>
        <span id="usersectionicon">
                <i class="fas fa-user-cog"></i>
            </span>
        <form action="" method = "post">
            <label for="Category" autocomplete="off"><b>Category</b></label>
  
            <?php
			


            $host = "localhost" ;
            $username = "root" ;
            $pass = "" ;
            $database = "ip2";
            $dsn = "mysql:$host; dbname=$database" ;


            $conn = new PDO($dsn, $username, $pass);





            $query = "select * from ip2.category";



            try{
                $data = $conn->prepare($query);    // Prepare query for execution
                $data->execute();// Execute (run) the query

                $cats = $data->fetchAll();


           
            ?>
            <select name = "category">
                <?php

                foreach($cats as $cat) : ?>

                    <option><?php echo $cat["category"];?></option>

                <?php endforeach ?>



            </select>

            <br>
            <br>
            <button type="submit" name = "submit">Delete Category</button>
        </form>

        <?php
        if(isset($_POST["submit"]))
        {
				
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
            $sql = "Delete From ip2.category Where category.category = '".$_POST["category"]."'";
            $sql2 = "Delete from ip2.question Where question.category = '".$_POST["category"]."'";
			$sql3 = "Delete from ip2.usercategory Where usercategory.category = '".$_POST["category"]."'";
			
            if ($conn->query($sql2)) {
				$conn->query($sql3) ; 
                echo "<script type= 'text/javascript'>alert('Category successfully deleted!');</script>";
                $conn->query($sql) ;
				
			
					
                header("Location: CategoriesLanding.php");
				
            }
            else{
                echo "<script type= 'text/javascript'>alert('Failed to delete category.');</script>";
				
            } 
			
        }
		} catch(Exception  $ex) {echo $ex ; }
		
		
        ?>
    </div>
    <!-- Button to return to previous page -->
    <form action="catman.php" method="post">
        <input class="previousbutton" type="submit" value="Previous Page" />
    </form>
    <!-- Button to return to home page -->
    <form action="CategoriesLanding.php" method="post">
        <input class="returnbutton" type="submit" value="Return to Home Page" />
    </form>
</div>

</body>
</html>
