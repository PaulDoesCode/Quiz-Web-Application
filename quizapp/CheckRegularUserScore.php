<!DOCTYPE html>

<html lang="en">

<!-- This is the quiz results page for checking regular user scores after a quiz -->
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
    <link rel="stylesheet" href="QuizResult.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

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

    <div class="quizresult">
        <div class="quizresulttext">
            <?php

            session_start();

            try {
                $host = "localhost";
                $username = "root";
                $pass = "";
                $database = "ip2";
                $dsn = "mysql:$host; dbname=$database";


                $conn = new PDO($dsn, $username, $pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this

                        $CON = 0 ;

                        if(isset($_POST['submit'])){
                        if(!empty($_POST['quiz'])) {

                        // Counting number of checked checkboxes.
                        $checked_count = $_POST['quiz'] ;
                        $user = $_SESSION['user'] ;
                        $catt = $_SESSION['u'];

                        for($d = 0 ; $d <=9 ; $d ++)
                        {

                            $thing =$user[$d][0] ;


                            $sql = "select CA from ip2.question where question.question = '$thing'" ;
                            $data = $conn->prepare($sql);    // Prepare query for execution
                            $data->execute();// Execute (run) the query
                            $cats = $data->fetchAll();

                            foreach($cats as $cat) :

                            $cat["CA"];
                            if($cat[0] == $checked_count[$d])
                            {
                                $CON ++ ;
                            }

                            endforeach ;





                        }

                        }
                        }

                        try {

                        $un = $_SESSION['usrname'] ;
                        echo ($un." answered  ".$CON."  out of 10 questions correctly!" );
                        $sql = "Select Score from ip2.quizuser where username = '$un'";
                        $result = $conn->query($sql) ;
                        foreach($result as $cat2) :

                        $score = $cat2[0] + $CON ;

                        endforeach ;

                        $sql2 = "UPDATE ip2.quizuser SET quizuser.Score = '$score' where quizuser.username = '$un'";
                        $result2 = $conn->query($sql2) ;

                        }catch(Error $e) {echo $e ;}

                        $sql2 = "Select * from ip2.usercategory where usercategory.`user` = '$un' AND usercategory.category = '$catt'";
                        $result2 = $conn->query($sql2) ;

                        if ($result2->rowCount()  <= 0)
                        {
                            $sql1b = "Select score from ip2.usercategory where `user` = '$un' AND category = '$catt'";
                        $result1b = $conn->query($sql1b) ;

                        foreach($result1b as $cat3) :

                        $scoreC = $cat3[0] + $CON ;

                        endforeach ;

                            $sql3a = "Insert into ip2.usercategory (category,score,`user`) VALUES ('$catt','$scoreC','$un')" ;
                            $result3a = $conn->query($sql3a) ;
                            $result3a->execute();
                        }
                        else
                        {
                            $sql1b = "Select score from ip2.usercategory where `user` = '$un' AND category = '$catt'";
                        $result1b = $conn->query($sql1b) ;

                        foreach($result1b as $cat3) :

                        $scoreC = $cat3[0] + $CON ;

                        endforeach ;

                            $sql3b = "UPDATE ip2.usercategory SET usercategory.score = '$scoreC' where usercategory.`user` = '$un' AND usercategory.category = '$catt'" ;
                            $result3b = $conn->query($sql3b) ;
                            $result3b->execute();

                        }

            } catch(EXCEPTION $n ) {echo $n;}

            ?>
                <form action="userLanding.php" method="post">
                    <input type="submit" value="Return to Home Page" />
                </form>
        </div>
    </div>

</body>
</html>
