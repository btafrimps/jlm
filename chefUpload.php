<?php
  include ("connection.php");
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

    <title>chef/cook page</title>
    <link rel="stylesheet" href="stylelogo.css">

</head>

<body>
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

    <main>
    <button class="input-btn" onclick="toggleForm()">Input Recipes</button>

<div id="form" class="form-container">
    <span class="close-btn" onclick="toggleForm()">X</span>
    <h2>Add Recipe</h2>
    <form>
        <label for="chef-name">Chef/Cook Name:</label><br>
        <input type="text" id="chef-name" name="chef-name"><br>

        <label for="recipe-name">Recipe Name:</label><br>
        <input type="text" id="recipe-name" name="recipe-name"><br>

        <label for="recipe-category">Recipe Category:</label><br>
        <input type="text" id="recipe-category" name="recipe-category"><br>

        <label for="ingredients">Ingredients:</label><br>
        <textarea id="ingredients" name="ingredients"></textarea><br>

        <label for="images">Images:</label><br>
        <input type="file" id="images" name="images" accept="image/*"><br>

        <label for="videos">Videos:</label><br>
        <input type="file" id="videos" name="videos" accept="video/*"><br>

        <button type="submit">Add Recipe</button>
    </form>
</div>

    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>