<?php
   if(isset($_POST['submit'])){
    include("connection.php");
    //$username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   // $confirmpassword = $_POST['confirmpassword'];

    //$sql = "select * from register where email ='$email'";
    //$result = mysqli_query ($conn, $sql);
    //$count_user = mysqli_num_rows($result);

    $sql = "select * from register where email ='$email'";
    $result = mysqli_query ($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user==0 || $count_rows==0){
      if($password==$password){
        $hash =password_hash($password, PASSWORD_DEFAULT);
        $sql ="insert into register(email,password) values('$email', '$password')";
        $result=mysqli_query($conn,$sql);

     //this code takes you to practice.php page after registering
     header("location:practice.php");
      }
      else{
        echo '<script>
        alert("passwords do not match");
        window.location.href="register.php"
        </script>';
      }
    }

    if($count_user==0 || "count_rows==0"){

    }
    else{
      echo '<script>
      alert("user already exists");
      window.location.href = "chefUpload.php"
      </script>';
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="stylelogo.css">
</head>

<body class="signinBody">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!--code for logo-->
                <a class="navbar-brand" href="index2.php">
                    <img src="images/logo.jpg" class="logo">
                    Just Like Mama's
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                        <!--navbar Recipes-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Recipes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/african_cocktail_recipes.php">African
                                        Coctail</a></li>
                                <li><a class="dropdown-item" href="pages/asr.php">African Soups </a></li>
                                <li><a class="dropdown-item" href="#">Main Dish</a></li>
                            </ul>
                        </li>
                        <!--navbar about us-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/aboutUs.php">Mission Statement</a></li>
                                <li><a class="dropdown-item" href="#">Message from Team Lead </a></li>
                            </ul>
                        </li>

                        <!--navbar blogs-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div id="form">
        <h1 id="heading">Sign In<h1><br></h1>
            <form name="form" action="signIn.php" method="post">
                <!--This form sends data to signIn.php using the POST method-->
                <i class="bi bi-envelope-fill"></i>
                <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
                <i class="bi bi-file-lock2-fill"></i>
                <input type="password" id="pass" name="pass" placeholder="Enter Password" required><br><br>
                <input type="submit" id="btn" name="submit" value="submit" />
                <a href="register.php">No Account? Register</a>




            </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>