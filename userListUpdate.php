<?php include('header.php');?>
<?php include('connection.php');?>

<?php

function display() {
    if(isset($_GET['user'])){
        $user = $_GET['user'];
     
    
    
        $query="SELECT * FROM register where user= '$user' ";
        $result= mysqli_query($conn, $query);
    
        if(!$result){
            die("query failed:" .mysqli_error($conn));
        }
        else{
    
            $row = mysqli_fetch_assoc($result);
            echo "
            <form action =/"userListUpdate.php?user_new=<?php echo $user; ?>/" method=/"POST/">
        <label for=/"user/">user:</label><br>
        <input type="text" id="user" name="user" value ="$row['user']"><br>
    
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email" value ="<?php echo isset ($row['email']) ?>"><br>
    
        <label for="password">password:</label><br>
        <input type="text" id="password" name="password" value ="<?php echo isset ($row['password']) ?>"><br>
    
        <label for="confirmpassword">confirmpassword:</label><br>
        <input type="text" id="confirmpassword" name="confirmpassword" value ="<?php echo isset ($row['confirmpassword']) ?>"><br>
    
    
    
    
    
        <input type="submit" class="btn btn-success" name="Update_user" value="UPDATE">
    
    </form> ":
            
                 
        }


           
        } 
}


    
?>


<?php

   if(isset($_POST['Update_user'])){

    if(isset($_GET['user_new'])){
        $usernew = $_GET['user_new'];
    }

    $user =$_POST['user'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];
    

    $query = "UPDATE register 
    SET user = '$user',email = '$email', password = '$password', confirmpassword ='$confirmpassword'
     WHERE user ='$usernew' ";
    $result =mysqli_query($conn, $query);

    if(!$result){
        die("query failed" .mysqli_error($conn));
    }
    else{
        header('location:userList.php?update_msg=You have successfully updated the data');
    }
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

<!-- <form action ="userListUpdate.php?user_new=<?php echo $user; ?>" method="POST">
    <label for="user">user:</label><br>
    <input type="text" id="user" name="user" value ="<?php echo isset($row['user']) ? $row['user'] : '' ?>"><br>

    <label for="email">email:</label><br>
    <input type="text" id="email" name="email" value ="<?php echo isset ($row['email']) ?>"><br>

    <label for="password">password:</label><br>
    <input type="text" id="password" name="password" value ="<?php echo isset ($row['password']) ?>"><br>

    <label for="confirmpassword">confirmpassword:</label><br>
    <input type="text" id="confirmpassword" name="confirmpassword" value ="<?php echo isset ($row['confirmpassword']) ?>"><br>





    <input type="submit" class="btn btn-success" name="Update_user" value="UPDATE">

</form> -->
    
</body>
</html>






<?php include('footer.php');?>