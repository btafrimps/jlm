<?php include('connection.php');


  

if(isset($_POST['add_recipe'])){

    $chef_name =$_POST['chef_name'];
    $recipe_name =$_POST['recipe_name'];
    $recipe_description =$_POST['Recipe_Description'];
    $youtube =$_POST['Youtube_Link'];
    
    //validation code
    if($chef_name== "" || empty($chef_name)){
        header('location:practice.php?message=you need to fill in the name');
    }
    //the sql query thats does insert
    else{
         $query = "INSERT INTO  signin (chef_name,recipe_name, Recipe_Description,Youtube_Link)
         VALUES ('$chef_name','$recipe_name','$recipe_description','$youtube')";

         $result =mysqli_query($conn, $query);

         if(!$result){
            die("Query Failed" . mysqli_error($conn));

         }
         else{
            echo "your data has been loaded successfully";
            header('location:practice.php');
         }
    }
}


?>