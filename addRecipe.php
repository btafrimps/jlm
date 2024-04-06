<?php
if(isset($_POST['submit'])){
    
    // Define upload directory
    $uploadDir = "../images";

 include("connection.php");
 $recipe_name=$_POST['recipe_name'];
 $chef_name= $_POST['chef_name'];
 $recipe_description=$_POST['recipe_description'];

 //file upload
 $video_upload = $_FILES['video_upload'];
 $picture_upload = $_FILES['picture_upload'];

 // Generate unique filenames
 $videoFileName = uniqid() . '_' . basename($videoFile['name']);
 $pictureFileName = uniqid() . '_' . basename($pictureFile['name']);

 // Set file paths
 $videoFilePath = $uploadDir . $videoFileName;
 $pictureFilePath = $uploadDir . $pictureFileName;

  // Check if files are uploaded successfully
  if (move_uploaded_file($videoFile['tmp_name'], $videoFilePath) && move_uploaded_file($pictureFile['tmp_name'], $pictureFilePath))


 

   if(empty($_POST['recipe_name']) || empty($_POST['chef_name']) || empty($_POST['recipe_description']))
     {
        echo "All fields are required.";
     }

     else
     {
        $sql = "INSERT INTO addrecipe (recipe_name,chef_name,recipe_description,video_upload,picture_upload) VALUES ('$recipe_name','$chef_name','$recipe_description','$video_upload','$picture_upload')";
        $result = mysqli_query($db, $sql);

        if (result)
        {
            echo"upload sucessful";
            header("Location:index2.php");
        }

        else
        {
            echo "Something Went Wrong!";
            header("Location: addRecipe.php");
        }

     }
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Recipe Upload Form</title>
    <link rel="stylesheet" href="stylelogo.css">

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
        height: 100px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <!--<a class="navbar-brand" href="#">-->
    <div class="logo-container">
        <img src="images/logo.jpg" class="logo" alt="Logo">
    </div>
    <!-- </a>-->

    <h1>Upload Your Recipe</h1>

    <form action="addRRecipe.php" method="post" enctype="multipart/form-data">
        <label for="recipe_name">Recipe Name:</label><br>
        <input type="text" id="recipe_name" name="recipe_name"><br><br>

        <label for="chef_name">Chef Name:</label><br>
        <input type="text" id="chef_name" name="chef_name"><br><br>

        <label for="chef_name">Food_category:</label><br>
        <input type="text" id="food_category" name="food_category"><br><br>

        <label for="chef_name">Location:</label><br>
        <input type="text" id="location" name="location"><br><br>

        <label for="recipe_description">Recipe Description:</label><br>
        <textarea id="recipe_description" name="recipe_description" rows="4" cols="50"></textarea><br><br>

        <label for="video_upload">Upload Video:</label><br>
        <input type="file" id="video_upload" name="video_upload"><br><br>

        <label for="picture_upload">Upload Picture:</label><br>
        <input type="file" id="picture_upload" name="picture_upload"><br><br>

        <input type="submit" value="Submit">
    </form>

    <div class="bg-body-tertiary">
        <div class="container">
            <footer>
                <div class="row">

                    <div class="col-6 col-md-6 mb-6">
                        <h5>Contact Us On</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Email:
                                    btafrimps65@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Phone: +233
                                    501363466</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <h5>How to work with us</h5>Contact us through our social media pages or<br> send an email to
                        workwithusjlm@gmail.com.<br>Please note: DO NOT CALL!!
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; Copyright 2024; All rights reserved. <br> Designed by Battista Asare-Frimpong</p>

                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a href=""><i class="fa-brands fa-instagram" style="font-size:30px;"></i></a>
                        </li>
                        <li class="ms-3"><a href=""><i class="fa-brands fa-twitter" style="font-size:30px;"></i></a>
                        </li>
                        <li class="ms-3"><a href="https://www.facebook.com/IntoTheWorldWeGo/"><i
                                    class="fa-brands fa-facebook" style="font-size:30px;"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>