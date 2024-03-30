<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="jlm";

//create connection
$con = new mysqli($servername,$username,$password,$db_name, 3306);

//check connection
if($con->connect_error){
       die("connection failed:".$con->connect_error );
    }
   echo "connected successfully";    

?>