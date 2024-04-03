<?php include('header.php');?>
<?php include('connection.php');?>

<?php

 if(isset($_GET['id'])){
    $id = $_GET['id'];
 



    $query="SELECT * FROM signin where id= '$id' ";
    $result= mysqli_query($conn, $query);

    if(!$result){
        die("query failed:" .mysqli_error($conn));
    }
    else{

        $row = mysqli_fetch_assoc($result);

       

    } 
}         

?>


<?php

   if(isset($_POST['Update_Recipes'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

    $chef_name =$_POST['chef_name'];
    $recipe_name =$_POST['recipe_name'];
    $Recipe_Description =$_POST['Recipe_Description'];
    $Youtube_Link =$_POST['Youtube_Link'];

    $query = "UPDATE signin 
    SET chef_name = '$chef_name',recipe_name = '$recipe_name', Recipe_Description = '$Recipe_Description', Youtube_Link ='$Youtube_Link'
     WHERE id ='$idnew' ";
    $result =mysqli_query($conn, $query);

    if(!$result){
        die("query failed" .mysqli_error($conn));
    }
    else{
        header('location:practice.php?update_msg=You have successfully updated the data');
    }
   }

?>



<form action ="update_1.php?id_new=<?php echo $id; ?>" method="POST">
    <label for="chef-name">Name:</label><br>
    <input type="text" id="chef-name" name="chef_name" value ="<?php echo $row['chef_name'] ?>"><br>

    <label for="recipe-name">Recipe_Name:</label><br>
    <input type="text" id="recipe-name" name="recipe_name" value ="<?php echo $row['recipe_name'] ?>"><br>

    <label for="ingredients">Recipe Description:</label><br>
    <textarea id="ingredients" name="Recipe_Description"><?php echo $row['Recipe_Description']; ?>"></textarea><br>

    <label for="recipe-name">youtube link:</label><br>
    <input type="text" id="recipe-name" name="Youtube_Link" value ="<?php echo $row['Youtube_Link'] ?>"><br>

    <input type="submit" class="btn btn-success" name="Update_Recipes" value="UPDATE">

</form>




















<?php include('footer.php');?>