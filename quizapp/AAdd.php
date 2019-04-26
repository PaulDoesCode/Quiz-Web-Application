<!DOCTYPE html>

<html lang="en">

<!-- This is the page admin users use to add new admin users to the system -->
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
    <link rel="stylesheet" href="NewAdminPage.css">
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
                Add New Admin
            </h2>
        </span>
        <span id="usersectionicon">
            <i class="fas fa-user-cog"></i>
        </span>
        <form action="" method = "post">
            <div class="newadminform">
                <label for="fname" autocomplete="off">
                    <b>
                        First Name
                    </b>
                </label>
                <input type="text" placeholder="Enter First Name" name="fname" required>
                <br>
                <br>
                <label for="sname" autocomplete="off">
                    <b>
                        Surname
                    </b>
                </label>
                <input type="text" placeholder="Enter Surname" name="sname" required>
                <br>
                <br>
                <label for ="email" autocomplete="off">
                    <b>
                        Email
                    </b>
                </label>
                <input type="text" placeholder="Enter Email Address" name="email" required>
                <br>
                <br>
                <label for="uname" autocomplete="off">
                    <b>
                        Username
                    </b>
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <br>
                <br>
                <label for="hyperlink" autocomplete="off">
                    <b>
                        Password
                    </b>
                </label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <br>
                <button type="submit" name = "submit">Create account</button>
            </div>
        </form>
        <?php



        if(isset($_POST["submit"]))
        {
            try {

                $host = "localhost" ;
                $username = "root" ;
                $pass = "" ;
                $database = "ip2";
                $dsn = "mysql:$host; dbname=$database" ;


                $conn = new PDO($dsn, $username, $pass);
                $adm = 1 ;


                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
                $sql = "INSERT INTO ip2.quizuser (fname,sname,email,username,pass,admin) VALUES ('".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["email"]."','".$_POST["uname"]."','".$_POST["password"]."','".$adm."')";
                if ($conn->query($sql)) {
                    echo "<script type= 'text/javascript'>alert('Registration successful!');</script>";
                    header("Location: CategoriesLanding.php");}
                else{
                    echo "<script type= 'text/javascript'>alert('Registration failed.');</script>";
                }



            } 	catch(PDOException $e) {
                echo $e->getMessage();

            }

        }


        ?>
    </div>
        <form action="CategoriesLanding.php" method="post">
            <input class="returnbutton" type="submit" value="Return to Home Page" />
        </form>
</div>
</body>

</html>