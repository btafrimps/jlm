<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="jlm";

//create connection to the db
$conn = mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn){
       die("connection failed:");
}
// echo "successful";    

?>