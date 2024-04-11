<?php include('header.php');?>
<?php include('connection.php');?>

<?php

if(isset($_GET['user'])){
    $id = $_GET['user'];
}

$query="DELETE  FROM register where user= '$user' ";
$result= mysqli_query($conn, $query);

if(!$result){
    die("query failed:" .mysqli_error($conn));
}
else{
    header('location:userList.php?delete_msg=You have successfully deleted the record');



}

 
?>