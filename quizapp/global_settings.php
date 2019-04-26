<?php

$host = "localhost" ; 
$username = "root" ; 
$pass = "" ;
$database = "ip2";
$dsn = "mysql:$host; dbname=$database" ;



try{
 
  $conn = new PDO($dsn, $username, $pass);
 
 // display a message if connected to database successfully
 if($conn){
 echo "Connected to the <strong>$database</strong> database successfully!";
        }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}

?>
