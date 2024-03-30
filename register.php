<?php
  if(isset($_POST['submit'])){
    include("connection.php");
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "select * from register where user ='$username'";
    $result = mysqli_query ($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from register where email ='$email'";
    $result = mysqli_query ($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user==0 || $count_rows==0){
      if($password==$confirmpassword){
        $hash =password_hash($password, PASSWORD_DEFAULT);
        $sql ="insert into register(user,email,password,confirmpassword) values('$username','$email', '$password', '$confirmpassword')";
        $result=mysqli_query($conn,$sql);
header("location:chefUpload.php");
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
    <title>JLM Registration for chefs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="form">
                    <h1 id="heading">Registration Form for Chefs/Cooks<h1><br></h1>
                        <form name="form" action="register.php" method="POST">
                            <!--Form sends data to register.php using the POST method -->
                            <label>Enter Username</label>
                            <input type="text" id="user" name="user" placeholder="Enter Username" required><br><br>

                            <label>Enter Email</label>
                            <input type="email" id="user" name="email" placeholder="Enter Email" required><br><br>

                            <label>Enter Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" required><br><br>

                            <label>Confirm Password</label>
                            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password"
                                required><br><br>

                            <input type="submit" id="btn" value="submit" name="submit" />




                            <!--<div class="d-flex align-items-center justify-content-center">
                                <button type="button" class=" p-2 m-2 btn btn-primary shadow">Register</button>
                            </div>-->

                </div>
            </div>
           <!-- <div class="col-md-6">
                <div id="form">
                    <h1 id="heading">SignIn Form for Users<h1><br></h1>
                        <form name="form" action="register.php" method="post">
                            <!Form sends data to register.php using the POST method 
                            <label>Enter Username</label>
                            <input type="text" id="user" name="user" placeholder="Enter Username" required><br><br>

                            <label>Enter Email</label>
                            <input type="email" id="user" name="email" placeholder="Enter Email" required><br><br>

                            <label>Enter Password</label>
                            <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>

                            <div class="d-flex align-items-center justify-content-center">
                                <a href="index2.php">
                                    <button type="button" class=" p-2 m-2 btn btn-primary shadow">Sign in</button>

                            </div>

                </div>
            </div>-->
        </div>
    </div>


    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>