<?php include('header.php');?>
<?php include('connection.php');?>
<div class="box1">
    <h2>ALL DATA</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD RECIPE</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>chef_name</th>
            <th>recipe_name</th>
            <th>Recipe_Description</th>
            <th>Youtube link</th>
            <th>Image<th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <!--start of php connection to db code-->
        <?php   

            $query="SELECT * FROM signin ";
            $result= mysqli_query($conn, $query);

            if(!$result){
                die("query failed:" .mysqli_error());
            }
            else{

                while($row =mysqli_fetch_assoc($result)){

                    ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['chef_name']; ?></td>
            <td><?php echo $row['recipe_name']; ?></td>
            <td><?php echo $row['Recipe_Description']; ?></td>
            <td><?php echo $row['Youtube_Link']; ?></td>
            <td><?php echo $row['Image']; ?></td>
            <td><a href="update_1.php? id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete.php? id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>

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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD RECIPE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="form" class="form-container">
                        <span class="close-btn" onclick="toggleForm()">X</span>
                        <h2>Add Recipe</h2>

                        <label for="fileupload">Select Image</label>
                        <input type="file" name="fileupload" required>

                        <label for="chef-name">Name:</label><br>
                        <input type="text" id="chef-name" name="chef_name"><br>

                        <label for="recipe-name">Recipe_Name:</label><br>
                        <input type="text" id="recipe-name" name="recipe_name"><br>

                        <label for="ingredients">Recipe Description:</label><br>
                        <textarea id="ingredients" name="Recipe_Description"></textarea><br>

                        <label for="recipe-name">youtube link:</label><br>
                        <input type="text" id="recipe-name" name="Youtube_Link"><br>

                        <!--<label for="image">Images:</label><br>
                        <input type="file" id="image" name="image" accept="image/*"><br>-->



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="add_recipe" value="Recipe">
                    </div>
                </div>
            </div>
        </div>
</form>
<?php include('footer.php');?>