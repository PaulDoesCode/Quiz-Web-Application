<!DOCTYPE html>

<html lang="en">

<!-- This is the page regular users are redirected to upon login -->
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
    <link rel="stylesheet" href="LandingPage.css">
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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <!-- Sign out button -->
        <form action = "IP2HomePage.php">
            <input class="signoutbutton" type = "submit" value="Sign Out"/>
        </form>
        <div class="container">
            <?php
            $host = "localhost" ;
            $username = "root" ;
            $pass = "" ;
            $database = "ip2";
            $dsn = "mysql:$host; dbname=$database" ;

            $conn = new PDO($dsn, $username, $pass);	
			

            $query = "select * from ip2.category";

            try{
                $data = $conn->prepare($query);     // Prepare query for execution
                $data->execute();                   // Execute (run) the query

                $cats = $data->fetchAll();

            } catch(Exception  $ex) {echo $ex ; }
            ?>

            <!-- Quiz section -->
            <div class="usersection">
                    <span id="usersectionheading">
                        <h2>
                            Quizzes
                        </h2>
                    </span>
                <span id="usersectionicon">
                        <i class="fas fa-question-circle"></i>
                    </span>
                <!-- Description of leaderboard section -->
                <span id="usersectiontext">
                        <p>
                            Choose from one of our quiz categories to get started!</br>
                            Options are: Film/TV, Geography, History, Music, Science.
                        </p>
                    </span>
                <!-- Selecting quiz -->
                <form action="quizU.php" method="post" >
                    <select id="make" name="make">
                        <?php
                        foreach($cats as $cat) : ?>
                            <option <?php echo $cat['category'];?>"><?php echo $cat["category"];?></option>
                        <?php endforeach ?>
                    </select>
                    <button type="submit" name="submit" value= "submit">Take Quiz</button>
                </form>
            </div>

            <!-- Leaderboard section -->
            <div class="usersection">
                    <span id="usersectionheading">
                        <h2>
                            Leaderboards
                        </h2>
                    </span>
                <span id="usersectionicon">
                        <i class="fas fa-award"></i>
                    </span>
                <!-- Description of leaderboard section -->
                <span id="usersectiontext">
                        <p>
                            Check out the all-time overall global rankings, or check out</br>
                            leaderboards for each individual category.
                        </p>
                    </span>
                <!-- Global rankings -->
                <form action = "rankingu.php" >
                    <input type = "submit" value= "Global Rankings">
                </form>

                <?php
                $host = "localhost" ;
                $username = "root" ;
                $pass = "" ;
                $database = "ip2";
                $dsn = "mysql:$host; dbname=$database" ;

                $conn = new PDO($dsn, $username, $pass);

                $query = "select * from ip2.category";

                try{
                    $data = $conn->prepare($query);     // Prepare query for execution
                    $data->execute();                   // Execute (run) the query

                    $cats = $data->fetchAll();


                } catch(Exception  $ex) {echo $ex ; }
                ?>

                <!-- Scores per category (individual leaderboards for each category) -->
                <form action="scoreperCU.php" method="post" >
                    <select id="score" name="score">
                        <?php
                        foreach($cats as $cat) : ?>
                            <option><?php echo $cat["category"];?></option>
                        <?php endforeach ?>
                    </select>
                    <button type="submit" name="submit" value= "submit">Go to Leaderboard</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

