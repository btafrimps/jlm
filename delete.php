<?php include('header.php');?>
<?php include('connection.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

$query="DELETE FROM signin where id= '$id' ";
$result= mysqli_query($conn, $query);

if(!$result){
    die("query failed:" .mysqli_error($conn));
}
else{
    header('location:practice.php?delete_msg=You have successfully deleted the record');



}
}
?>