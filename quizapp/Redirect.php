<?php

session_start();

if(isset($_POST['submit']))
	{

    try {
    $host = "localhost";
    $username = "root";
    $pass = "";
    $database = "ip2";
    $dsn = "mysql:$host; dbname=$database";


    $conn = new PDO($dsn, $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
    $u = $_POST["unamee"];
    $p = $_POST["passworde"];
	
	

        $sql = "Select username , pass , Admin from ip2.quizuser where username = '$u'  AND pass = '$p'";
        $result = $conn->query($sql) ;
		
		
		$_SESSION['usrname'] = $u ;

        


     if ($result->rowCount()  <= 0) {
		 echo "Error";
         
     } else {
		 //put if statement for admin user 
		 
		 foreach($result as $res) :
				
				$cat["Admin"];
				
				
				if($res[2] == 1
			)
				{
					header("Location: CategoriesLanding.php");
				}
				
				else { header("Location: userLanding.php")  ; }
				
				endforeach ;
		
     }

 } catch(Error $e) {echo $e ;}






}





?>