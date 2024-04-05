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

    <title>Home Page</title>
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
                                <li><a class="dropdown-item" href="pages/asr.php">African
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
                            <a class="nav-link" href="pages/blogs.php">Blogs</a>
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


        <div class="welcome text-center display-6">
            <h3>WELCOME TO JUST LIKE MAMA'S RECIPES</h3>
        </div>

        <div class="WecomeTag text-center">
            <p class="lead">Your one stop shop for authentic<br>AFRICAN CUISINE</p>
        </div>


        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/ampesis.jpg" class="d-block w-100" alt="banku">
                        <!--<div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>-->
                    </div>
                    <div class="carousel-item">
                        <img src="images/jollofs.jpg" class="d-block w-100" alt="jollofs">
                        <!--<div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>-->
                    </div>
                    <div class="carousel-item">
                        <img src="images/bankuu.jpg" class="d-block w-100" alt="banku">
                        <!--<div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>-->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
        <div class="container">
            <div class="WecomeTag text-center">
                <p class="lead" style="font-weight:thin;"> Every food project start with a single step. <br /> Engage us through our socials so we
                    connect you to<br />
                    our amazing partner chefs or cooks accross the world.</p>
            </div>

            <div class="d-flex align-items-center justify-content-center">

                <button type="button" class=" p-2 m-2 btn btn-primary shadow">Sign up</button>
                <button type="button" class="p-2 m-2 btn btn-primary shadow">Sign In</button>
            </div>

        </div>
    </main>
    

    </div>
   
    
    <div class="bg-body-tertiary" >
        <div class="container">
            <footer>
                <div class="row">

                    <div class="col-6 col-md-6 mb-6">
                        <h3 style= "font-family:comic sans ms; font-weight:bold;">Contact Us On</h3>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-family:comic sans ms; font-weight:light;">Email:
                                    btafrimps65@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" style="font-family:comic sans ms; font-weight:light;">Phone: +233
                                    501363466</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <h3 style="font-family:comic sans ms; font-weight:bold;"> How to work with us</h3> <p style="font-family:comic sans ms; font-weight:light;">Contact us through our social media pages or<br> send an email to
                        workwithusjlm@gmail.com.<br>Please note: DO NOT CALL!!</p>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p style="font-family:comic sans ms; font-weight:light;">&copy; Copyright 2024; All rights reserved. <br> Designed by Battista Asare-Frimpong</p>

                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a href=""><i class="fa-brands fa-instagram" style="font-size:40px;"></i></a>
                        </li>
                        <li class="ms-3"><a href=""><i class="fa-brands fa-twitter" style="font-size:40px;"></i></a>
                        </li>
                        <li class="ms-3"><a href="https://www.facebook.com/IntoTheWorldWeGo/"><i
                            class="fa-brands fa-facebook" style="font-size:40px;"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>