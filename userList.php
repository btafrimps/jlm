<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userList</title>
    <link rel="stylesheet" href= https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css>
    <link rel="stylesheet" href="style.css">



</head>
<body>
    <h1 id="main_title"> JMLs DATABASE FOR USERS</H1>
    <div class="container">
<?php include('connection.php');?>
<div class="box1">
    <h2>ALL DATA</h2>
    <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD USER</button>-->
    <button onclick="location.href='practice.php';">Database for chefs/cooks</button>

</div>
<table class="table table-hover table-bordered table-striped table-fit">
    <thead>
        <tr>
            <th>user</th>
            <th>email</th>
            <th>password</th>
            <th>confirmpassword</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <!--start of php connection to db code-->
        <?php   

            $query="SELECT * FROM register ";
            $result= mysqli_query($conn, $query);

            if(!$result){
                die("query failed:" .mysqli_error());
            }
            else{

                while($row =mysqli_fetch_assoc($result)){

                    ?>

        <tr>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['confirmpassword']; ?></td>
            <td><a href="userListUpdate.php? id=<?php echo $row['user']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="userListDelete.php? id=<?php echo $row['user']; ?>" class="btn btn-danger">Delete</a></td>

        </tr>
        <?php
            }
        }
           
           ?>
        <!--end of php connection code-->







    </tbody>
</table>

<?php
if(isset($_GET['message'])){
    echo "<h5 style=color:red;>" .$_GET['message']."</h5>";
}
?>

<!--validation message for update_1-->
<?php
if(isset($_GET['update_msg'])){
    echo "<h5 style=color:green;>" .$_GET['update_msg']."</h5>";
}
?>


<!--validation for the insert-->
<?php
if(isset($_GET['insert_msg'])){
    echo "your data has been loaded successfully";
}
?>

<!--validation message for delete_1-->
<?php
if(isset($_GET['delete_msg'])){
    echo "<h5 style=color:red;>" .$_GET['delete_msg']."</h5>";
}
?>



<!-- Modal from bootstrap -->
<form action="insert.php" method="post" enctype="multipart/form-data" >
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD USER</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="form" class="form-container">
                        <span class="close-btn" onclick="toggleForm()">X</span>
                        <h2>Add User</h2>


                        <label for="user">user:</label><br>
                        <input type="text" id="user" name="user"><br>

                        <label for="email">email:</label><br>
                        <input type="text" id="email" name="email"><br>

                        <label for="password">password:</label><br>
                        <input type="text" id="password" name="password"><br>

                        <label for="confirmpassword">confirmpassword:</label><br>
                        <input type="text" id="confirmpassword" name="confirmpassword"><br>

                      



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="add_user" value="user">
                    </div>
                </div>
            </div>
        </div>
</form>
<?php include('footer.php');?>