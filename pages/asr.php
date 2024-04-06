<?php
include("../connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Soups- Recipes</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="stylelogo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    .container .col-md-4 img {
        width: 300px;
    }
    </style>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!--code for logo-->
                <a class="navbar-brand" href="../index2.php">
                    <img src="../images/logo.jpg" class="logo">
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
                                <li><a class="dropdown-item" href="pages/african_cocktail_recipes.php">African Coctail</a></li>
                                <li><a class="dropdown-item" href="#">African Soups </a></li>
                                <li><a class="dropdown-item" href="#">Main Dish</a></li>
                            </ul>
                        </li>
                        <!--navbar about us-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Mission Statement</a></li>
                                <li><a class="dropdown-item" href="#">Message from Team Lead </a></li>
                            </ul>
                        </li>

                        <!--navbar blogs-->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search" method = "POST" action = "asr.php">
                        <input class="form-control me-2" type="search" placeholder="Search" name = "search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <?php
   if(isset($_POST["search"])){
    $search = $_POST["search"];
    $sql = "SELECT * FROM `signin` WHERE food_category like '%$search%' or location like '%$search%' or recipe_name like '%$search%'";
   }
   else{
   $sql = "SELECT * FROM signin";
   }
    $result = mysqli_query($conn, $sql);

    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
        <div class="container">
            <?php 
               if(isset($_POST["search"])){
            echo "Showing results for $search"; 
               }
            ?>
           <?php if(count($result) <1){
            echo "<p>Nothin found for $search";
           }else { ?>
            <?php foreach($result as $row){?>
            <div class="row">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">

                            <img src="<?php echo "../uploads/" .$row["Image"] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["recipe_name"] ?></h5>
                                <p class="card-text"><?php echo $row["Recipe_Description"] ?></p>
                                <p class="card-text">Chef: <small class="text-body-secondary"><?php echo $row["chef_name"] ?> | Location: <small class="text-body-secondary"><?php echo $row["location"] ?></small>
                                <p class="card-text"></small><?php echo $row["food_category"]?></p>
                                <a class="btn btn-primary" href="<?php echo $row['Youtube_Link'] ?>" target="_blank" role="button">watch
                                    Video</a>
                            </div>
                        </div>

                    </div>
                    <p>&nbsp;</p>

                </div>

            </div>

            <?php }} ?>
        </div>
    </main>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>