<!DOCTYPE html>

<html lang="en">

<!-- This is the quiz page for admin users -->
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
    <link rel="stylesheet" href="CategoryQuiz.css">
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
            <a class="navbar-brand" href="IP2HomePage.php">
                <img alt="FDM Logo" id="fdmlogo" src="fdmlogo.gif?<?php echo time();?>">
            </a>
        </div>
    </div>
</nav>

<!-- Card styling, this is where questions are displayed -->
<!-- Also where the PHP is to carry out quiz functionality -->
<form action="CheckAdminUserScore.php" method="post">
<div class="card">
<?php

session_start();

if(isset($_POST['submit'])) {
	
    $host = "localhost";
    $username = "root";
    $pass = "";
    $database = "ip2";
    $dsn = "mysql:$host; dbname=$database";

    $conn = new PDO($dsn, $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
    $u = $_POST["make"];
	$_SESSION['u'] = $_POST["make"];
	$u = $_SESSION['u'] ;

	$sql = "Select * from ip2.question where category = '$u' order by RAND() limit 10";
	$result = $conn->query($sql) ;

	if ($result->rowCount()  <= 0) {
		header("Location: CategoriesLanding.php");
	} else {
         $user = $result->fetchAll() ;
         for ($d = 0 ; $d <= 9; $d ++)
		 {	
		?>

        <?php $_SESSION['user'] = $user ; ?>
        <!-- Card header, where the actual question being asked is displayed -->
        <div class="card-header">
            <strong>
                <?PHP echo "Q".($d + 1).": " . $user[$d][0]; ?>
                <?php echo nl2br ("\n" ) ;
                echo nl2br ("\n" ) ;?>
                <?php for ($r = 1 ; $r <=4  ; $r ++)
                {
                    ?>
            </strong>
        </div>

    <!-- Card body, where the answer options for each question are displayed -->
        <div class="card-body">
            <input type = "radio" name="quiz[<?php echo $d ?>]" value = "<?php echo $r?>" checked = "checked">
            <?PHP
            echo $user[$d][$r];
            echo nl2br ("\n" ) ;    ?>

            <?php }
            echo nl2br ("\n" ) ;    ?>
        </div>
        <?php

		 }
		 ?>
</div>

<!-- Submit button -->
<input type="submit" name="submit" value="Finish Quiz">
</form>

        <?php

}
}

?>

</body>
</html>