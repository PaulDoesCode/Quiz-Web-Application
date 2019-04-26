<!DOCTYPE html>

<html lang="en">

<!-- This is the page admin users use to add new questions to the system -->
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
    <link rel="stylesheet" href="AddQuestion.css">
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
                    Add Question
                </h2>
            </span>
        <span id="usersectionicon">
                <i class="fas fa-user-cog"></i>
            </span>
        <div class="newquestionform">
        <form action="" method = "post">
            <label for="Question" autocomplete="off"><b>Question</b></label>
            <input type="text" placeholder="Enter Question" name="question" required>
            <br>
            <label for="AA" autocomplete="off"><b>Answer A</b></label>
            <input type ="text" placeholder="Enter Answer A " name = "aa" required>
            <br>
            <br>
            <label for="AB" autocomplete="off"><b>Answer B</b></label>
            <input type ="text" placeholder="Enter Answer B " name = "ab" required>
            <br>
            <br>
            <label for="AC" autocomplete="off"><b>Answer C</b></label>
            <input type ="text" placeholder="Enter Answer C " name = "ac" required>
            <br>
            <br>
            <label for="AD" autocomplete="off"><b>Answer D</b></label>
            <input type ="text" placeholder="Enter Answer D " name = "ad" required>
            <br>
            <br>
            <label for="CA" autocomplete="off"><b>Correct Answer</b></label>
            <select name="ca">
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>
                <option value="4">D</option>
            </select>
            <br>
            <br>

            <?php

            try{
                $host = "localhost" ;
                $username = "root" ;
                $pass = "" ;
                $database = "ip2";
                $dsn = "mysql:$host; dbname=$database" ;


                $conn = new PDO($dsn, $username, $pass);
            }catch (PDOException $e) {echo $e ; }





            $query = "select * from ip2.category";



            try{
                $data = $conn->prepare($query);    // Prepare query for execution
                $data->execute();// Execute (run) the query

                $cats = $data->fetchAll();


            } catch(Exception  $ex) {echo $ex ; }
            ?>
            <label for="Category" autocomplete="off"><b>Category</b></label>
            <select name = "category">
                <?php

                foreach($cats as $cat) : ?>

                    <option><?php echo $cat["category"];?></option>

                <?php endforeach ?>



            </select>

            <br>
            <br>

            <button type="submit" name = "submit">Add Question</button>






        </form>
        </div>
    </div>
    <form action="Qman.php" method="post">
        <input class="previousbutton" type="submit" value="Previous Page" />
    </form>
    <form action="CategoriesLanding.php" method="post">
        <input class="returnbutton" type="submit" value="Return to Home Page" />
    </form>
</div>




</body>




<?php
if(isset($_POST["submit"]))
{
   
		
	try {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
        $sql = "INSERT INTO ip2.question (question,AA,AB,AC,AD,CA,category) VALUES ('".$_POST["question"]."','".$_POST["aa"]."','".$_POST["ab"]."','".$_POST["ac"]."','".$_POST["ad"]."','".$_POST["ca"]."','".$_POST["category"]."')" ;
        if ($conn->query($sql)) {
            echo "<script type= 'text/javascript'>alert('Question successfully added!');</script>";
			header("Location: CategoriesLanding.php");
        }
        else{
            echo "<script type= 'text/javascript'>alert('Failed to add question.');</script>";
        }
		
	} catch(PDOException $p) {echo $p ; }


    

}


?>


</html>