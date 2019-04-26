<!DOCTYPE html>

<html lang="en">

<!-- This is the initial page of the web app -->
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
    <link rel="stylesheet" href="quizhome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<!-- Body section -->
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

    <!-- Jumbotron containing text and background image -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="jumbotrontext">
                <h1>
                    Welcome
                </h1>
                <p>
                    Ready to quiz? Sign in.
                </p>
                <p>
                    Don't have an account? Register.
                </p>
            </div>
            <p>
                <!-- Register button -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">
                    Register
                </button>
                <!-- Login button -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signInModal">
                    Sign in
                </button>
            </p>

            <!-- Modals for displaying register/login forms -->
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">CREATE AN ACCOUNT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id = "registerForm" action="RegCheck.php" method = "post">
                            <div class="modalcontainer">
                                    <label for="fname" autocomplete="off"><b>First Name</b></label>
                                    <input type="text" placeholder="Your First Name" name="fname" required>
                                    </br>
                                    </br>
                                    <label for="sname" autocomplete="off"><b>Surname</b></label>
                                    <input type="text" placeholder="Your Surname" name="sname" required>
                                    </br>
                                    </br>
                                    <label for ="email" autocomplete="off"><b>Email</b></label>
                                    <input type="text" placeholder="Your Email Address" name="email" required>
                                    </br>
                                    </br>
                                    <label for="uname" autocomplete="off"><b>Username</b></label>
                                    <input type="text" placeholder="Your Username" name="uname" required>
                                    </br>
                                    </br>
                                    <label for="hyperlink" autocomplete="off"><b>Password</b></label>
                                    <input type="password" placeholder="Your Password" name="password" required>
                                    </br>
                                    </br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" name = "submit">Sign up</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="signInModalLabel">SIGN IN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id = signInForm action="Redirect.php" method = "post">
                            <div class="modal-body">
                                <label for="uname" autocomplete="off"><b>Username</b></label>
                                <input type="text" placeholder="Your Username" name="unamee" required>
                                </br>
                                </br>
                                <label for="hyperlink" autocomplete="off"><b>Password</b></label>
                                <input type="password" placeholder="Your Password" name="passworde" required>
                                </br>
                                </br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" name="submit" value= "submit">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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
		$adm = 0 ;

		$_SESSION['usrname'] = $_POST['uname'] ;
		
		
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
                $sql = "INSERT INTO ip2.userr (fname,sname,email,username,pass,admin) VALUES ('".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["email"]."','".$_POST["uname"]."','".$_POST["password"]."','".$adm."')";
                if ($conn->query($sql)) {
				echo "<script type= 'text/javascript'>alert('Registration Successful!');</script>"; }
                else{
                    echo "<script type= 'text/javascript'>alert('Failed to register user.');</script>";
                }
		
      
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}

?>

</html>