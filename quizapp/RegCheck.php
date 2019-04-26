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
                $sql = "INSERT INTO ip2.quizuser (fname,sname,email,username,pass,admin) VALUES ('".$_POST["fname"]."','".$_POST["sname"]."','".$_POST["email"]."','".$_POST["uname"]."','".$_POST["password"]."','".$adm."')";
                if ($conn->query($sql)) {
				echo "<script type= 'text/javascript'>alert('Registarttion Succesfiull');</script>"; 
				header("Location: IP2HomePage.php");} 
                else{
                    echo "<script type= 'text/javascript'>alert('NO REGISTERED');</script>";
                }
		
      
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

}

?>