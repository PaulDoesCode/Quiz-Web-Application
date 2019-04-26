<?php

			$host = "localhost" ;
            $username = "root" ;
            $pass = "" ;
            $database = "ip2";
            $dsn = "mysql:$host; dbname=$database" ;


            $conn = new PDO($dsn, $username, $pass);
			
			
if(isset($_POST["submit"]))
{
	
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this
        $sql = "Delete From ip2.question Where question.question = '".$_POST["question"]."'";
        if ($conn->query($sql)) {
			
            echo "<script type= 'text/javascript'>alert('Question successfully deleted!');</script>";
			header("Location: CategoriesLanding.php");
        }
        else


            echo "<script type= 'text/javascript'>alert('Failed to delete question.');</script>";
        }

		 
		 ?>